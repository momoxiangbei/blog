<?php
header('content-type:text/html;charset=utf-8');
$pdo=new PDO('mysql:host=localhost;dbname=blog','root','root');
$pdo->query("SET NAMES 'utf8'");
// $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);