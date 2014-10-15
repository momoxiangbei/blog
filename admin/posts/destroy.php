<?php
require_once '../inc/connect.php';
require_once '../inc/redirect.php';
$sql="DELETE FROM posts where id=:id";
$query=$pdo->prepare($sql);
$query->bindValue(':id',$_POST['id'],PDO::PARAM_INT);
$des=$query->execute();
if(!des){
	print_r($query->errorInfo());
}else{
	redirect_to("index.php");
}
