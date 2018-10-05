<?php $lang = $_GET["lang"];
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
<?php include("assets/misc/utils/mobile.php"); ?>
<?php include("assets/misc/navbar/navbar.php"); ?>


<div class="row featurette">
    <div class="col-md-7">
        <h1 class="featurette-heading text-center"><?= $cndc ?></h1>
        <h2 id="titlu"><?= $cndctext ?></h2>
        <p class="lead"><?=$cndctext1?></p>
        <h2 id="titlu"><?= $cndctext2 ?></h2>
        <p class="lead"><?=$cndctext3?></p>
    </div>
    <div class="col-md-5">
        <?php include("assets/misc/footer/map.php"); ?>
    </div>
</div>


<?php include("assets/misc/footer/footer.php"); ?>
<?php include("assets/misc/html/scripts.php"); ?>
</body>
</html>