<?php
$domain = "http://localhost:8080/yamahagp/";
$root = "C:/xampp/htdocs/yamahagp/";
$dbhost = 'localhost:8080';
// Database Name
$dbname = 'ilear871_vietnam_racing_festival';
// Database Username
$dbuser = 'root';
// Database Password
$dbpass = '';
$pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Site info
$site_name = "Vietnam Racing Festival 2020";
$site_description = "Where is your limit?";
$site_image = "assets/images/site_image.png";
$site_favicon = "assets/images/favicon.png";

//SMTP
$smtp_host = "smtp.gmail.com";
$smtp_port = 587;
$smtp_username = 'admin@vietnamracing.com.vn';
$smtp_password = 'chi5bao@123';
$smtp_secure = 'tls';

//Site settings
$enable_auction_login = false; //If false customer cannot login
$enable_auto_auction_register = true; //If true it allow customer to do auction without login and register
$enable_slide_video_and_buy_ticket = false; //If true it allow customer to do auction without login and register

//Query to alter table to utf8 collation
//ALTER DATABASE dbname CHARACTER SET utf8 COLLATE utf8_unicode_ci;
//ALTER TABLE tablename CHARACTER SET utf8 COLLATE utf8_unicode_ci;
//ALTER TABLE mytable CONVERT TO CHARACTER SET utf8