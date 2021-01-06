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
	<!-- Cards CSS -->
	<link rel="stylesheet" href="assets/css/summernote.css">
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
            } else if (view == 'news') {
                $('#news_link').attr('class', 'nav-link active');
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
            } else if (view == 'gallery') {
                $('#gallery_link').attr('class', 'nav-link active');
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
            } else if (view == 'news') {
                location.href = "index.php?view=news";
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
            } else if (view == 'gallery') {
                location.href = "index.php?view=gallery";
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