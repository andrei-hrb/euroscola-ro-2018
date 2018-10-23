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
    <title> <?= $gallery . ' ' . $baseTitle ?> </title>
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
            <a href="../assets/img/gallery/original/' . $img . '.jpg" data-lightbox="' . $id . '" data-title="' . $id . '">
                <img class="rounded shadow img-fluid my-1 mx-auto d-block" style="max-height: 30rem" src="../assets/img/gallery/original/' . $img . '.jpg">
            </a>
        </div>
    ';
}

function newPhoto4($img, $id)
{
    echo '
        <div class="col-4">
            <a href="../assets/img/gallery/original/' . $img . '.jpg" data-lightbox="' . $id . '" data-title="' . $id . '">
                <img class="rounded shadow my-3 mx-auto d-block gallery" src="../assets/img/gallery/thumbnail/' . $img . '.jpg"> 
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
            <div id="posters" class="mx-md-4">
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
                    <div class="col-md-4 mt-3 mt-md-1">
                        <div class="video shadow">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/0wj030QrMwU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3 mt-md-1">
                        <div class="video shadow">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/gEpOoZSzh8k" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="video shadow">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/ZLsD074vK4Y" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="video shadow">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/xDNbLWAAAu8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3 mt-md-1">
                        <div class="video shadow">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/4MgRlJNXOeQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3 mt-md-1">
                        <div class="video shadow">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/Iq9i9TM_rk4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="video shadow">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/9D8lR3XQ0L4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3 mt-md-1">
                        <div class="video shadow">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/-a7k62bQ_WY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3 mt-md-1">
                        <div class="video shadow">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/FIsQtFnaAjM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="video shadow">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/mu7gdDPHxl8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3 mt-md-1">
                        <div class="video shadow">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/1fGfkDQOGxA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3 mt-md-1">
                        <div class="video shadow">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/5KTqcDKPHHU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="video shadow">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/4JW8_7T2KIw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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

            <div id="teamwork" class="mx-md-4">
                <h1 class="featurette-heading text-center"><?= $sessions ?></h1>
                <div class="row">
                    <?php newPhoto4('team1', $sessions) ?>
                    <?php newPhoto4('team2', $sessions) ?>
                    <?php newPhoto4('team3', $sessions) ?>
                </div>
                <div class="row">
                    <?php newPhoto4('team4', $sessions) ?>
                    <?php newPhoto4('team5', $sessions) ?>
                    <?php newPhoto4('team6', $sessions) ?>
                </div>
                <div class="row">
                    <?php newPhoto4('team7', $sessions) ?>
                    <?php newPhoto4('team8', $sessions) ?>
                    <?php newPhoto4('team9', $sessions) ?>
                </div>
                <div class="row">
                    <?php newPhoto4('team10', $sessions) ?>
                    <?php newPhoto4('team11', $sessions) ?>
                    <?php newPhoto4('team12', $sessions) ?>
                </div>
            </div>
            <hr class="featurette-divider">

            <div id="workshop1" class="mx-md-4">
                <h1 class="featurette-heading text-center"><?= $workshop1 ?></h1>
                <div class="row">
                    <?php newPhoto4('wk1-1', $workshop1) ?>
                    <?php newPhoto4('wk1-2', $workshop1) ?>
                    <?php newPhoto4('wk1-3', $workshop1) ?>
                </div>
                <div class="row">
                    <?php newPhoto4('wk1-4', $workshop1) ?>
                    <?php newPhoto4('wk1-5', $workshop1) ?>
                    <?php newPhoto4('wk1-6', $workshop1) ?>
                </div>
                <div class="row">
                    <?php newPhoto4('wk1-7', $workshop1) ?>
                    <?php newPhoto4('wk1-8', $workshop1) ?>
                    <?php newPhoto4('wk1-9', $workshop1) ?>
                </div>
                <div class="row">
                    <?php newPhoto4('wk1-10', $workshop1) ?>
                    <?php newPhoto4('wk1-11', $workshop1) ?>
                    <?php newPhoto4('wk1-12', $workshop1) ?>
                </div>
            </div>
            <hr class="featurette-divider">

            <div id="workshop2" class="mx-md-4">
                <h1 class="featurette-heading text-center"><?= $workshop2 ?></h1>
                <div class="row">
                    <?php newPhoto4('wk2-1', $workshop2) ?>
                    <?php newPhoto4('wk2-2', $workshop2) ?>
                    <?php newPhoto4('wk2-3', $workshop2) ?>
                </div>
                <div class="row">
                    <?php newPhoto4('wk2-4', $workshop2) ?>
                    <?php newPhoto4('wk2-5', $workshop2) ?>
                    <?php newPhoto4('wk2-6', $workshop2) ?>
                </div>
                <div class="row">
                    <?php newPhoto4('wk2-7', $workshop2) ?>
                    <?php newPhoto4('wk2-8', $workshop2) ?>
                    <?php newPhoto4('wk2-9', $workshop2) ?>
                </div>
            </div>
            <hr class="featurette-divider">

            <div id="popularization" class="mx-md-4">
                <h1 class="featurette-heading text-center"><?= $popularization ?></h1>
                <div class="row">
                    <?php newPhoto4('pz1', $popularization) ?>
                    <?php newPhoto4('pz2', $popularization) ?>
                    <?php newPhoto4('pz3', $popularization) ?>
                </div>
                <div class="row">
                    <?php newPhoto4('pz4', $popularization) ?>
                    <?php newPhoto4('pz5', $popularization) ?>
                    <?php newPhoto4('pz6', $popularization) ?>
                </div>
                <div class="row">
                    <?php newPhoto4('pz7', $popularization) ?>
                    <?php newPhoto4('pz8', $popularization) ?>
                    <?php newPhoto4('pz9', $popularization) ?>
                </div>
                <div class="row">
                    <?php newPhoto4('pz10', $popularization) ?>
                    <?php newPhoto4('pz11', $popularization) ?>
                    <?php newPhoto4('pz12', $popularization) ?>
                </div>
                <div class="row">
                    <?php newPhoto4('pz13', $popularization) ?>
                    <?php newPhoto4('pz14', $popularization) ?>
                    <?php newPhoto4('pz15', $popularization) ?>
                </div>
                <div class="row">
                    <?php newPhoto4('pz16', $popularization) ?>
                    <?php newPhoto4('pz17', $popularization) ?>
                    <?php newPhoto4('pz18', $popularization) ?>
                </div>
                <div class="row">
                    <?php newPhoto4('pz19', $popularization) ?>
                    <?php newPhoto4('pz20', $popularization) ?>
                    <?php newPhoto4('pz21', $popularization) ?>
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
