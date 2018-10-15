<?php
$lang = $_GET["lang"];
include("$lang/$lang.php");

$srHome = "";
$srCantemir = "active";
$srTeam = "";
$srGallery = "";
?>

<html>
<head>
    <?php include("assets/misc/html/head.php"); ?>
    <title> <?= $cantemir . ' ' . $title ?></title>
</head>

<body>
<?php include("assets/misc/utils/mobile.php"); ?>
<?php include("assets/misc/navbar/navbar.php"); ?>


<div class="row featurette" id="spacingtop">
    <div class="col-md-6 order-0">
        <h1 class="featurette-heading text-center mb-3 ml-3"><?= $cndc ?></h1>
        <h2 class="mx-4 mb-1"><?= $cndctext ?></h2>
        <p class="lead mx-4 mb-2"><?= $cndctext1 ?></p>
        <h2 class="mx-4 mb-1"><?= $cndctext2 ?></h2>
        <p class="lead mx-4"><?= $cndctext3 ?></p>
    </div>
    <div class="col-md-5 order-1 my-auto">
        <?php include("assets/misc/footer/map.php"); ?>
    </div>
</div>


<?php include("assets/misc/footer/footer.php"); ?>
<?php include("assets/misc/html/scripts.php"); ?>
</body>
</html>