<?php session_start(); ?>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <!-- DataTable CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
    <!-- Cards CSS -->
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <!-- Loading screen CSS -->
    <style>
        .hidden {
            display: none;
        }
		
		div.scrollable {
		    width: 200px;
			height: 50px;
			margin: 0;
			padding: 0;
			overflow: auto;
		}
    </style>
	<script>
		function loadJQuery(){
			var waitForLoad = function () {
				if (typeof jQuery != "undefined") {
					InitControls();     
				} else {
					window.setTimeout(waitForLoad, 500);
				}
			 };
			 window.setTimeout(waitForLoad, 500);   
		}

		window.onload = loadJQuery;
		
		function InitControls(){
			if ( typeof from_date !== 'undefined' && Object.prototype.toString.call(from_date) == '[object String]') {
				document.getElementById("from_date").value = from_date;
			}
			if ( typeof amount_of_record !== 'undefined' && $.isNumeric(amount_of_record)) {
				$('#amount_of_record').val(amount_of_record);
			}
		}
		
		function ClearBeforeSubmit(){
			$('#amount_of_record').val('');
			$('#from_date').val('');
			return true;
		}
		
		function Logout(){
			window.location.href = 'login.php?logout=1';
		}
	</script>
    <title>Vietnam Racing Website</title>
</head>

<body>
    <form id="form1" action="" method="post" >
        <!-- ============================================================== -->
        <!-- main wrapper -->
        <!-- ============================================================== -->
        <div class="dashboard-main-wrapper">
			<div class="dashboard-header">
                <nav class="navbar navbar-expand-lg bg-white fixed-top">
					<a href="http://vietnamracing.com.vn/" class="navbar-brand">Vietnam Racing Webite</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-right-top">
                            <li class="nav-item dropdown notification">
                                <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i><span class="indicator"></span></a>
                                <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                    <li>
                                        <div class="notification-title">Notification</div>
                                        <div class="notification-list">
                                            <div class="list-group" runat="server" id="newest_comments"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="list-footer"><a href="#" onclick="return GoTo('ViewMyComment');">Xem tất cả tin nhắn</a></div>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown connection">
                                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-th"></i></a>
                                <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                    <li class="connection-list">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                                <a title="Hướng dẫn sử dụng" href="/quanlymaudon.aspx?md_page=help" class="connection-item" id="fa_th1">
                                                    <img src="/DesktopModules/QuanLyMauDon/Source/Images/Help.png" alt="">
                                                    <span>Hướng dẫn sử dụng</span></a>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                                <a title="Quản lý đăng ký và môn học" href="/DesktopModules/QuanLyMauDon/Source/DangKyMonHoc/CourseManagement.aspx" class="connection-item" id="fa_th2">
                                                    <img src="/DesktopModules/QuanLyMauDon/Source/Images/CourseManagement.png" alt="">
                                                    <span>Quản lý đăng ký và môn học</span></a>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                                <a title="Quản lý danh sách đơn sinh viên" href="/quanlymaudon.aspx?md_page=ticketmanagement" class="connection-item">
                                                    <img src="/DesktopModules/QuanLyMauDon/Source/Images/clipboard-list-icon.png" alt="">
                                                    <span>Quản lý danh sách đơn sinh viên</span></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                                <a title="Thiết lập hệ thống Nộp Đơn" href="/quanlymaudon.aspx?md_page=systemconfiguration" class="connection-item">
                                                    <img src="/DesktopModules/QuanLyMauDon/Source/Images/200561-200.png" alt="">
                                                    <span>Thiết lập hệ thống Nộp Đơn</span></a>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                                <a title="Văn thư" href="/vănthư.aspx" class="connection-item">
                                                    <img src="/DesktopModules/OnlineDocumentArchive/View/Images/add.png" alt=""><span>Văn thư</span></a>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                                <a title="Báo lỗi" href="/quanlymaudon.aspx?md_page=feedback" class="connection-item">
                                                    <img src="/DesktopModules/QuanLyMauDon/Source/Images/Feedback.png" alt="">
                                                    <span>Báo lỗi</span></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown nav-user">
                                <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle" runat="server" id="current_user_photo"/></a>
                                <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                    <div class="nav-user-info">
                                        <h5 class="mb-0 text-white nav-user-name" runat="server" id="user_display_name"></h5>
                                        <span class="status"></span><span class="ml-2" runat="server" id="user_type"></span>
                                    </div>
                                    <a class="dropdown-item" href="#" runat="server" id="user_link"><i class="fas fa-user mr-2"></i>Account</a>
                                    <a class="dropdown-item" href="#" onclick="return Logout();"><i class="fas fa-power-off mr-2"></i>Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- ============================================================== -->
            <!-- end navbar -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- left sidebar -->
            <!-- ============================================================== -->
            <div class="nav-left-sidebar sidebar-dark">
                <div class="menu-list">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="d-xl-none d-lg-none" href="#">Danh sách đăng ký</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav flex-column">
                                <li class="nav-divider">Menu</li>
                                <li class="nav-item ">
                                    <a onclick="return GoTo('Dashboard');" id="dashboard_link" class="nav-link active" href="#" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="far fa-chart-bar"></i>Dashboard <span class="badge badge-success">6</span></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end left sidebar -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- wrapper  -->
            <!-- ============================================================== -->
            <div class="dashboard-wrapper">
                <div class="dashboard-ecommerce">
                    <div class="container-fluid dashboard-content ">
                        <div class="ecommerce-widget" id="maudon">
                            <!-- Table of all records  -->
                            <!-- ============================================================== -->
                            <div class="row">
                                <!-- ============================================================== -->
                                <!-- basic table  -->
                                <!-- ============================================================== -->
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="card">
										<div class="card-header">
                                            <h2 class="mb-0">Danh sách đăng ký</h2>
                                            <div class="form-group">
                                                <label for="amount_of_record">Số dòng dữ liệu: </label>
												<select name="amount_of_record" id="amount_of_record" class="form-control">
												  <option value="100">100</option>
												  <option value="500">500</option>
												  <option value="1000" selected>1000</option>
												</select>
                                            </div>
                                            <div class="form-group">
                                                <label for="from_date">Từ ngày: </label>
												<input type="date" class="form-control" name="from_date" id="from_date" />
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-space btn-primary" name="form1">Show</button>
												<button type="submit" class="btn btn-space btn-secondary" name="form1" onclick="return ClearBeforeSubmit();">Clear</button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
												<?php include 'dashboard.php';?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ============================================================== -->
                                <!-- end basic table  -->
                                <!-- ============================================================== -->
                            </div>
                            <!-- ============================================================== -->
                            <!-- end table of all record -->
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- end wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end main wrapper  -->
        <!-- ============================================================== -->
        <!-- Optional JavaScript -->
        <!-- jquery 3.3.1 -->
        <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
        <!-- bootstap bundle js -->
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
        <!-- slimscroll js -->
        <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
        <!-- main js -->
        <script src="assets/libs/js/main-js.js"></script>
        <!-- chart chartist js -->
        <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
        <!-- sparkline js -->
        <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
        <!-- morris js -->
        <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
        <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
        <!-- chart c3 js -->
        <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
        <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
        <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
        <!-- datatable js -->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
        <script src="assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
        <script src="assets/vendor/datatables/js/data-table.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
        <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
        <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
        <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
    </form>
</body>

</html>
