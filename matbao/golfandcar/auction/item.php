<?php include '../inc/config.php'; ?>
<?php include '../inc/functions.php'; ?>
<?php 
$aid = htmlspecialchars($_GET["aid"]);
if (isset($aid)){
	$sql = "SELECT * FROM auction_product where id = " . $aid;
	$statement = $pdo->prepare($sql);
	$statement->execute();
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);

	if (count($result) > 0)
	{
		foreach ($result as $row)
		{
			$id = $row["id"];
			$pro_name = $row["pro_name"];
			$pro_short_description = $row["pro_short_description"];
			$pro_description = $row["pro_description"];
			$pro_type = $row["pro_type"];
			$start_date = $row["start_date"];
			$end_date = $row["end_date"];
			$extra_option = $row["extra_option"];

			$first_image = "";
			$img_url_array = GetImageLinks($row["picture"], $domain);
			if (count($img_url_array) > 0)
			{
				$first_image = str_replace('../', $domain, $img_url_array[0]);
			}
			
			echo('<!DOCTYPE html><html class="no-js" lang=""><head>');
			
			//Update meta tags
			
			echo('<meta charset="utf-8">');
			echo('<meta http-equiv="X-UA-Compatible" content="IE=edge">');
			
			//SEO
			echo('<title>' . $pro_name . '</title>');
			echo('<meta name="description" content="' . $pro_short_description . '">');
			echo('<meta name="keywords" content="">');
			echo('<meta name="og:title" content="' . $pro_name . '">');
			echo('<meta name="og:description" content="' . $pro_short_description . '">');
			echo('<meta name="og:image" content="' . $first_image . '">');
			
			echo('<meta property="og:image" content="' . $first_image . '">');
			echo('<meta property="og:image:type" content="image/png">');
			echo('<meta property="og:image:width" content="1024">');
			echo('<meta property="og:image:height" content="576">');
			echo('<link rel="icon" type="image/png" href="' . $domain . $site_favicon . '">');
			echo('<meta name="robots" content="noodp, noydir">');
			
			//No Google Translate toolbar
			echo('<meta name="google" content="notranslate">');

			//Viewport and mobile
			echo('<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0">');
			echo('<meta name="HandheldFriendly" content="true">');
			echo('<meta name="MobileOptimized" content="320">');
			echo('<meta http-equiv="cleartype" content="on">');
			
			echo('</head>');
			echo('<body><script>window.location.replace("' . $domain . '?aid=' . $aid . '");</script></body>');
			echo('</html>');
		}
	}
}
?>