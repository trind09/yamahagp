<?php
$domain = "http://localhost/yamahagp/";
$root = "E:/xampp7/htdocs/yamahagp/";
$dbhost = 'localhost';
// Database Name
$dbname = 'daotaome_golfandcar';
// Database Username
$dbuser = 'root';
// Database Password
$dbpass = '';
$pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$site_name = "Golf Club Championship 2020";
$smtp_host = "smtp.gmail.com";
$smtp_port = 587;
$smtp_username = 'admin@vietnamracing.com.vn';
$smtp_secure = 'tls';

//Query to alter table to utf8 collation
//ALTER DATABASE dbname CHARACTER SET utf8 COLLATE utf8_unicode_ci;
//ALTER TABLE tablename CHARACTER SET utf8 COLLATE utf8_unicode_ci;
//ALTER TABLE mytable CONVERT TO CHARACTER SET utf8