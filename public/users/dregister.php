<?php
  require_once '../inc/connect.php';
  require_once '../inc/redirect.php';
  $users=$pdo->prepare('insert into users(name,pwd,email) values(:name,:pwd,:email)'); 
  $users->bindvalue(':name',$_POST['name'],PDO::PARAM_STR);
  $users->bindvalue(':pwd',$_POST['pwd'],PDO::PARAM_STR);
  $users->bindvalue(':email',$_POST['email'],PDO::PARAM_STR);
  if($users->execute()){
      echo "注册成功";
    }
?>