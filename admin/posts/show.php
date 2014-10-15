<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>show | 博客</title>
</head>
<body>
  <?php        
    require_once '../inc/connect.php';    
    
    $query = $pdo->prepare('select * from posts where id = :id');
    $query->bindValue(':id',$_GET['id'],PDO::PARAM_INT);
    $query->execute();
    $post = $query->fetchObject();    
  ?>

  <h1>标题： <?php echo $post->title; ?>  </h1>
  <h6>日期： <?php echo $post->create_date; ?>  </h6>
  <p>作者：  <?php echo $post->author;?>
  <p>内容：</p>
  <p><?php echo $post->text; ?></p>

</body>
</html>