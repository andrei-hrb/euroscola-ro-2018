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
<hr class="featurette-divider">

<div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading"><?= $cndc ?></h2>
        <p class="lead"><?= $cndctext ?></p>
    </div>
    <div class="col-md-5">
        <?php include("assets/misc/footer/map.php"); ?>
    </div>
</div>

<hr class="featurette-divider">

<?php include("assets/misc/footer/footer.php"); ?>
<?php include("assets/misc/html/scripts.php"); ?>
</body>
</html>