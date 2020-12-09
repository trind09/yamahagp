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

function GetImageLinks($agr, $str, $domain){
	$pieces = explode("|", $str);
	foreach ($pieces as $piece) {	
		return $domain . $piece;
	}
	return "";
}

/**
 *	Search tag: jquery force browser to reload js va css files
 *  Source: https://stackoverflow.com/questions/118884/how-to-force-the-browser-to-reload-cached-css-and-javascript-files
 *  Given a file, i.e. /css/base.css, replaces it with a string containing the
 *  file's mtime, i.e. /css/base.1221534296.css.
 *
 *  @param $file  The file to be loaded.  Must be an absolute path (i.e.
 *                starting with slash).
 *
 *	Add these line to .htaccess file as follow:
 *	RewriteEngine on
 *	RewriteRule ^(.*)\.[\d]{10}\.(css|js)$ $1.$2 [L]
 */
function auto_version($file)
{
  $return_path = $file . '?' . rand(10,100);
  return $return_path;
}