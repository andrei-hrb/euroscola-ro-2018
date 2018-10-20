<!-- code might look strange because of the usage of php; check the github project -->
<?php
$lang = $_GET["lang"];

if( $lang == "" ) header('Location: /?lang=en', true, 301);

include("$lang/$lang.php");

$srHome = "active";
$srCantemir = "";
$srTeam = "";
$srGallery = "";
?>
<html>
<head>
    <meta name="og:title" content="<?= $home . ' ' . $title ?>">
    <meta property="og:image" content="../assets/img/ui stuff/cover.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="640">

    <?php include("assets/misc/html/head.php"); ?>
    <title><?= $home . ' ' . $title ?></title>
    <link href="https://getbootstrap.com/docs/4.1/assets/css/docs.min.css" rel="stylesheet">
    <link href="../assets/css/lightbox.min.css" rel="stylesheet">
    <div id="fb-root"></div><script>(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src='https://connect.facebook.net/ro_RO/sdk.js#xfbml=1&version=v3.1';fjs.parentNode.insertBefore(js, fjs);}(document,'script','facebook-jssdk'));</script>
</head>

<body>
<?php include("assets/misc/navbar/navbar.php"); ?>
<?php include("assets/misc/posts/carousel.php"); ?>

<div class="container-fluid mt-3">
    <div class="row flex-xl-nowrap">
        <div class="col-12 col-md-3 bd-sidebar" id="spacingtop">
            <ul class="section-nav">
                <li class="toc-entry toc-h1 lead">
                    <a href="#introduction"><?= $oneTitle ?></a>
                    <hr>
                </li>
                <li class="toc-entry toc-h1 lead">
                    <a href="#euroscola"><?= $twoTitle ?></a>
                    <hr>
                </li>
                <li class="toc-entry toc-h1 lead">
                    <a href="#erasmus"><?= $threeTitle ?></a>
                    <hr>
                </li>
                <li class="toc-entry toc-h1 lead">
                    <a href="#erasmuscndc"><?= $fourTitle ?></a>
                    <hr>
                </li>
                <li class="toc-entry toc-h1 lead">
                    <a href="#campaign"><?= $fiveTitle ?></a>
                    <hr>
                </li>
                <li class="toc-entry toc-h1 lead">
                    <a href="#impact"><?= $sixTitle ?></a>
                    <hr>
                </li>
                <li class="toc-entry toc-h1 lead">
                    <a href="#facebook"><?= $sevenTitle ?></a>
                </li>
            </ul>
        </div>

        <main class="col-12 col-md-9 bd-content" role="main" style="border-left: 1px solid #eee;">
            <div class="container" id="spacingtop">
                <div class="row featurette" id="introduction">
                    <div class="col-md-7 order-0">
                        <h2 class="featurette-heading text-center mb-3"><?= $oneTitle ?> </h2>
                        <p class="lead" style="text-indent: 30px;"><?= $oneText ?></p>
                    </div>
                    <div class="col-md-5 order-1">
                        <div class="mx-auto text-center">
                            <img class="img-fluid" src="../assets/img/home/cndc.jpg" style="width:50%">
                        </div>
                    </div>
                </div>
                <hr class="featurette-divider">

                <div id="euroscola" class="row featurette">
                    <div class="col-md-7 order-0">
                        <h2 class="featurette-heading text-center mb-3"><?= $twoTitle ?></h2>
                        <p class="lead" style="text-indent: 30px;"><?= $twoText ?></p>
                    </div>
                    <div class="align-self-center col-md-5 order-1">
                        <div class="mx-auto text-center">
                            <img class="img-fluid" src="../assets/img/home/euroscola.jpg" style="width:70%">
                        </div>
                    </div>
                </div>
                <hr class="featurette-divider">

                <div id=eurasmus" class="featurette">
                    <div class="row">
                        <div class="col-md-7 order-0">
                            <h2 class="featurette-heading text-center mb-3"><?= $threeTitle ?></h2>
                            <h2 class="mx-4 mb-1 featurette-heading2"><?= $threeText ?></h2>
                            <p class="lead" style="text-indent: 30px;"><?= $threeText1 ?></p>

                            <h2 class="mx-4 mb-1 featurette-heading2"><?= $threeText4 ?></h2>
                            <ul class=" mb-5">
                                <li class="lead"><?= $threeText5 ?></li>
                                <li class="lead"><?= $threeText6 ?></li>
                                <li class="lead"><?= $threeText7 ?></li>
                            </ul>
                        </div>
                        <div class="col-md-5 order-1 mx-auto text-center float-right">
                            <img class="img-fluid mx-auto" src="../assets/img/home/erasmus.jpg" style="width:70%">
                        </div>
                    </div>

                    <h2 class="mx-4 mb-1 featurette-heading2"><?= $threeText8 ?></h2>
                    <ul class=" mb-5">
                        <li class="lead"><?= $threeText9 ?></li>
                        <li class="lead"><?= $threeText10 ?></li>
                        <li class="lead"><?= $threeText11 ?></li>
                        <li class="lead"><?= $threeText12 ?></li>
                        <li class="lead"><?= $threeText13 ?></li>
                        <li class="lead"><?= $threeText14 ?></li>
                    </ul>

                    <h2 class="mx-4 mb-1 featurette-heading2"><?= $threeText15 ?></h2>
                    <p class="lead" style="text-indent: 30px;"><?= $threeText16 ?></p>
                </div>
                <hr class="featurette-divider">

                <div id="erasmuscndc" class="row featurette">
                    <div class="col-md-7 order-0">
                        <h2 class="featurette-heading text-center mb-3"><?= $fourTitle ?></h2>
                        <h2 class="featurette-heading2 mx-4 mb-1"> <?= $fourText18 ?></h2>
                        <ul class="lead">
                            <li><?= $fourText5 ?> 01/10/2016 - 30/09/2018</li>
                            <li><?= $fourText6 ?> 63248€</li>
                        </ul>
                        <h2 class="featurette-heading2 mx-4 mb-1"> <?= $fourText ?></h2>
                        <ul class="lead">
                            <li><?= $fourText1 ?>
                            <li><?= $fourText2 ?>
                            <li><?= $fourText3 ?>
                            <li><?= $fourText4 ?>
                        </ul>
                        <h2 class="featurette-heading2 mx-4 mb-1"> <?= $fourText7 ?></h2>
                        <p class="lead" style="text-indent: 30px;"> <?= $fourText8 ?></p>
                        <h2 class="featurette-heading2 mx-4 mb-1"> <?= $fourText9 ?></h2>
                        <p class="lead" style="text-indent: 30px;"><?= $fourText10 ?></p>
                        <h2 class="featurette-heading2 mx-4 mb-1"> <?= $fourText11 ?></h2>
                        <ul class="lead">
                            <li><?= $fourText12 ?>
                            <li><?= $fourText13 ?>
                            <li><?= $fourText14 ?>
                            <li><?= $fourText15 ?>
                            <li><?= $fourText16 ?>
                            <li><?= $fourText17 ?>
                        </ul>

                    </div>
                    <div class="col-md-5 order-1">
                        <a href="../assets/img/home/logoproiect.png" data-lightbox="<?= $fourTitle ?>" data-title=" <?= $fourTitle ?>">
                            <img class=" img-fluid mx-auto mt-5" src="../assets/img/home/logoproiect.png">
                        </a>
                        <a href="../assets/img/home/grup1.jpg" data-lightbox="<?= $fourTitle ?>" data-title=" <?= $fourTitle ?>">
                            <img class=" img-fluid mx-auto mt-5" src="../assets/img/home/grup1.jpg">
                        </a>
                        <a href="../assets/img/home/grup2.png" data-lightbox="<?= $fourTitle ?>" data-title=" <?= $fourTitle ?>">
                            <img class=" img-fluid mx-auto mt-5" src="../assets/img/home/grup2.png">
                        </a>
                    </div>
                </div>
                <hr class="featurette-divider">

                <div id="campaign" class="row featurette">
                    <div>
                        <h2 class="featurette-heading text-center mb-3 "><?= $fiveTitle ?></h2>
                        <h2 class="mx-4 mb-1"> <?= $fiveText ?>03/10/2018-17/10/2018</h2>
                        <h2 class="mx-4 mb-1"> <?= $fiveText1 ?></h2>
                        <ol class="lead">
                            <li> <?= $fiveText2 ?>
                            <li> <?= $fiveText3 ?>
                            <li> <?= $fiveText4 ?>
                        </ol>
                    </div>
                    <div class="row featurette mx-5 ">
                        <a href="../assets/img/home/campanie1.jpg" data-lightbox="<?= $fiveTitle ?>" data-title=" <?= $fiveTitle ?>">
                            <img class=" img-fluid mx-auto mt-5" style="max-height:652px; height: auto; width: auto;" src="../assets/img/home/campanie1.jpg">
                        </a>
                        <a href="../assets/img/home/campanie2.jpg" data-lightbox="<?= $fiveTitle ?>" data-title=" <?= $fiveTitle ?>">
                            <img class=" img-fluid mx-auto mt-5" style=" max-height:652px; height: auto; width: auto;" src="../assets/img/home/campanie2.jpg">
                        </a>
                    </div>
                </div>
                <hr class="featurette-divider">

                <div id="impact" class="row featurette">
                    <div class="col-md-7 order-0">
                        <h2 class="featurette-heading text-center mb-3"><?= $sixTitle ?></h2>
                        <ul class=" mb-5">
                            <li class="lead"><?= $sixText ?> </li>
                            <li class="lead"><?= $sixText1 ?> </li>
                            <li class="lead"><?= $sixText2 ?> </li>
                        </ul>
                    </div>
                    <div class="col-md-5 order-1">
                        <div class="mx-auto text-center">
                            <a href="../assets/img/home/group.jpg" data-lightbox="<?= $sixTitle ?>" data-title=" <?= $sixTitle ?>">
                                <img class="shadow img-fluid mx-auto mt-5" src="../assets/img/home/group.jpg" style="width:100%">
                            </a>
                        </div>
                    </div>
                </div>

                <hr id="facebook" class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7 order-0">
                        <h2 class="featurette-heading text-center mb-3"><?= $sevenTitle ?></h2>
                        <p class="lead" style="text-indent: 30px;"> <?= $sevenText ?></p>
                        <p class="lead" style="text-indent: 30px;"> <?= $sevenText1 ?></p>
                    </div>
                    <div class="col-md-5 order-1">
                        <div class="m-auto text-center">
                            <?php include("assets/misc/posts/facebook.php"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<?php include("assets/misc/footer/footer.php"); ?>
<?php include("assets/misc/html/scripts.php"); ?>
<script src="../assets/js/lightbox.min.js"></script>
</body>
</html>