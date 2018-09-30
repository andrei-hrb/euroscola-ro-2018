<?php $lang = $_GET["lang"]; include ("$lang/$lang.php"); ?>
<html>
<head>
	<?php include ("assets/misc/html/head.php"); ?>
	<title> <?= $title ?></title>
</head>
<body>
	<?php include ("assets/misc/navbar/navbar.php"); ?>
	<?php include("ro/Liceu-RO.php/?lang=...............?????????");?>
	<?php include("en/Liceu-EN.php/?lang=...............?????????");?>
	<?php include("fr/Liceu-FR.php/?lang=...............?????????");?>
	<?php include ("assets/misc/footer/map.php");?>
	<?php include ("assets/misc/footer/footer.php"); ?>
	<?php include ("assets/misc/html/scripts.php"); ?>
</body>
</html>