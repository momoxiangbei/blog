<?php 

require_once '../inc/connect.php';
require_once '../inc/redirect.php';

$sql = "insert into posts(title,text,author) values(:title, :text,:author);" ;	
$query = $pdo->prepare($sql);
$query->bindParam(':title',$_POST['title'],PDO::PARAM_STR);
$query->bindParam(':text',$_POST['text'],PDO::PARAM_STR);
$query->bindParam(':author',$_POST['author'],PDO::PARAM_STR);

if (!$query->execute()) {	
	print_r($query->errorInfo());
}else{
	redirect_to("index.php");
};

?>