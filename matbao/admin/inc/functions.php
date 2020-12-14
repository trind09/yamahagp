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

function GetImageLinks($str, $domain){
	$arr = array();
	$pieces = array_filter(explode("|", $str));
	foreach ($pieces as $piece) {	
		array_push($arr, $domain . str_replace("../", "",$piece));
	}
	return $arr;
}

function IsArrayEmpty($arr){
	if (is_array($arr)){
		if (count($arr) > 0){
			if (count($arr) == 1 && $arr[0] == ''){
				return true;
			}
		} else {
			return true;
		}
	} else {
		return true;
	}
	return false;
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

/**
*	Check email
 */
function isEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function IsItemInArray($item, $arr){
	if (is_array($arr)){
		foreach ($arr as $e) {
			$a = $e . "";
			$b = $item . "";
			if ($a == $b){
				return true;
			}
		}
		return false;
	} else {
		return false;
	}
}

function js_str($s)
{
    return '"' . addcslashes($s, "\0..\37\"\\") . '"';
}

function js_array($array)
{
    $temp = array_map('js_str', $array);
    return '[' . implode(',', $temp) . ']';
}

function BuildClientDateTime($datetime){
	$value = (new DateTime($datetime))->format('c');
	$value = explode("+", $value);
	return $value[0];
}



function ShowMessage($message, $arg){
	echo ("<style>.alert {
		  padding: 20px;
		  background-color: #f44336;
		  color: white;
		  text-align: center;
		}

		.success {
			padding: 20px;
			background-color: green;
			color: white;
			text-align: center;
		}

		.closebtn {
		  margin-left: 15px;
		  color: white;
		  font-weight: bold;
		  float: right;
		  font-size: 22px;
		  line-height: 20px;
		  cursor: pointer;
		  transition: 0.3s;
		}

		.closebtn:hover {
		  color: black;
		}</style>");
	if($arg){
		echo("<div class='success'>
			  <span class='closebtn' onclick='$(this.parentElement).hide();'>&times;</span> 
			  " . $message . "
			</div>");
	} else {
		echo("<div class='alert'>
			  <span class='closebtn' onclick='$(this.parentElement).hide();'>&times;</span> 
			  " . $message . "
			</div>");
	}
}