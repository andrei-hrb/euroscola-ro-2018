<!-- code might look strange because of the usage of php; check the github project -->
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
    <title> <?= $gallery . ' ' . $title ?> </title>
    <link rel="stylesheet" href="../assets/css/lightbox.min.css">
    <link href="https://getbootstrap.com/docs/4.1/assets/css/docs.min.css" rel="stylesheet">
</head>
<body>

<?php include("assets/misc/navbar/navbar.php"); ?>

<?php
function newPhoto6($img, $id)
{
    echo '
        <div class="col-6">
            <a href="../assets/img/gallery/' . $img . '.jpg" data-lightbox="' . $id . '" data-title="' . $id . '">
                <img class="rounded shadow img-fluid my-1 mx-auto d-block" style="max-height: 30rem" src="../assets/img/gallery/' . $img . '.jpg">
            </a>
        </div>
    ';
}

function newPhoto4($img, $id)
{
    echo '
        <div class="col-4">
            <a href="../assets/img/gallery/' . $img . '.jpg" data-lightbox="' . $id . '" data-title="' . $id . '">
                <img class="rounded shadow my-3 mx-auto d-block gallery" src="../assets/img/gallery/' . $img . '.jpg"> 
            </a>
        </div>
    ';
}

?>

<div class="row flex-xl-nowrap" id="spacingtop">
    <div class="col-12 col-md-3 bd-sidebar">
        <ul class="section-nav">
            <li class="toc-entry toc-h1 lead">
                <a href="#posters"><?= $posters ?></a>
                <hr>
            </li>
            <li class="toc-entry toc-h1 lead">
                <a href="#flayers"><?= $flayers ?></a>
                <hr>
            </li>
            <li class="toc-entry toc-h1 lead">
                <a href="#videos"><?= $videos ?></a>
                <hr>
            </li>
            <li class="toc-entry toc-h1 lead">
                <a href="#audio">Audio</a>
                <hr>
            </li>
            <li class="toc-entry toc-h1 lead">
                <a href="#teamwork"><?= $sessions ?></a>
                <hr>
            </li>
            <li class="toc-entry toc-h1 lead">
                <a href="#workshop1"><?= $workshop1 ?></a>
                <hr>
            </li>
            <li class="toc-entry toc-h1 lead">
                <a href="#workshop2"><?= $workshop2 ?></a>
                <hr>
            </li>
            <li class="toc-entry toc-h1 lead">
                <a href="#popularization"><?= $popularization ?></a>
            </li>
        </ul>
    </div>

    <main class="col-12 col-md-9 bd-content" role="main">
        <div class="featurette">
            <div id="posters" class="mx-4">
                <h1 class="featurette-heading text-center"><?= $posters ?></h1>
                <div class="row">
                    <?php newPhoto6('poster', $posters) ?>
                    <?php newPhoto6('announcement', $posters) ?>
                </div>
            </div>
            <hr class="featurette-divider">

            <div id="flayers" class="mx-5">
                <h1 class="featurette-heading text-center"><?= $flayers ?></h1>
                <div class="row">
                    <?php newPhoto6('flayer1', $flayers) ?>
                    <?php newPhoto6('flayer2', $flayers) ?>
                </div>
            </div>
            <hr class="featurette-divider">

            <div id="videos" class="mx-5">
                <h1 class="featurette-heading text-center"><?= $videos ?></h1>
                <div class="row">
                    <div class="col-md-4">
                        <div class="video shadow">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/ZLsD074vK4Y" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3 mt-md-1">
                        <div class="video shadow">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/gEpOoZSzh8k" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3 mt-md-1">
                        <div class="video shadow">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/iV5VKdcQOJE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="featurette-divider">

            <div id="audio" class="mx-5">
                <h1 class="featurette-heading text-center">Audio</h1>
                <div class="row">
                    <div class="col-12 shadow">
                        <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/517213752&color=%23dd0000&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
                    </div>
                </div>
            </div>
            <hr class="featurette-divider">

            <div id="teamwork" class="mx-4">
                <h1 class="featurette-heading text-center"><?= $sessions ?></h1>
                <div class="row">
                    <?php newPhoto4('team24', $sessions) ?>
                    <?php newPhoto4('team1', $sessions) ?>
                    <?php newPhoto4('team5', $sessions) ?>
                </div>
                <div class="row">
                    <?php newPhoto4('team4', $sessions) ?>
                    <?php newPhoto4('team3', $sessions) ?>
                    <?php newPhoto4('team7', $sessions) ?>
                </div>
                <div class="row">
                    <?php newPhoto4('team8', $sessions) ?>
                    <?php newPhoto4('team20', $sessions) ?>
                    <?php newPhoto4('team21', $sessions) ?>
                </div>
                <div class="row">
                    <?php newPhoto4('team23', $sessions) ?>
                    <?php newPhoto4('team11', $sessions) ?>
                </div>
            </div>
            <hr class="featurette-divider">

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

            <div id="popularization" class="mx-4">
                <h1 class="featurette-heading text-center"><?= $popularization ?></h1>
                <div class="row">
                    <?php newPhoto4('popularisation21', $popularization) ?>
                    <?php newPhoto4('popularisation2', $popularization) ?>
                    <?php newPhoto4('popularisation3', $popularization) ?>
                </div>
                <div class="row">
                    <?php newPhoto4('popularisation4', $popularization) ?>
                    <?php newPhoto4('popularisation5', $popularization) ?>
                    <?php newPhoto4('popularisation22', $popularization) ?>
                </div>
                <div class="row">
                    <?php newPhoto4('popularisation7', $popularization) ?>
                    <?php newPhoto4('popularisation8', $popularization) ?>
                    <?php newPhoto4('popularisation9', $popularization) ?>
                </div>
                <div class="row">
                    <?php newPhoto4('popularisation10', $popularization) ?>
                    <?php newPhoto4('popularisation11', $popularization) ?>
                    <?php newPhoto4('popularisation12', $popularization) ?>
                </div>
                <div class="row">
                    <?php newPhoto4('popularisation13', $popularization) ?>
                    <?php newPhoto4('popularisation14', $popularization) ?>
                    <?php newPhoto4('popularisation15', $popularization) ?>
                </div>
                <div class="row">
                    <?php newPhoto4('popularisation16', $popularization) ?>
                    <?php newPhoto4('popularisation17', $popularization) ?>
                    <?php newPhoto4('popularisation18', $popularization) ?>
                </div>
                <div class="row">
                    <?php newPhoto4('popularisation19', $popularization) ?>
                    <?php newPhoto4('popularisation20', $popularization) ?>
                    <?php newPhoto4('popularisation1', $popularization) ?>
                </div>
            </div>
        </div>
    </main>
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
