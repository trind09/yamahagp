<?php include 'inc/config.php'; ?>
<?php include 'inc/functions.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
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
				echo ("<h1>" . $title . "</h1><br/>
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