<?php
$lang = $_GET["lang"];

if( $lang == "" ) header('Location: /?lang=en', true, 301);

include("$lang/$lang.php");

$srHome = "";
$srCantemir = "";
$srTeam = "";
$srGallery = "active"
?>
<html>
<head>
    <?php include("assets/misc/html/head.php"); ?>
    <title> <?= $home . ' ' . $title ?> </title>
</head>

<body>

<?php include("assets/misc/navbar/navbar.php"); ?>

<?php
function newPhoto6($img)
{
    echo '
        <div class="col-6">
            <img  class="rounded img-fluid my-1 img-thumbnail mx-auto d-block" style="max-height: 30rem" src="../assets/img/gallery/' . $img . '.jpg">
        </div>
    ';
}

function newPhoto4($img)
{
    echo '
        <div class="col-4">
                <img class="rounded img-fluid my-1 img-thumbnail mx-auto d-block" style="max-height: 20rem" src="../assets/img/gallery/' . $img . '.jpg"> 
        </div>
    ';
}
?>

<!-- Posters -->

<div id="posters" class="mx-4">
    <h1 class="featurette-heading text-center text-info"><?= $posters ?></h1>

    <div class="row">
        <?php newPhoto6('poster') ?>
        <?php newPhoto6('announcement') ?>
    </div>
</div>

<hr class="featurette-divider">


<!-- Flayers -->

<div id="flayers" class="mx-5">
    <h1 class="featurette-heading text-center text-info"><?= $flayers ?></h1>

    <div class="row">
        <?php newPhoto6('flayer1') ?>
        <?php newPhoto6('flayer2') ?>
    </div>
</div>

<hr class="featurette-divider">


<!-- Teamwork -->

<div id="teamwork" class="mx-4">
    <h1 class="featurette-heading text-center text-info"><?= $sessions ?></h1>

    <div class="row">
        <?php newPhoto4('sample') ?>
        <?php newPhoto4('sample') ?>
        <?php newPhoto4('sample') ?>
    </div>

    <div class="row">
        <?php newPhoto4('sample') ?>
        <?php newPhoto4('sample') ?>
        <?php newPhoto4('sample') ?>
    </div>
</div>

<hr class="featurette-divider">


<!-- Workshop #1 -->

<div id="workshop1" class="mx-4">
    <h1 class="featurette-heading text-center text-info"><?= $workshop1 ?></h1>

    <div class="row">
        <?php newPhoto4('sample') ?>
        <?php newPhoto4('sample') ?>
        <?php newPhoto4('sample') ?>
    </div>

    <div class="row">
        <?php newPhoto4('sample') ?>
        <?php newPhoto4('sample') ?>
        <?php newPhoto4('sample') ?>
    </div>
</div>

<hr class="featurette-divider">


<!-- Workshop #2 -->

<div id="workshop2" class="mx-4">
    <h1 class="featurette-heading text-center text-info"><?= $workshop2 ?></h1>

    <div class="row">
        <?php newPhoto4('sample') ?>
        <?php newPhoto4('sample') ?>
        <?php newPhoto4('sample') ?>
    </div>

    <div class="row">
        <?php newPhoto4('sample') ?>
        <?php newPhoto4('sample') ?>
        <?php newPhoto4('sample') ?>
    </div>
</div>


<!-- Popularisation -->

<div id="workshop2" class="mx-4">
    <h1 class="featurette-heading text-center text-info"><?= $popularisation ?></h1>

    <div class="row">
        <?php newPhoto4('sample') ?>
        <?php newPhoto4('sample') ?>
        <?php newPhoto4('sample') ?>
    </div>

    <div class="row">
        <?php newPhoto4('sample') ?>
        <?php newPhoto4('sample') ?>
        <?php newPhoto4('sample') ?>
    </div>
</div>


<?php include("assets/misc/footer/footer.php"); ?>
<?php include("assets/misc/html/scripts.php"); ?>
</body>
</html>
