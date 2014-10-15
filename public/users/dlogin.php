<?php
	require_once '../inc/connect.php';
	require_once '../inc/redirect.php';
	$users=$pdo->prepare('select * from users where name= :name'); 
	$users->bindvalue(':name',$_POST['name'],PDO::PARAM_STR);
	$users->execute();
	$user=$users->fetchObject();
	$pwd=md5($_POST['pwd']);
	if($user->pwd==$pwd){
		redirect_to("../index.php");
	}
?>