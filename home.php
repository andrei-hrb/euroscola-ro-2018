<?php $lang = $_GET["lang"]; include ("$lang/$lang.php");
$srHome = "active";
$srCantemir = "";
$srTeam = "";
?>
<html>
<head>
	<?php include ("assets/misc/html/head.php"); ?>
	<title> <?= $home . ' ' . $title ?></title>
</head>
<body>
	<?php include ("assets/misc/navbar/navbar.php"); ?>

	<?php include ("posts/carousel.php"); ?>

	<?php include ("assets/misc/footer/footer.php"); ?>
	<?php include ("assets/misc/html/scripts.php"); ?>
</body>
</html>
