<?php
$sql = "SELECT * FROM new";
$statement = $pdo->prepare($sql);
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);

if (count($result) > 0)
{
	$counter = 1;

	foreach ($result as $row)
	{
		$img_url_array = GetImageLinks($row["image_name"], $domain);
		$id = $row["id"];
		$title = $row["title"];
		$description = $row["description"];
		$hyperlink = $row["hyperlink"];
		$first_image = "";
		$img_url_array = GetImageLinks($row["image_name"], $domain);
		if (count($img_url_array) > 0)
		{
			$first_image = '<img src="' . $img_url_array[0] . '" alt="' . $title . '" style="width:100%"/><br/>';
		}
		echo ("<div class='news-item'>
        <p class='thumb'><a href='" . $hyperlink ."'>" . $first_image . "</a></p>
        <div class='copy'>
            <h4> ". $title . " </h4>
            <p>" . $description . "</p>
            <a class='viewmore' href='" . $hyperlink . "'>xem them</a>
        </div>
        </div>");

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
?>