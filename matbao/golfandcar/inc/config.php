<?php
$domain = "http://localhost/yamahagp/matbao/golfandcar/";
$root = "C:/xampp/htdocs/yamahagp/matbao/golfandcar/";
$dbhost = 'localhost';
// Database Name
$dbname = 'u888166303_golfandcar';
// Database Username
$dbuser = 'root';
// Database Password
$dbpass = '';
$pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Site info
$site_name = "Golf Club Championship 2020";
$site_description = "GIẢI VÔ ĐỊCH CÁC CLB GOLF TRANH CÚP TASMANIA";
$site_image = "assets/images/logo.png";
$site_favicon = "assets/images/favicon.png";


//Query to alter table to utf8 collation
//ALTER DATABASE dbname CHARACTER SET utf8 COLLATE utf8_unicode_ci;
//ALTER TABLE tablename CHARACTER SET utf8 COLLATE utf8_unicode_ci;
//ALTER TABLE mytable CONVERT TO CHARACTER SET utf8