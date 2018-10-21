<!-- code might look strange because of the usage of php; check the github project -->
<?php
$lang = $_GET["lang"];

if( $lang == "" ) header('Location: /?lang=en', true, 301);

include($lang . "/" . $lang . ".php");

$srHome = "active";
$srCantemir = "";
$srTeam = "";
$srGallery = "";
?>
<html>
<head>
    <?php include("assets/misc/html/head.php"); ?>
    <title><?= $home . ' ' . $baseTitle ?></title>
    <link href="https://getbootstrap.com/docs/4.1/assets/css/docs.min.css" rel="stylesheet">
    <link href="../assets/css/lightbox.min.css" rel="stylesheet">
    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/ro_RO/sdk.js#xfbml=1&version=v3.1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
</head>

<body>
<?php include("assets/misc/navbar/navbar.php"); ?>
<?php include("assets/misc/3rd party parts/carousel.php"); ?>

<div class="container-fluid mt-3">
    <div class="row flex-xl-nowrap">
        <div class="col-12 col-md-3 bd-sidebar" id="spacingtop">
            <ul class="section-nav">
                <li class="toc-entry toc-h1 lead">
                    <a href="#introduction"><?= $introductionTitle ?></a>
                    <hr>
                </li>
                <li class="toc-entry toc-h1 lead">
                    <a href="#euroscola"><?= $euroscolaTitle ?></a>
                    <hr>
                </li>
                <li class="toc-entry toc-h1 lead">
                    <a href="#erasmus"><?= $erasmusTitle ?></a>
                    <hr>
                </li>
                <li class="toc-entry toc-h1 lead">
                    <a href="#erasmuscndc"><?= $erasmusTitle ?></a>
                    <hr>
                </li>
                <li class="toc-entry toc-h1 lead">
                    <a href="#campaign"><?= $campaignTitle ?></a>
                    <hr>
                </li>
                <li class="toc-entry toc-h1 lead">
                    <a href="#impact"><?= $impactTitle ?></a>
                    <hr>
                </li>
                <li class="toc-entry toc-h1 lead">
                    <a href="#facebook"><?= $facebookTitle ?></a>
                </li>
            </ul>
        </div>

        <main class="col-12 col-md-9 bd-content" role="main">
            <div class="container" id="spacingtop">
                <div class="row featurette" id="introduction">
                    <div class="col-md-7 order-0">
                        <h2 class="featurette-heading text-center mb-3"><?= $introductionTitle ?> </h2>
                         <p class="lead ind"><?= $introductionText ?></p>
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
                        <h2 class="featurette-heading text-center mb-3"><?= $euroscolaTitle ?></h2>
                        <p class="lead ind"><?= $euroscolaText ?></p>
                    </div>
                    <div class="align-self-center col-md-5 order-1 mx-auto text-center">
                        <img class="img-fluid" src="../assets/img/home/euroscola.jpg" style="width:70%">
                    </div>
                </div>
                <hr class="featurette-divider">

                <div id=eurasmus" class="featurette">
                    <div class="row">
                        <div class="col-md-7 order-0">
                            <h2 class="featurette-heading text-center mb-3"><?= $erasmusTitle ?></h2>
                            <h2 class="mx-4 mb-1 featurette-heading2"><?= $erasmusText ?></h2>
                            <p class="lead ind"><?= $erasmusText1 ?></p>
                            <h2 class="mx-4 mb-1 featurette-heading2"><?= $erasmusText4 ?></h2>
                            <ul class=" mb-5">
                                <li class="lead"><?= $erasmusText5 ?></li>
                                <li class="lead"><?= $erasmusText6 ?></li>
                                <li class="lead"><?= $erasmusText7 ?></li>
                            </ul>
                        </div>
                        <div class="col-md-5 order-1 mx-auto text-center float-right">
                            <img class="img-fluid mx-auto" src="../assets/img/home/erasmus.jpg" style="width:70%">
                        </div>
                    </div>
                    <h2 class="mx-4 mb-1 featurette-heading2"><?= $erasmusText8 ?></h2>
                    <ul class=" mb-5">
                        <li class="lead"><?= $erasmusText9 ?></li>
                        <li class="lead"><?= $erasmusText10 ?></li>
                        <li class="lead"><?= $erasmusText11 ?></li>
                        <li class="lead"><?= $erasmusText12 ?></li>
                        <li class="lead"><?= $erasmusText13 ?></li>
                        <li class="lead"><?= $erasmusText14 ?></li>
                    </ul>
                    <h2 class="mx-4 mb-1 featurette-heading2"><?= $erasmusText15 ?></h2>
                    <p class="lead ind"><?= $erasmusText16 ?></p>
                </div>
                <hr class="featurette-divider">

                <div id="erasmuscndc" class="row featurette">
                    <div class="col-md-7 order-0">
                        <h2 class="featurette-heading text-center mb-3"><?= $erasmusCNDCTitle ?></h2>
                        <h2 class="featurette-heading2 mx-4 mb-1"> <?= $erasmusCNDCText18 ?></h2>
                        <ul class="lead">
                            <li><?= $erasmusCNDCText5 ?> 01/10/2016 - 30/09/2018</li>
                            <li><?= $erasmusCNDCText6 ?> 63248€</li>
                        </ul>
                        <h2 class="featurette-heading2 mx-4 mb-1"> <?= $erasmusCNDCText ?></h2>
                        <ul class="lead">
                            <li><?= $erasmusCNDCText1 ?>
                            <li><?= $erasmusCNDCText2 ?>
                            <li><?= $erasmusCNDCText3 ?>
                            <li><?= $erasmusCNDCText4 ?>
                        </ul>
                        <h2 class="featurette-heading2 mx-4 mb-1"> <?= $erasmusCNDCText7 ?></h2>
                        <p class="lead ind"> <?= $erasmusCNDCText8 ?></p>
                        <h2 class="featurette-heading2 mx-4 mb-1"> <?= $erasmusCNDCText9 ?></h2>
                        <p class="lead ind"><?= $erasmusCNDCText10 ?></p>
                        <h2 class="featurette-heading2 mx-4 mb-1"> <?= $erasmusCNDCText11 ?></h2>
                        <ul class="lead">
                            <li><?= $erasmusCNDCText12 ?>
                            <li><?= $erasmusCNDCText13 ?>
                            <li><?= $erasmusCNDCText14 ?>
                            <li><?= $erasmusCNDCText15 ?>
                            <li><?= $erasmusCNDCText16 ?>
                            <li><?= $erasmusCNDCText17 ?>
                        </ul>
                    </div>
                    <div class="col-md-5 order-1">
                        <a href="../assets/img/home/logoproiect.png" data-lightbox="<?= $erasmusCNDCTitle ?>" data-title=" <?= $erasmusCNDCTitle ?>"><img class=" img-fluid mx-auto mt-5" src="../assets/img/home/logoproiect.png"></a>
                        <a href="../assets/img/home/grup1.jpg" data-lightbox="<?= $erasmusCNDCTitle ?>" data-title=" <?= $erasmusCNDCTitle ?>"><img class=" img-fluid mx-auto mt-5" src="../assets/img/home/grup1.jpg"></a>
                        <a href="../assets/img/home/grup2.png" data-lightbox="<?= $erasmusCNDCTitle ?>" data-title=" <?= $erasmusCNDCTitle ?>"><img class=" img-fluid mx-auto mt-5" src="../assets/img/home/grup2.png"></a>
                    </div>
                </div>
                <hr class="featurette-divider">

                <div id="campaign" class="row featurette">
                    <div>
                        <h2 class="featurette-heading text-center mb-3 "><?= $campaignTitle ?></h2>
                        <h2 class="mx-4 mb-1"> <?= $campaignText ?>03/10/2018-17/10/2018</h2>
                        <h2 class="mx-4 mb-1"> <?= $campaignText1 ?></h2>
                        <ol class="lead">
                            <li> <?= $campaignText2 ?>
                            <li> <?= $campaignText3 ?>
                            <li> <?= $campaignText4 ?>
                        </ol>
                    </div>
                    <div class="row featurette mx-5 ">
                        <a href="../assets/img/home/campanie1.jpg" data-lightbox="<?= $campaignTitle ?>" data-title=" <?= $campaignTitle ?>"><img class=" img-fluid mx-auto mt-5" style="max-height:652px; height: auto; width: auto;" src="../assets/img/home/campanie1.jpg"></a>
                        <a href="../assets/img/home/campanie2.jpg" data-lightbox="<?= $campaignTitle ?>" data-title=" <?= $campaignTitle ?>"><img class=" img-fluid mx-auto mt-5" style=" max-height:652px; height: auto; width: auto;" src="../assets/img/home/campanie2.jpg"></a>
                    </div>
                </div>
                <hr class="featurette-divider">

                <div id="impact" class="row featurette">
                    <div class="col-md-7 order-0">
                        <h2 class="featurette-heading text-center mb-3"><?= $impactTitle ?></h2>
                        <ul class=" mb-5">
                            <li class="lead"><?= $impactText ?> </li>
                            <li class="lead"><?= $impactText1 ?> </li>
                            <li class="lead"><?= $impactText2 ?> </li>
                        </ul>
                    </div>
                    <div class="col-md-5 order-1 mx-auto text-center">
                        <a href="../assets/img/home/group.jpg" data-lightbox="<?= $impactTitle ?>" data-title=" <?= $impactTitle ?>"><img class="shadow img-fluid mx-auto mt-5" src="../assets/img/home/group.jpg" style="width:100%"></a>
                    </div>
                </div>
                <hr class="featurette-divider">

                <div id="facebook" class="row featurette">
                    <div class="col-md-7 order-0">
                        <h2 class="featurette-heading text-center mb-3"><?= $facebookTitle ?></h2>
                        <p class="lead ind"> <?= $facebookText ?></p>
                        <p class="lead ind"> <?= $facebookText1 ?></p>
                    </div>
                    <div class="col-md-5 order-1 m-auto text-center">
                        <?php include("assets/misc/3rd party parts/facebook.php"); ?>
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