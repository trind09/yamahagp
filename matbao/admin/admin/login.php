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
	<title>Login page</title>
</head>
<?php
include '../inc/config.php';
include '../inc/functions.php';
if (isset($_GET['logout'])) {
	session_start();
	session_destroy();
	header('Location: login.php');
} else {
	session_start();
	$is_admin = isset( $_SESSION['username'] );
	if ($is_admin){
		header('Location: index.php');
	} else {
		if(isset($_POST['form1'])) {
			$message = "";
			$username = "";
			if (isset($_POST['username'])) {
				$username = strip_tags($_POST['username']);
				if ($username == ""){
					$message .= " Xin nhập Username.";
				}
			} else {
				$message .= " Xin nhập Username.";
			}
			$password = "";
			if (isset($_POST['password'])) {
				$password = strip_tags($_POST['password']);
				if ($password == ""){
					$message .= " Xin nhập Password.";
				}
			} else {
				$message .= " Xin nhập Password.";
			}
			
			if ($message != ""){
				echo("<script> alert('" . $message . "');</script>");
			} else {
				$sql = "SELECT * FROM users where username = ? and password = ?;";
				$statement = $pdo->prepare($sql);
				$statement->execute(array($username, $password));
				$result = $statement->fetchAll(PDO::FETCH_ASSOC);
				if (count($result) > 0) {
					session_start();
					$_SESSION['username'] = $username;
					header('Location: index.php');
				} else {
					echo("<script> alert('Tên đăng nhập và mật khẩu không đúng.');</script>");
				}
			}
		}
	}
}
?>
<body>
	<form id="form1" action="" method="post" >
		<div class="card">
			 <h5 class="card-header">Đăng nhập</h5>
			 <div class="card-body">
				<div class="form-group">
				  <label for="username">Username</label>
				  <input id="username" type="text" name="username" class="form-control">
			    </div>
			    <div class="form-group">
				  <label for="password">Password</label>
				  <input id="password" type="password" name="password" class="form-control">
			    </div>
				<div class="form-group">
					<button type="submit" class="btn btn-space btn-primary" name="form1">Login</button>
				</div>
			 </div>
		</div>
    </form>
</body>
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
</html>