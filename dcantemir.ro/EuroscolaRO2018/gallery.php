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
                <img class="rounded img-fluid my-1 img-thumbnail mx-auto d-block" style="max-height: 20rem" src="../assets/img/gallery/' . $img . '.jpg"> 
            </a>
        </div>
    ';
}

?>

<!-- Posters -->

<div id="spacingtop">
    <div class="container featurette">
        <div class="row">
            <div class="col-2 ml-md-5">
                <p class="featurette-heading"><?= $contents ?>:</p>
            </div>
            <div class="col-9 mt-xs-2 mt-md-3">
                <ol class="ml-5">
                    <li class="my-1"><a href="#posters" class="contents"> <?= $posters ?></a></li>
                    <li class="my-1"><a href="#flayers" class="contents"> <?= $flayers ?></a></li>
                    <li class="my-1"><a href="#teamwork" class="contents"> <?= $sessions ?></a></li>
                    <li class="my-1"><a href="#workshop1" class="contents"> <?= $workshop1 ?></a></li>
                    <li class="my-1"><a href="#workshop2" class="contents"> <?= $workshop2 ?></a></li>
                    <li class="my-1"><a href="#popularisation"> <?= $popularisation ?></a></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<hr class="featurette-divider">


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
            <?php newPhoto4('sample', $sessions) ?>
            <?php newPhoto4('sample', $sessions) ?>
            <?php newPhoto4('sample', $sessions) ?>
        </div>

        <div class="row">
            <?php newPhoto4('sample', $sessions) ?>
            <?php newPhoto4('sample', $sessions) ?>
            <?php newPhoto4('sample', $sessions) ?>
        </div>
    </div>

    <hr class="featurette-divider">


    <!-- Workshop #1 -->

    <div id="workshop1" class="mx-4">
        <h1 class="featurette-heading text-center"><?= $workshop1 ?></h1>

        <div class="row">
            <?php newPhoto4('sample', $workshop1) ?>
            <?php newPhoto4('sample', $workshop1) ?>
            <?php newPhoto4('sample', $workshop1) ?>
        </div>

        <div class="row">
            <?php newPhoto4('sample', $workshop1) ?>
            <?php newPhoto4('sample', $workshop1) ?>
            <?php newPhoto4('sample', $workshop1) ?>
        </div>
    </div>

    <hr class="featurette-divider">


    <!-- Workshop #2 -->

    <div id="workshop2" class="mx-4">
        <h1 class="featurette-heading text-center"><?= $workshop2 ?></h1>

        <div class="row">
            <?php newPhoto4('sample', $workshop2) ?>
            <?php newPhoto4('sample', $workshop2) ?>
            <?php newPhoto4('sample', $workshop2) ?>
        </div>

        <div class="row">
            <?php newPhoto4('sample', $workshop2) ?>
            <?php newPhoto4('sample', $workshop2) ?>
            <?php newPhoto4('sample', $workshop2) ?>
        </div>
    </div>

    <hr class="featurette-divider">


    <!-- Popularisation -->

    <div id="popularisation" class="mx-4">
        <h1 class="featurette-heading text-center"><?= $popularisation ?></h1>

        <div class="row">
            <?php newPhoto4('sample', $popularisation) ?>
            <?php newPhoto4('sample', $popularisation) ?>
            <?php newPhoto4('sample', $popularisation) ?>
        </div>

        <div class="row">
            <?php newPhoto4('sample', $popularisation) ?>
            <?php newPhoto4('sample', $popularisation) ?>
            <?php newPhoto4('sample', $popularisation) ?>
        </div>
    </div>
</div>


<?php include("assets/misc/footer/footer.php"); ?>
<?php include("assets/misc/html/scripts.php"); ?>
<script src="../assets/js/lightbox.min.js"></script>
<script>
    lightbox.option({
        'maxWidth': 1000
    });
</script>
</body>
</html>
