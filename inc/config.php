<?php
$domain = "http://thuctaplamsang.edu.vn/vietnamracing/";
$dbhost = 'localhost';
$dbhost = 'localhost';
// Database Name
$dbname = 'ilear871_vietnam_racing_festival';
// Database Username
$dbuser = 'ilear871_ilearn';
// Database Password
$dbpass = 'panda@80';
$pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Query to alter table to utf8 collation
//ALTER DATABASE dbname CHARACTER SET utf8 COLLATE utf8_unicode_ci;
//ALTER TABLE tablename CHARACTER SET utf8 COLLATE utf8_unicode_ci;
//ALTER TABLE mytable CONVERT TO CHARACTER SET utf8