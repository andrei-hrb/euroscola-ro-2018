<?php $lang = $_GET["lang"]; include ("$lang/$lang.php"); ?>
<html>
<head>
	<?php include ("assets/misc/html/head.php"); ?>
	<title> <?= $title ?></title>
</head>
<body>
	<?php include ("assets/misc/nav-footer/navbar.php"); ?>

	<?php include ("assets/misc/posts/carousel.php"); ?>

	<?php include ("assets/misc/nav-footer/footer.php"); ?>
	<?php include ("assets/misc/html/scripts.php"); ?>
</body>
</html>