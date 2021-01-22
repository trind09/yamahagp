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

<?php include 'header.php'; ?>

<body>
   <!-- ============================================================== -->
   <!-- main wrapper -->
   <!-- ============================================================== -->
   <div class="dashboard-main-wrapper">
      <div class="dashboard-header">
         <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <a href="<?php echo($domain);?>" class="navbar-brand"><?php echo($site_name);?></a>
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
                     <li class="nav-item">
                        <a onclick="return GoTo('reg_dashboard');" id="reg_dashboard_link" class="nav-link" href="#" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="far fa-address-book"></i>Thông tin đăng ký thi đấu</a>
						<a onclick="return GoTo('news');" id="news_link" class="nav-link" href="#" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-newspaper"></i>Danh sách bản tin</a>
                        <a onclick="return GoTo('caulacbo_pannel');" id="caulacbo_pannel_link" class="nav-link" href="#" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-trophy"></i>Danh sách câu lạc bộ</a>
						<a onclick="return GoTo('auction');" id="auction_link" class="nav-link" href="#" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-gavel"></i>Danh sách người đấu giá</a>
						<a onclick="return GoTo('aution_product');" id="aution_product_link" class="nav-link" href="#" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="far fa-chart-bar"></i>Danh sách sản phẩm đấu giá</a>
						<a onclick="return GoTo('customer');" id="customer_link" class="nav-link" href="#" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-user-circle"></i>Danh sách khách hàng</a>
						<a onclick="return GoTo('plan_pannel');" id="plan_pannel_link" class="nav-link" href="#" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-address-card"></i>Danh sách kế hoạch & điều lệ</a>
						<a onclick="return GoTo('gallery');" id="gallery_link" class="nav-link" href="#" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-address-card"></i>Thư viện ảnh</a>
                        <a onclick="return GoTo('aboutus');" id="aboutus_link" class="nav-link" href="#" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1">
                             <i class="fa fa-address-card"></i>Giới Thiệu Công Ty
                        </a>
                        <a onclick="return GoTo('member');" id="member_link" class="nav-link" href="#" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1">
                             <i class="fa fa-address-card"></i>Thành viên công ty
                        </a>
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
			} elseif ($view == "news"){
				include 'controller/news_dashboard.php';
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
			} elseif ($view == "gallery"){
                include 'controller/gallery_dashboard.php';
            } elseif ($view == "aboutus"){
                include 'controller/aboutus_dashboard.php';
			} elseif ($view == "member"){
                include 'controller/member_dashboard.php';
			} else {
				include 'controller/reg_dashboard.php';
			}
       ?>
   </div>
   <?php include 'footer.php'; ?>
</body>

</html>
