<?php $lang = $_GET["lang"]; include ("$lang/$lang.php"); ?>
<html>
<head>
	<?php include ("assets/misc/html/head.php"); ?>
	<title> <?= $cantemir . ' ' . $title ?></title>
</head>
<body>
	<?php include ("assets/misc/navbar/navbar.php"); ?>
	<?php include ("liceu.php/?lang=$lang");?>
	<?php include ("assets/misc/footer/map.php");?>
	<?php include ("assets/misc/footer/footer.php");?>
	<?php include ("assets/misc/html/scripts.php");?>
</body>
</html>