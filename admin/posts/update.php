<?php 
require_once '../inc/connect.php';
require_once '../inc/redirect.php';
$id = $_POST['id'];
$sql = "update posts set title = :title, text = :text,author=:author where id = :id;" ;	
$query = $pdo->prepare($sql);
$query->bindValue(':title',$_POST['title'],PDO::PARAM_STR);
$query->bindValue(':text',$_POST['text'],PDO::PARAM_STR);
$query->bindValue(':author',$_POST['author'],PDO::PARAM_STR);
echo $query->bindValue(':id',$id,PDO::PARAM_INT);
if (!$query->execute()) {	
	print_r($query->errorInfo());
}else{
	redirect_to('index.php');
};
?>