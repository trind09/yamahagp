<?php
$dir = "assets/news";

$files = array_slice(scandir($dir), 2);
foreach ($files as $item) {
    if (strpos( $item, '.htm' ) !== false){
		$withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $item);
		echo ('<div class="js-news--detail"><div class="news-item">');
		echo ('<p class="thumb"><a href="assets/news/' . $item . '" tabindex="0"><img src="assets/news/images/' . $withoutExt . '.jpg"></a></p>');
		echo ('<div class="copy">');
		$counter = 0;
		$handle = fopen($dir . '/texts/' . $withoutExt . '.txt', "r");
		if ($handle) {
			while (($line = fgets($handle)) !== false) {
				if ($counter == 0){
					echo('<h4><a href="assets/news/'. $item . '" tabindex="0">' . $line . '</a></h4>');
				} else if ($counter == 1){
					echo('<p>' . $line . '</p>');
				}
				$counter++;
			}
			fclose($handle);
		}
		echo('<a href="assets/news/' . $item . '" class="viewmore" tabindex="0">Xem chi tiết</a>');
		echo ('</div></div></div>');
	}
}
?>