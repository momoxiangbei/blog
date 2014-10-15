<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>blog</title>
    <link href="css/box.css" rel="stylesheet">
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
        <div>左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦左边的内容哦</div>
      </div>

      <div class="aside">
        <div class="new"> 
          <h4>最新博文</h4>
          <ul>  
          <?php
            require_once 'inc/connect.php';
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
