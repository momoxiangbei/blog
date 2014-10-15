<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>blog</title>
    <link href="../css/box.css" rel="stylesheet">
    <link href="../css/showblog.css" rel="stylesheet">
  </head>

  <body>
    <div class="header">
      <div id="logo">
        <a href="">墨墨向北</a>
      </div>
      <div class="topnav">
        <a id="navcolor" href="">首页</a>
        <a href="">关于我</a>
        <a href="">慢生活</a>
        <a href="">碎言碎语</a>
        <a href="">作品分享</a>
        <a href="">学无止境</a>
        <a href="">留言板</a>
      </div>
    </div>

       
    <div class="box">
      <div class="left">
        <ul class="article">
           <?php
            require_once '../inc/connect.php';
            $stmt=$pdo->prepare("select * from posts where id=:id");
            $stmt->bindvalue(":id",$_GET['id'],PDO::PARAM_INT);
            $stmt->execute();
            $post=$stmt->fetchObject();
            ?>
          <li class="title"><?php echo $post->title; ?></li>
          <li class="data">日期：<?php echo $post->create_date; ?></li>
          <li class="author">作者：<?php echo $post->author;?></li>
          <li class="text"><textarea><?php echo $post->text; ?></textarea></li>
        </ul>
        <ul class="docomment">
          <li class="namecom">评论</li>
          <li>
            <form action="../comments/save.php" method="post">
              <textarea name="comment"></textarea>
              <input type="hidden" value="<?php echo $post->id?>" name="id"/> 
              <input type="submit" class="submit" value="提交" /> 
            </form>
          </li>
        </ul>
        <ul class="comment">
              <?php
              require_once '../inc/connect.php';
              $stmt=$pdo->prepare('select * from comments where pid=:id');
              $stmt->bindvalue(":id",$_GET['id'],PDO::PARAM_INT);
              $stmt->execute();
              while ($comment=$stmt->fetchObject()) {
              ?> 
              <li class="comm"><?php echo $comment->comment;?></li>
              <li class="date"><?php echo $comment->create_data;?></li>
              <?php
                 }
              ?>
        </ul>
      </div>

    <div class="aside">
      <div class="new"> 
        <h4>最新博文</h4>
        <ul>  
        <?php
            require_once '../inc/connect.php';
            $stmt=$pdo->prepare('select * from posts');
            $stmt->execute();
            while ($post=$stmt->fetchObject()) {
        ?> 
          
            <li><a href="showblog.php?id=<?php echo $post->id;?>"><?php echo $post->title;?></a></li>

        <?php
            }
        ?>
      </div>
    </div>

   </div>

  </body>
</html>
