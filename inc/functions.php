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

function format_money($number, $currency)
{
	$formatter = number_format($number, 2);
    return $formatter . ' ' . $currency;
}

function ShowSwalMessage($message, $is_error, $do_after_script){
	if (isset($message)){
		if (!$is_error){
			echo '<script language="javascript">';
			echo "$(document).ready(function() {
				swal({
				title: '<strong>Notification</strong>',
				html: '" . $message . "',
				type: 'error',
				confirmButtonText: 'Ok'
				}).then((result) => {
				if (!result.isConfirmed) {
					" . $do_after_script . "
				}
				});
				});";
			echo '</script>';
		} else {
			echo '<script language="javascript">';
			echo "$(document).ready(function() {  
				swal({
				title: '<strong>Notification</strong>',
				html: '". $message . "',
				type: 'success',
				confirmButtonText: 'Ok'
				}).then((result) => {
					" . $do_after_script . "
				});
				});";
			echo '</script>';
		}
	}
}


function SendMail($mail, $subject, $message, $sender_email, $sender_name, $reply_to_email, $reply_to_name, $to_email, $to_name, $cc_emails){
	$mail->setFrom($sender_email, $sender_name);
    $mail->addAddress($to_email, $to_name);
    $mail->addReplyTo($reply_to_email, $reply_to_name);
	if ($cc_emails != null){
		foreach ($cc_emails as $cc_email)
		{
			$mail->AddCC($cc_email);
		}
	}
	
	$mail->IsHTML(true);
    $mail->Subject = $subject;

    $mail->Body = $message;
	$mail->AltBody = strip_tags($message);
	try{
		if(!$mail->Send()) {
		  return $mail;
		} else {
		  return null;
		}
	} catch (Exception $e){
		return $e;
	}
}

function PasswordHash($password){
	$pwd_hashed = password_hash($password, PASSWORD_DEFAULT);
    return $pwd_hashed;
}

function PasswordVerify($password, $hash){
    return password_verify($password , $hash);
}

function RandomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

/**
* Create image thumbnail
*/
function CreateThumbnail($filepath, $thumbpath, $thumbnail_width, $thumbnail_height, $original_type, $background=false) {
    list($original_width, $original_height, $original_type) = getimagesize($filepath);
    if ($original_width > $original_height) {
        $new_width = $thumbnail_width;
        $new_height = intval($original_height * $new_width / $original_width);
    } else {
        $new_height = $thumbnail_height;
        $new_width = intval($original_width * $new_height / $original_height);
    }
    $dest_x = intval(($thumbnail_width - $new_width) / 2);
    $dest_y = intval(($thumbnail_height - $new_height) / 2);
	
    if ($original_type === 1) {
        $imgt = "ImageGIF";
        $imgcreatefrom = "ImageCreateFromGIF";
    } else if ($original_type === 2) {
        $imgt = "ImageJPEG";
        $imgcreatefrom = "ImageCreateFromJPEG";
    } else if ($original_type === 3) {
        $imgt = "ImagePNG";
        $imgcreatefrom = "ImageCreateFromPNG";
    } else {
        return false;
    }

    $old_image = $imgcreatefrom($filepath);
    $new_image = imagecreatetruecolor($thumbnail_width, $thumbnail_height); // creates new image, but with a black background

    // figuring out the color for the background
    if(is_array($background) && count($background) === 3) {
      list($red, $green, $blue) = $background;
      $color = imagecolorallocate($new_image, $red, $green, $blue);
      imagefill($new_image, 0, 0, $color);
    // apply transparent background only if is a png image
    } else if($background === 'transparent' && $original_type === 3) {
      imagesavealpha($new_image, TRUE);
      $color = imagecolorallocatealpha($new_image, 0, 0, 0, 127);
      imagefill($new_image, 0, 0, $color);
    }
	
    imagecopyresampled($new_image, $old_image, $dest_x, $dest_y, 0, 0, $new_width, $new_height, $original_width, $original_height);
	
    $imgt($new_image, $thumbpath);
    return file_exists($thumbpath);
}