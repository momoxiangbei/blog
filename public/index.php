<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>blog</title>
    <link href="css/main.css" rel="stylesheet">
  </head>

  <body>
    <header>
      <div id="logo">
        <a href="index.php">墨墨向北</a>
      </div>
      <nav class="topnav">
        <a id="navcolor" href="">首页</a>
        <a href="">关于我</a>
        <a href="">慢生活</a>
        <a href="">碎言碎语</a>
        <a href="">作品分享</a>
        <a href="">学无止境</a>
        <a href="">留言板</a>
      </nav>
    </header>
    <div class="banner">
      <section id="box">
        <div class="text">
          <p>愿你与这世界温暖相拥</p>
          <p>愿你被这世界温柔相待</p>
          <p>陌上花开 一路向北</p>
        </div>
        <div class="author">
          <a href=""><span></span></a>
        </div>
     </section>
    </div>
    <article>
      <?php
          require_once 'inc/connect.php';
          $stmt=$pdo->prepare('select * from posts');
          $stmt->execute();
          while ($post=$stmt->fetchObject()) {
      ?>
      <div class="left"> 
        <a class="img" href=""></a>
        <a href="show/showblog.php?id=<?php echo $post->id;?>"><?php echo $post->title;?></a>
        <div>
           <?php echo $post->text;?>
        </div>              
        <p class="information"><span><?php echo $post->author;?></span><span><?php echo $post->create_date;?></span></p>    

      </div>
      <?php
          }
      ?>

      <aside class="right">
        <div class="new"> 
        <h3>最新博文</h3>
        <ul>  
        <?php
            require_once 'inc/connect.php';
            $stmt=$pdo->prepare('select * from posts');
            $stmt->execute();
            while ($post=$stmt->fetchObject()) {
        ?>           
            <li><a href="show/showblog.php?id=<?php echo $post->id;?>"><?php echo $post->title;?></a></li>
        <?php
            }
        ?>
        </ul>
        </div>

          
      </aside>

    </article>
  </body>
</html>
