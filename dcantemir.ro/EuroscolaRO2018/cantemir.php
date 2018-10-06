<?php
$lang = $_GET["lang"];
include("$lang/$lang.php");

$srHome = "";
$srCantemir = "active";
$srTeam = "";
?>

<html>
<head>
    <?php include("assets/misc/html/head.php"); ?>
    <title> <?= $cantemir . ' ' . $title ?></title>
</head>

<body>
<?php include("assets/misc/utils/mobile.php");?>
<?php include("assets/misc/navbar/navbar.php"); ?>


<div class="row featurette">
    <div class="col-md-7 order-0">
        <h1 class="featurette-heading text-center"id="spacingtop"><?= $cndc ?></h1>
        <h2 class="mx-4"><?= $cndctext ?></h2>
        <p class="lead mx-3"><?=$cndctext1?></p>
        <h2 class="mx-4"><?= $cndctext2 ?></h2>
        <p class="lead mx-3"><?=$cndctext3?></p>
    </div>
    <div class="col-md-5 order-1">
        <?php include("assets/misc/footer/map.php"); ?>
    </div>
</div>


<?php include("assets/misc/footer/footer.php"); ?>
<?php include("assets/misc/html/scripts.php"); ?>
</body>
</html>