<?php $lang = $_GET["lang"]; include ("$lang/$lang.php");
$srHome = "active";
$srCantemir = "";
$srTeam = "";
?>
<html>

<head>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
 crossorigin="" />
	<?php include ("assets/misc/html/head.php"); ?>
	<title> <?= $home . ' ' . $title ?></title>
</head>

<body background=#1F363D>
	<?php include ("assets/misc/navbar/navbar.php"); ?>
	

	<?php include ("posts/carousel.php"); ?>
	
<!--Introduction-->
<hr class="featurette-divider">
<div  class="row featurette ">
          <div class="col-md-7">
            <h2 class="featurette-heading"><?=$introduction?> </h2>
            <p class="lead"><?=$introductiontext?></p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="../assets/img/team.png">
          </div>
        </div>

        <hr class="featurette-divider">
<!--Erasmus-->
<div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading"><?=$erasmus?>
            <p class="lead"><?=$erasmustext?></p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="../assets/img/team.png">
          </div>
        </div>

        <hr class="featurette-divider">
<!--Euroscola-->
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading"><?=$euroscola?></h2>
            <p class="lead"><?=$euroscolatext?></p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="../assets/img/team.png" >
          </div>
        </div>

        <hr class="featurette-divider">

	<?php include ("assets/misc/footer/footer.php"); ?>
    <?php include ("assets/misc/html/scripts.php"); ?>
</body>
</html>
