<?php
$lang = $_GET["lang"];

if ($lang == "") header('Location: /?lang=en', true, 301);

include("$lang/$lang.php");

$srHome = "active";
$srCantemir = "";
$srTeam = "";
$srGallery="";
?>
<html>
<head>
    <?php include("assets/misc/html/head.php"); ?>
    <title> <?= $home . ' ' . $title ?> </title>
</head>

<body>
<?php include("assets/misc/navbar/navbar.php"); ?>
<?php include("assets/misc/posts/carousel.php"); ?>

<!-- index (for dev)

1) Introducere
2) Ce este Euroscola?
3) Ce este Erasmus?
4) Erasmus in CNDC
5) Campania noastra de promovare
6) Impact
8) Pagina / Grup de Facebook-->

<!--Introduction-->
<div class="container" id="spacingtop">
    <div class="row featurette">
        <div class="col-md-7 order-0">
            <h2 class="featurette-heading"><?= $oneTitle ?> </h2>
            <p class="lead"><?= $oneText ?></p>
        </div>
        <div class="col-md-5 order-1">
            <img  class="featurette-image img-fluid " src="../assets/img/home/cndc.jpeg" style="width:70%">
            </div>
        </div>

    <hr class="featurette-divider">

    <!-- Euroscola -->
    <div class="row featurette">
        <div class="col-md-7 order-0">
            <h2 class="featurette-heading"><?= $twoTitle ?></h2>
            <p class="lead"><?= $twoText ?></p>
        </div>
        <div class="col-md-5 order-1">
            <img  class="featurette-image img-fluid " src="../assets/img/home/euroscola.jpg" style="width:70%">
            </div>
    </div>

    <hr class="featurette-divider">

    <!-- Erasmus -->
    <div class="row featurette">
        <div class="col-md-7 order-0">
            <h2 class="featurette-heading"><?= $threeTitle ?></h2>
            <p class="lead"><?= $threeText ?></p>
        </div>
        <div class="col-md-5 order-1">
            <img class="featurette-image img-fluid mx-auto mt-5" src="../assets/img/home/erasmus.jpg" style="width:100%">
            </div>
       
    </div>
    <hr class="featurette-divider">
    <!-- Erasmus cndc -->
    <div class="row featurette">
        <div class="col-md-7 order-0">
            <h2 class="featurette-heading"><?= $fourTitle ?></h2>
            <h2 class="text-danger" > <?=$fourText5?>01/10/2016-30/09/2018</h2>
            <h2 class="text-danger" > <?=$fourText6?>63248€</h2>
           <h2 class="text-danger" > <?=$fourText?></h2>
            <ol class="lead"><li><?=$fourText1?><li><?=$fourText2?><li><?=$fourText3?><li><?=$fourText4?></ol>
            <h2 class="text-danger" > <?=$fourText7?></h2><p class="lead"> <?=$fourText8?></p>
            <h2 class="text-danger" > <?=$fourText9?></h2><p class="lead"><?=$fourText10?></p>
            <h2 class="text-danger" > <?=$fourText11?></h2><ol class="lead"><li><?=$fourText12?><li><?=$fourText13?><li><?=$fourText14?><li><?=$fourText15?><li><?=$fourText16?><li><?=$fourText17?></ol>

        </div>
        <div class="col-md-5 order-1">
            <img class="featurette-image img-fluid mx-auto mt-5" src="../assets/img/home/logoproiect.png" >
            <img class="featurette-image img-fluid mx-auto mt-5" src="../assets/img/home/grup1.jpg" >
            <img class="featurette-image img-fluid mx-auto mt-5" src="../assets/img/home/grup2.png" >
    </div>
</div>
<hr class="featurette-divider">
    <!-- Campania noastra de promovare -->
    <div class="row featurette">
        <div class="col-md-7 order-0">
        <h2 class="featurette-heading"><?= $fiveTitle ?></h2>
        <h2 class="text-danger" > <?=$fiveText?>03/10/2018-17/10/2018</h2>
        <h2 class="text-danger" > <?=$fiveText1?></h2><ol class="lead"> <li> <?=$fiveText2?><li> <?=$fiveText3?><li> <?=$fiveText4?></ol>
        </div>
        <div class="col-md-5 order-1">
            <img class="featurette-image img-fluid mx-auto mt-5" src="../assets/img/home/logoproiect.png" >
            <img class="featurette-image img-fluid mx-auto mt-5" src="../assets/img/home/grup1.jpg" >
            <img class="featurette-image img-fluid mx-auto mt-5" src="../assets/img/home/grup2.png" >
    </div>
</div>
<hr class="featurette-divider">
<!-- Impactul campaniei de promovare-->
 <div class="row featurette">
        <div class="col-md-7 order-0">
            <h2 class="featurette-heading"><?= $sixTitle ?></h2>
            <ol class="lead"><li><?=$sixText?><li><?=$sixText1?><li><?=$sixText2?></ol>

        </div>
        <div class="col-md-5 order-1">
            <img class="featurette-image img-fluid mx-auto mt-5" src="../assets/img/home/logoproiect.png" >
    </div>
</div>
<hr class="featurette-divider">
<!-- Pagina de Facebook-->
<div class="row featurette">
        <div class="col-md-7 order-0">
        <h2 class="featurette-heading"><?= $sevenTitle ?></h2> 
            <p class="lead"> <?=$sevenText?><a href="https://www.facebook.com/exploreIT.EuroscolaRO2018/"><?=$sevenLink?></a></p>
            <p class="lead"> <?=$sevenText1?><a href="https://www.facebook.com/groups/556478561456197/"><?=$sevenLink?></a></p>
        </div>
        <div class="col-md-5 order-1">
            <img class="featurette-image img-fluid mx-auto mt-5" src="../assets/img/home/logoproiect.png" >
            
    </div>
</div>
</div>


<!--div class="container">
    <div id="player"></div>

    <script>
        var tag = document.createElement('script');

        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        var player;

        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                height: '360',
                width: '640',
                videoId: 'rVeMiVU77wo',
                events: {
                    'onStateChange': onPlayerStateChange
                }
            });
        }

        var done = false;

        function onPlayerStateChange(event) {
            if (event.data == YT.PlayerState.PLAYING && !done) {
                setTimeout(stopVideo, 6000);
                done = true;
            }
        }

        function stopVideo() {
            player.stopVideo();
        }
    </script>
</div -->

<?php include("assets/misc/footer/footer.php"); ?>
<?php include("assets/misc/html/scripts.php"); ?>
</body>
</html>
