<?php include 'inc/config.php'; ?>
<?php include 'inc/functions.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<?php
	if (isset($_GET['id'])) {
		$id = strip_tags($_GET['id']);
		$sql = "SELECT * FROM news where id = ?;";
		$statement = $pdo->prepare($sql);
		$statement->execute(array($id));
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);

		if (count($result) > 0)
		{
			$counter = 1;

			foreach ($result as $row)
			{
				$id = $row["id"];
				$title = $row["title"];
				$content = $row["content"];
				$description = $row["description"];
				$description = str_replace('\'', "", $description);
				$image_name = $row["image_name"];
				$image_urls = explode("|", $image_name);
				$image_url = "";
				if (count($image_urls) > 0){
					$image_url = $domain . str_replace("../", "", $image_urls[0]);
				}
				$script = '<script> $(document).ready(function() {
							document.title = "' . $title . '";
								});
								$("head").append("<meta name=\'description\' content=\'' . $description . '\'>");
								$("head").append("<meta name=\'og:title\' content=\'' . $title . '\'>");
								$("head").append("<meta name=\'og:description\' content=\'' . $description . '\'>");
								$("head").append("<meta name=\'og:image\' content=\'' . $image_url . '\'>");
								$("head").append("<meta property=\'og:image\' content=\'' . $image_url . '\'>");
								$("head").append("<meta property=\'og:image:type\' content=\'image/png\'>");
								$("head").append("<meta property=\'og:image:width\' content=\'1024\'>");
								$("head").append("<meta property=\'og:image:height\' content=\'576\'>");
							</script>';
				echo ($script . "<h1>" . $title . "</h1><br/>
				<div>" . $content . "</div>");

				$counter++;
			}
			if ($counter == 1)
			{
				echo ("No record");
			}
		}
		else
		{
			echo ("No record");
		}
	}
	?>
</body>
</html>