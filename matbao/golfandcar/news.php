<?php
$sql = "SELECT * FROM news ORDER BY create_date desc;";
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
		$content = $row["content"];
		$hyperlink = $row["hyperlink"];
		$hyperlink = '<a target="_blank" class="viewmore" href="' . $hyperlink . '">Xem thêm</a>';
		if ($hyperlink == ''){
			$hyperlink = '<a class="viewmore" style="cursor: pointer;">Xem thêm</a>';
		}
		if ($content != ''){
			$hyperlink = '<a target="_blank" class="viewmore" onclick="ShowNewsDetail(' . $id . ');" style="cursor: pointer;">Xem thêm</a>';
		}
		$first_image = "";
		$img_url_array = GetImageLinks($row["image_name"], $domain);
		if (count($img_url_array) > 0)
		{
			$first_image = '<img src="' . $img_url_array[0] . '" alt="' . $title . '" style="width:100%"/>';
		}
		echo ("<div class='news-item'>
        <p class='thumb'>" . $first_image . "</p>
        <div class='copy'>
            <h4>". $title . "</h4>
            <p>" . $description . "</p>
            " . $hyperlink . "
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