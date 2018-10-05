<?php $lang = $_GET["lang"]; include("$lang/$lang.php");
$srHome = "active";
$srCantemir = "";
$srTeam = "";
?>
<html>
<head>
    <?php include("assets/misc/html/head.php"); ?>
    <title> <?= $home . ' ' . $title ?> </title>
</head>
<body>
<?php include("assets/misc/navbar/navbar.php"); ?>

<?php include("assets/misc/posts/carousel.php"); ?>
<!--Introduction-->
<hr class="featurette-divider">
<div  class="row featurette ">
          <div class="col-md-7">
            <h2 class="featurette-heading"><?=$introduction?> </h2>
            <p class="lead"><?=$introductiontext?></p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="../assets/img/team/team.png">
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
            <img class="featurette-image img-fluid mx-auto" src="../assets/img/team/team.png">
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
            <img class="featurette-image img-fluid mx-auto" src="../assets/img/team/team.png" >
          </div>
        </div>

        <hr class="featurette-divider">

<?php include("assets/misc/footer/footer.php"); ?>
<?php include("assets/misc/html/scripts.php"); ?>
</body>
</html>
