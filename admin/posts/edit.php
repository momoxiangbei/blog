<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>修改博客 </title>
</head>
<body>
	<?php 
		require_once '../inc/connect.php';
		$id = $_GET['id'];
	    $query = $pdo->prepare('select * from posts where id = :id');
	    $query->bindValue(':id',$id,PDO::PARAM_INT);
	    $query->execute();
	    $post = $query->fetchObject();    		
	?>
	<h1>edit post:</h1>

	<form action="update.php" method="post">
		<input type="hidden" name="id" value = "<?php echo $id; ?>"/>
		<label for="title">title</label>
		<input type="text" name="title" value="<?php echo $post->title ?>" />
		<br/>
		<label for="author">author</label>
		<input type="text" name="author" value="<?php echo $post->author ?>" />
		<br/>
		<label for="text">body</label>
		<textarea name="text" value="<?php echo $post->text; ?>"> </textarea>
		<br/>
		<input type="submit" value="提交" />
	</form>
</body>
</html>