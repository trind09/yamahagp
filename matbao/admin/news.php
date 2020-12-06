<?php
$dir = "assets/news";

$files = array_slice(scandir($dir), 2);
foreach ($files as $item) {
    if (strpos( $item, '.htm' ) !== false){
		$new_str = '<div class="js-news--detail"><div class="news-item">';
		$news_title = "";
		$news_description = "";
		$withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $item);
		$counter = 0;
		$handle = fopen($dir . '/texts/' . $withoutExt . '.txt', "r");
		$externallink = "";
		if ($handle) {
			while (($line = fgets($handle)) !== false) {
				if ($counter == 0){
					$news_title = $line;
				} else if ($counter == 1){
					$news_description = $line;
				} else if ($counter == 2){
					$externallink = $line;
				}
				$counter++;
			}
			fclose($handle);
		}

		if ($externallink != ""){
			$new_str .= '<p class="thumb"><a href="' . $externallink . '"><img src="assets/news/images/' . $withoutExt . '.jpg"></a></p>';
			$new_str .= '<div class="copy">';
			$new_str .= '<h4><a href="'. $externallink . '" tabindex="0">' . $news_title . '</a></h4>';
			$new_str .= '<p>' . $news_description . '</p>';
			$new_str .= '<a href="' . $externallink . '" class="viewmore">Xem chi tiết</a>';
		} else {
			$new_str .= '<p class="thumb"><a href="assets/news/' . $item . '"><img src="assets/news/images/' . $withoutExt . '.jpg"></a></p>';
			$new_str .= '<div class="copy">';
			$new_str .= '<h4><a href="assets/news/' . $item . '">' . $news_title . '</a></h4>';
			$new_str .= '<p>' . $news_description . '</p>';
			$new_str .= '<a href="assets/news/' . $item . '" class="viewmore">Xem chi tiết</a>';
		}
		$new_str .= '</div></div></div>';

		echo($new_str);
	}
}
?>