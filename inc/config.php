<?php
$domain = "http://localhost:8080/yamahagp/";
$dbhost = 'localhost';
// Database Name
$dbname = 'vietnamracing';
// Database Username
$dbuser = 'root';
// Database Password
$dbpass = '123';
$pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Query to alter table to utf8 collation
//ALTER DATABASE dbname CHARACTER SET utf8 COLLATE utf8_unicode_ci;
//ALTER TABLE tablename CHARACTER SET utf8 COLLATE utf8_unicode_ci;
//ALTER TABLE mytable CONVERT TO CHARACTER SET utf8