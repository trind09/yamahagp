<?php 
include '../inc/config.php';
include '../inc/functions.php';

session_start(); 
$view = null;
if(isset($_GET["view"])) {
	$view = $_GET["view"];
}
?>
<html lang="en">

<head>
	<!-- SEO -->
    <title>Golf Club Championship 2020</title>
	<meta name="description" content="GIẢI VÔ ĐỊCH CÁC CLB GOLF TRANH CÚP TASMANIA">
	<meta name="keywords" content="">
	<meta name="og:title" content="Golf Club Championship 2020">
	<meta name="og:description" content="GIẢI VÔ ĐỊCH CÁC CLB GOLF TRANH CÚP TASMANIA">
	<meta name="og:image" content="../assets/images/logo.png">
    
	<meta property="og:image" content="../assets/images/bg.jpg">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="1024">
	<meta property="og:image:height" content="576">

    <link rel="icon" type="image/png" href="../assets/images/favicon.png">
    <meta name="robots" content="noodp, noydir">

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
			var view = getUrlParameter('view');
			if (view == "reg_dashboard") {
				$('#reg_dashboard_link').attr('class', 'nav-link active');
            } else if (view == 'caulacbo_pannel') {
                $('#caulacbo_pannel_link').attr('class', 'nav-link active');
            } else if (view == 'auction') {
                $('#auction_link').attr('class', 'nav-link active');
            } else if (view == 'aution_product') {
                $('#aution_product_link').attr('class', 'nav-link active');
            } else if (view == 'customer') {
                $('#customer_link').attr('class', 'nav-link active');
            } else if (view == 'plan_pannel') {
                $('#plan_pannel_link').attr('class', 'nav-link active');
            } else {
				$('#reg_dashboard_link').attr('class', 'nav-link active');
			}
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


		/* Menu links */
		function GoTo(view) {
            if (view == "reg_dashboard") {
				location.href = "index.php?view=reg_dashboard";
            } else if (view == 'caulacbo_pannel') {
                location.href = "index.php?view=caulacbo_pannel";
            } else if (view == 'auction'){
				location.href = "index.php?view=auction";
			} else if (view == 'customer'){
				location.href = "index.php?view=customer";
			} else if (view == 'aution_product'){
				location.href = "index.php?view=aution_product";
			} else if (view == 'plan_pannel') {
                location.href = "index.php?view=plan_pannel";
            }
			else {
				location.href = "index.php?view=reg_dashboard";
			}
        }

		/* Menu links */
		
		function Logout(){
			window.location.href = 'login.php?logout=1';
		}

		var getUrlParameter = function getUrlParameter(sParam) {
			var sPageURL = window.location.search.substring(1),
				sURLVariables = sPageURL.split('&'),
				sParameterName,
				i;

			for (i = 0; i < sURLVariables.length; i++) {
				sParameterName = sURLVariables[i].split('=');

				if (sParameterName[0] === sParam) {
					return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
				}
			}
		};
	</script>
    <title>Golf Club Championship 2020</title>
</head>

<body>
   <!-- ============================================================== -->
   <!-- main wrapper -->
   <!-- ============================================================== -->
   <div class="dashboard-main-wrapper">
      <div class="dashboard-header">
         <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <a href="<?php echo($domain);?>" class="navbar-brand">Golf Club Championship 2020</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
               <a class="dropdown-item" href="#" onclick="return Logout();" style="text-align: right;"><i class="fas fa-power-off mr-2"></i>Logout</a>
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
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav flex-column">
                     <li class="nav-divider">Menu</li>
                     <li class="nav-item ">
                        <a onclick="return GoTo('reg_dashboard');" id="reg_dashboard_link" class="nav-link" href="#" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="far fa-address-book"></i>Thông tin đăng ký thi đấu</a>
                        <a onclick="return GoTo('caulacbo_pannel');" id="caulacbo_pannel_link" class="nav-link" href="#" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-trophy"></i>Danh sách câu lạc bộ</a>
						<a onclick="return GoTo('auction');" id="auction_link" class="nav-link" href="#" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-gavel"></i>Danh sách người đấu giá</a>
						<a onclick="return GoTo('aution_product');" id="aution_product_link" class="nav-link" href="#" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="far fa-chart-bar"></i>Danh sách sản phẩm đấu giá</a>
						<a onclick="return GoTo('customer');" id="customer_link" class="nav-link" href="#" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-user-circle"></i>Danh sách khách hàng</a>
						<a onclick="return GoTo('plan_pannel');" id="plan_pannel_link" class="nav-link" href="#" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-address-card"></i>Danh sách kế hoạch & điều lệ</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <!-- ============================================================== -->
      <!-- end left sidebar -->
      <!-- ============================================================== -->
      <?php 
			if ($view == "reg_dashboard"){
				include 'controller/reg_dashboard.php';
			} elseif ($view == "caulacbo_pannel"){
				include 'controller/clb_dashboard.php';
			} elseif ($view == "auction"){
				include 'controller/auction_dashboard.php';
			} elseif ($view == "aution_product"){
				include 'controller/aution_product_dashboard.php';
			} elseif ($view == "customer"){
				include 'controller/customer_dashboard.php';
			} elseif ($view == "plan_pannel"){
				include 'controller/pla_dashboard.php';
			} else {
				include 'controller/reg_dashboard.php';
			}
		?>
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
</body>

</html>
