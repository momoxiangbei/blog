<?php
	require_once '../inc/connect.php';
	require_once '../inc/redirect.php';
	$stmt=$pdo->prepare("INSERT INTO comments(comment,create_data,pid) values(:comment,now(),:pid)");
	$stmt->bindvalue(':pid',$_POST['id'],PDO::PARAM_INT);
	$stmt->bindvalue(':comment',$_POST['comment'],PDO::PARAM_STR);
	$stmt->execute();
	$id=$_POST['id'];
	redirect_to("../show/showblog.php?id=$id");
?>