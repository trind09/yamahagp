<?php
if ($_FILES['file']['name']) {
    if (!$_FILES['file']['error']) {
        $name = md5(rand(100, 200));
        $ext = explode('.', $_FILES['file']['name']);
        $file_ext = strtolower($ext[1]);
        $valid = 1;
        if( $file_ext!='jpg' && $file_ext!='png' && $file_ext!='jpeg' && $file_ext!='gif' ) {
            $valid = 0;
        }
        if ($valid == 1){
            $filename = $name . '.' . $file_ext;
            $destination = 'assets/summernote_imgs/' . $filename; //change this directory
            $location = $_FILES["file"]["tmp_name"];
            move_uploaded_file($location, $destination);
            
            $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $image_url = str_replace('/upload.php', '/assets/summernote_imgs/'. $filename, $actual_link);
            echo $image_url;
        } else {
            echo 'Upload file is not image.';
        }
    }
    else
    {
        echo  'Ooops!  Your upload triggered the following error:  '.$_FILES['file']['error'];
    }
}
?>