<?php
$domain = "http://localhost/yamahagp/matbao/admin/";
$root = "E:/xampp7/htdocs/yamahagp/";
$dbhost = 'localhost';
// Database Name
$dbname = 'ilear871_vietnam_racing_festival';
// Database Username
$dbuser = 'root';
// Database Password
$dbpass = '';
$pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Site info
$site_name = "Golf Club Championship";
$site_description = "Golf Club Championship 2020";

//SMTP
$smtp_host = "smtp.gmail.com";
$smtp_port = 587;
$smtp_username = 'admin@vietnamracing.com.vn';
$smtp_password = 'chi5bao@123';
$smtp_secure = 'tls';

//Site settings
$enable_auction_login = false; //If false customer cannot login
$enable_auto_auction_register = true; //If true it allow customer to do auction without login and register


//Query to alter table to utf8 collation
//ALTER DATABASE dbname CHARACTER SET utf8 COLLATE utf8_unicode_ci;
//ALTER TABLE tablename CHARACTER SET utf8 COLLATE utf8_unicode_ci;
//ALTER TABLE mytable CONVERT TO CHARACTER SET utf8