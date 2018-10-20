<!-- code might look strange because of the usage of php; check the github project -->

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
    <meta name="og:title" content="<?= $gallery . ' ' . $title ?>">
    <meta property="og:image" content="../assets/img/ui stuff/cover.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="640">

    <?php include("assets/misc/html/head.php"); ?>
    <title> <?= $cantemir . ' ' . $title ?></title>
</head>

<body>
<?php include("assets/misc/navbar/navbar.php"); ?>

<div class="row featurette" id="spacingtop">
    <div class="col-md-6 order-0 mx-1 mx-md-5">
        <h1 class="featurette-heading text-center mb-4 ml-3"><?= $cndc ?></h1>
        <h2 class="featurette-heading2 mx-4 mb-1"><?= $cndctext ?></h2>
        <p class="lead mx-4 mb-2"  style="text-indent: 30px;"><?= $cndctext1 ?></p>
        <h2 class="featurette-heading2 mx-4 mb-1"><?= $cndctext2 ?></h2>
        <p class="lead mx-4"  style="text-indent: 30px;"><?= $cndctext3 ?></p>
    </div>
    <div class="col-md-5 order-1 my-auto">
        <?php include("assets/misc/footer/map.php"); ?>
    </div>
</div>

<?php include("assets/misc/footer/footer.php"); ?>
<?php include("assets/misc/html/scripts.php"); ?>
</body>
</html>