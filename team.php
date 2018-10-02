<?php $lang = $_GET["lang"]; include ("$lang/$lang.php"); ?>
<html>
<head>
	<?php include ("assets/misc/html/head.php"); ?>
	<title> <?= $team . ' ' .$title ?></title>
</head>
<body>
	<?php include ("assets/misc/navbar/navbar.php"); ?>

	<div class="container my-5">
		<div class="row">
			<div class="col-8">
				<h2><?$title?></h2>
				<hr>

			</div>
			<div class="col-4">
				maamaaa
			</div>
		</div>
	</div>

	<?php include ("assets/misc/footer/footer.php"); ?>
	<?php include ("assets/misc/html/scripts.php"); ?>
</body>
</html>