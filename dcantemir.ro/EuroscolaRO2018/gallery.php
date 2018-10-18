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
    <link rel="stylesheet" href="../assets/css/lightbox.min.css">
    <title> <?= $home . ' ' . $title ?> </title>
</head>


<body>

<?php include("assets/misc/navbar/navbar.php"); ?>

<?php
function newPhoto6($img, $id)
{
    echo '
        <div class="col-6">
            <a href="../assets/img/gallery/' . $img . '.jpg" data-lightbox="' . $id . '" data-title="' . $id . '">
                <img class="rounded img-fluid my-1 img-thumbnail mx-auto d-block" style="max-height: 30rem" src="../assets/img/gallery/' . $img . '.jpg">
            </a>
        </div>
    ';
}

function newPhoto4($img, $id)
{
    echo '
        <div class="col-4">
            
            <a href="../assets/img/gallery/' . $img . '.jpg" data-lightbox="' . $id . '" data-title="' . $id . '">
                <img class="shadow rounded my-3 mx-auto d-block gallery" src="../assets/img/gallery/' . $img . '.jpg"> 
            </a>
        </div>
    ';
}

?>



<div id="spacingtop">
    <div class="container featurette" id="cuprins">
    <h1 class="featurette-heading text-center"><?= $contents ?></h1>

          <div class="btn-group">
            <a class="btn btn-secondary btn-lg " href="#posters"><?=$posters  ?></a>
            <a class="btn btn-secondary btn-lg" href="#flayers"><?=$flayers  ?></a>
            <a class="btn btn-secondary btn-lg" href="#teamwork"><?=$sessions  ?></a>
            <a class="btn btn-secondary btn-lg" href="#workshop1"><?=$workshop1  ?></a>
            <a class="btn btn-secondary btn-lg" href="#workshop2"><?=$workshop2  ?></a>
            <a class="btn btn-secondary btn-lg" href="#popularisation"><?=$popularisation  ?></a>
        </div>
    </div>
</div>

<hr class="featurette-divider">

<!-- Posters -->
<div class="featurette">
    <div id="posters" class="mx-4">
        <h1 class="featurette-heading text-center"><?= $posters ?></h1>

        <div class="row">
            <?php newPhoto6('poster', $posters) ?>
            <?php newPhoto6('announcement', $posters) ?>
        </div>
    </div>

    <hr class="featurette-divider">


    <!-- Flayers -->

    <div id="flayers" class="mx-5">
        <h1 class="featurette-heading text-center"><?= $flayers ?></h1>

        <div class="row">
            <?php newPhoto6('flayer1', $flayers) ?>
            <?php newPhoto6('flayer2', $flayers) ?>
        </div>
    </div>

    <hr class="featurette-divider">


    <!-- Teamwork -->

    <div id="teamwork" class="mx-4">
        <h1 class="featurette-heading text-center"><?= $sessions ?></h1>

        <div class="row">
            <?php newPhoto4('team1', $sessions) ?>
            <?php newPhoto4('team5', $sessions) ?>
            <?php newPhoto4('team11', $sessions) ?>
        </div>

        <div class="row">
            <?php newPhoto4('team4', $sessions) ?>
            <?php newPhoto4('team3', $sessions) ?>
            <?php newPhoto4('team7', $sessions) ?>
        </div>

        <div class="row">
            <?php newPhoto4('team8', $sessions) ?>
        </div>
    </div>

    <hr class="featurette-divider">


    <!-- Workshop #1 -->

    <div id="workshop1" class="mx-4">
        <h1 class="featurette-heading text-center"><?= $workshop1 ?></h1>

        <div class="row">
            <?php newPhoto4('workshop1.12', $workshop1) ?>
            <?php newPhoto4('workshop1.2', $workshop1) ?>
            <?php newPhoto4('workshop1.11', $workshop1) ?>
        </div>

        <div class="row">
            <?php newPhoto4('workshop1.3', $workshop1) ?>
            <?php newPhoto4('workshop1.5', $workshop1) ?>
            <?php newPhoto4('workshop1.6', $workshop1) ?>
        </div>
        <div class="row">
            <?php newPhoto4('workshop1.4', $workshop1) ?>
            <?php newPhoto4('workshop1.7', $workshop1) ?>
            <?php newPhoto4('workshop1.8', $workshop1) ?>
        </div>
        <div class="row">
            <?php newPhoto4('workshop1.9', $workshop1) ?>
            <?php newPhoto4('workshop1.10', $workshop1) ?>
            <?php newPhoto4('workshop1', $workshop1) ?>
        </div>
    </div>

    <hr class="featurette-divider">


    <!-- Workshop #2 -->

    <div id="workshop2" class="mx-4">
        <h1 class="featurette-heading text-center"><?= $workshop2 ?></h1>

        <div class="row">
            <?php newPhoto4('workshop2.1', $workshop2) ?>
            <?php newPhoto4('workshop2.9', $workshop2) ?>
            <?php newPhoto4('workshop2.3', $workshop2) ?>
        </div>

        <div class="row">
            <?php newPhoto4('workshop2.4', $workshop2) ?>
            <?php newPhoto4('workshop2.5', $workshop2) ?>
            <?php newPhoto4('workshop2.6', $workshop2) ?>
        </div>
        <div class="row">
            <?php newPhoto4('workshop2.8', $workshop2) ?>
            <?php newPhoto4('workshop2.2', $workshop2) ?>
            <?php newPhoto4('workshop2.13', $workshop2) ?>
        </div>
    </div>

    <hr class="featurette-divider">


    <!-- Popularisation -->

    <div id="popularisation" class="mx-4">
        <h1 class="featurette-heading text-center"><?= $popularisation ?></h1>

        <div class="row">
            <?php newPhoto4('popularisation21', $popularisation) ?>
            <?php newPhoto4('popularisation2', $popularisation) ?>
            <?php newPhoto4('popularisation3', $popularisation) ?>
        </div>

        <div class="row">
            <?php newPhoto4('popularisation4', $popularisation) ?>
            <?php newPhoto4('popularisation5', $popularisation) ?>
            <?php newPhoto4('popularisation22', $popularisation) ?>
        </div>

        <div class="row">
            <?php newPhoto4('popularisation7', $popularisation) ?>
            <?php newPhoto4('popularisation8', $popularisation) ?>
            <?php newPhoto4('popularisation9', $popularisation) ?>
        </div>

        <div class="row">
            <?php newPhoto4('popularisation10', $popularisation) ?>
            <?php newPhoto4('popularisation11', $popularisation) ?>
            <?php newPhoto4('popularisation12', $popularisation) ?>
        </div>

        <div class="row">
            <?php newPhoto4('popularisation13', $popularisation) ?>
            <?php newPhoto4('popularisation14', $popularisation) ?>
            <?php newPhoto4('popularisation15', $popularisation) ?>
        </div>

        <div class="row">
            <?php newPhoto4('popularisation16', $popularisation) ?>
            <?php newPhoto4('popularisation17', $popularisation) ?>
            <?php newPhoto4('popularisation18', $popularisation) ?>
        </div>
        <div class="row">
            <?php newPhoto4('popularisation19', $popularisation) ?>
            <?php newPhoto4('popularisation20', $popularisation) ?>
            <?php newPhoto4('popularisation1', $popularisation) ?>
        </div>

    </div>
</div>
<?php include("assets/misc/footer/footer.php"); ?>
<?php include("assets/misc/html/scripts.php"); ?>
<script src="../assets/js/lightbox.min.js"></script>
<script>
    lightbox.option({
        'maxWidth': 1000,
        'maxHeight': 750
    });
</script>
</body>
</html>
