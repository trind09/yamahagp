<?php
function GetLicenseFile($agr, $str, $domain){
	$pieces = explode("|", $str);
	foreach ($pieces as $piece) {	
		if ($agr == "license_file1" && strpos($piece, '_A2_') !== false){
			return $domain . $piece;
		} else if ($agr == "license_file2" && strpos($piece, '_B_') !== false){
			return $domain . $piece;
		} else if ($agr == "license_file3" && strpos($piece, '_VMA_') !== false){
			return $domain . $piece;
		} else if ($agr == "license_file4" && strpos($piece, '_A1_') !== false){
			return $domain . $piece;
		}
	}
	return "";
}

function GetBantransferFile($agr, $str, $domain){
	$pieces = explode("|", $str);
	foreach ($pieces as $piece) {	
		if ($agr == "banktransfer_file1" && strpos($piece, '_bank1_') !== false){
			return $domain . $piece;
		}
	}
	return "";
}