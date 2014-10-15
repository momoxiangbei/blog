<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
	<title>TWE - blog</title>
</head>
<body>
	<p class="header"><a href="">TWE - blog 后台管理系统</a></p>
	<ul>
		<li>id</li>
		<li>标题</li>
		<li>日期</li>
		<li>操作</li>
	</ul>
	<?php
		require_once("../inc/connect.php");
		$query=$pdo->query('select * from posts');
		while ($post= $query->fetchObject() ){
	?>
		<ul>
			<li><?php echo $post->id; ?></li>
			<li><a href=""> <?php echo $post->title; ?></a></li>
			<li><?php echo date('Y-m-d',strtotime($post->create_date)); ?></li>
			<li>
				<a href="show.php?id=<?php echo $post->id; ?>">展示</a>
				<a href="edit.php?id=<?php echo $post->id; ?>">修改</a> 
				<a href="delete.php?id=<?php echo $post->id; ?>">删除</a> 
			</li>
		</ul>
	<?php
		}
	?>
	<p><a class="add" href="new.php">再写一篇 (☆＿☆) </a></p>
</body>
</html>