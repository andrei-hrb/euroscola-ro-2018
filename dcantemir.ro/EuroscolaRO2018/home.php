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
                    <a href="#erasmuscndc"><?= $erasmusCNDCTitle ?></a>
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
                        <p class="lead ind mb-2"><?= $euroscolaText ?></p>
                    </div>
                    <div class="align-self-center col-md-5 order-1 mx-auto text-center">
                        <img class="img-fluid mt-2 mb-4 mt-md-5" src="../assets/img/home/euroscola.jpg" style="width:70%">
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
                            <ul class="lead">
                                <li><?= $erasmusText5 ?></li>
                                <li><?= $erasmusText6 ?></li>
                                <li><?= $erasmusText7 ?></li>
                            </ul>
                        </div>
                        <div class="col-md-5 order-1 mx-auto text-center float-right">
                            <img class="img-fluid mx-auto mt-2 mb-4 mt-md-5" src="../assets/img/home/erasmus.jpg" style="width:70%">
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

                <div id="erasmuscndc" class="featurette">
                    <div class="row">
                        <div class="col-md-7 order-0">
                            <h2 class="featurette-heading text-center mb-3"><?= $erasmusCNDCTitle ?></h2>
                            <h2 class="featurette-heading2 mx-4 mb-1"> <?= $erasmusCNDCText18 ?></h2>
                            <ul class="lead">
                                <li><?= $erasmusCNDCText5 ?> 01/10/2016 - 30/09/2018</li>
                                <li><?= $erasmusCNDCText6 ?> 63248€</li>
                            </ul>
                        </div>
                        <div class="col-md-5 order-1">
                            <a href="../assets/img/home/group1.jpg" data-lightbox="<?= $erasmusCNDCTitle ?>" data-title=" <?= $erasmusCNDCTitle ?>"><img class="rounded shadow img-fluid mx-auto mt-2 mb-4 mt-md-5" src="../assets/img/home/group1.jpg"></a>
                        </div>
                    </div>
                    <h2 class="featurette-heading2 mx-4 mb-1"> <?= $erasmusCNDCText ?></h2>
                    <ul class="lead">
                        <li><?= $erasmusCNDCText1 ?></li>
                        <li><?= $erasmusCNDCText2 ?></li>
                        <li><?= $erasmusCNDCText3 ?></li>
                        <li><?= $erasmusCNDCText4 ?></li>
                    </ul>
                    <h2 class="featurette-heading2 mx-4 mb-1"> <?= $erasmusCNDCText7 ?></h2>
                    <p class="lead ind"> <?= $erasmusCNDCText8 ?></p>
                    <h2 class="featurette-heading2 mx-4 mb-1"> <?= $erasmusCNDCText9 ?></h2>
                    <p class="lead ind"><?= $erasmusCNDCText10 ?></p>
                    <h2 class="featurette-heading2 mx-4 mb-1"> <?= $erasmusCNDCText11 ?></h2>
                    <ul class="lead">
                        <li><?= $erasmusCNDCText12 ?> <a href="http://appinventor.mit.edu/explore/">(<?= $erasmusCNDCText19 ?>)</a>
                            <ul>
                                <li><a href="../assets/apps/hello1.aia" download>Fata 1 + fata 2</a></li>
                                <li><a href="../assets/apps/hello2.aia" download>Fata 3 + fata 4</a></li>
                                <li><a href="../assets/apps/hello3.aia" download>Fata 5 + fata 6</a></li>
                                <li><a href="../assets/apps/hello4.aia" download>Fata 7 + fata 8</a></li>
                            </ul>
                        </li>
                        <li><?= $erasmusCNDCText13 ?></li>
                        <li><?= $erasmusCNDCText14 ?></li>
                        <li><?= $erasmusCNDCText15 ?></li>
                        <li><?= $erasmusCNDCText16 ?></li>
                        <li><?= $erasmusCNDCText17 ?></li>
                    </ul>
                </div>
                <hr class="featurette-divider">

                <div id="campaign" class="featurette">
                    <div class="row">
                        <div class="col-md-7 order-0">
                            <h2 class="featurette-heading text-center mb-3"><?= $campaignTitle ?></h2>
                            <h2 class="mx-4 mb-1 featurette-heading2"> <?= $campaignText ?>03/10/2018-17/10/2018</h2>
                            <h2 class="mx-4 mb-1 featurette-heading2"> <?= $campaignText1 ?></h2>
                            <ul class="lead">
                                <li> <?= $campaignText2 ?> </li>
                                <li> <?= $campaignText3 ?> </li>
                                <li> <?= $campaignText4 ?> </li>
                            </ul>
                        </div>
                        <div class="col-md-5 order-1">
                            <a href="../assets/img/home/campanie1.jpg" data-lightbox="<?= $campaignTitle ?>" data-title=" <?= $campaignTitle ?>"><img class="rounded shadow img-fluid mx-md-auto mt-2 mb-4 mt-md-5" src="../assets/img/home/campanie1.jpg"></a>
                        </div>
                    </div>
                    <h2 class="mx-4 mb-1 featurette-heading2"> <?= $campaignText5 ?></h2>
                    <ul class="lead">
                        <li><?= $campaignText6 ?> <a data-toggle="collapse" href="#wk" role="button" aria-expanded="false" aria-controls="wk"><?= $campaignText7 ?></a> <?= $campaignText8 ?></li>
                        <div class="collapse" id="wk">
                            <div class="video shadow m-3">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/ZLsD074vK4Y" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div>
                        <li><?= $campaignText9 ?><a href="http://www.onestiexpres.ro/un-pas-inainte-pentru-deschiderea-europeana.html" target="_blank" rel="noopener noreferrer"><?= $campaignText10 ?></a><?= $campaignText11?></li>
                        <li><a data-toggle="collapse" href="#int" role="button" aria-expanded="false" aria-controls="int"><?= $campaignText12 ?></a><?= $campaignText13 ?></li>
                        <div class="collapse" id="int">
                            <div class="video shadow m-3">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/gEpOoZSzh8k" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div>
                        <li><?= $campaignText9 ?><a href="https://www.facebook.com/groups/556478561456197/" target="_blank" rel="noopener noreferrer"><?= $campaignText14 ?></a><?= $campaignText15 ?></li>
                        <li><a href="../assets/img/home/creators.jpg" data-lightbox="<?= $campaignText17 ?>" data-title="<?= $campaignText17 ?>"><?= $campaignText16 ?></a></li>
                    </ul>
                </div>


            </div>
            <hr class="featurette-divider">

            <div id="impact" class="row featurette">
                <div class="col-md-7 order-0">
                    <h2 class="featurette-heading text-center mb-3"><?= $impactTitle ?></h2>
                    <ul class="lead">
                        <li><?= $impactText ?> </li>
                        <li><?= $impactText1 ?> </li>
                        <li><?= $impactText2 ?> </li>
                    </ul>
                </div>
                <div class="col-md-5 order-1 mx-auto text-center">
                    <a href="../assets/img/home/group.jpg" data-lightbox="<?= $impactTitle ?>" data-title=" <?= $impactTitle ?>"><img class="shadow img-fluid mx-auto mt-2 mb-4 mt-md-5" src="../assets/img/home/group.jpg" style="width:100%"></a>
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