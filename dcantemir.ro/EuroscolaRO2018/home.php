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
<link rel="stylesheet" href="../assets/css/lightbox.min.css">
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
            <h2 class="featurette-heading  text-center mb-3 ml-3"><?= $oneTitle ?> </h2>
            <p class="lead"><?= $oneText ?></p>
        </div>
        <div class="col-md-5 order-1">
        <a href="../assets/img/home/cndc.jpeg" data-lightbox= "<?= $oneTitle ?>" data-title=" <?= $oneTitle ?>">
            <img  class=" img-fluid " src="../assets/img/home/cndc.jpeg" style="width:55%">
           </a> </div>
        </div>

    <hr class="featurette-divider">

    <!-- Euroscola -->
    <div class="row featurette">
        <div class="col-md-7 order-0">
            <h2 class="featurette-heading text-center mb-3 ml-3"><?= $twoTitle ?></h2>
            <p class="lead"><?= $twoText ?></p>
        </div>
        <div class="col-md-5 order-1">
            <a href="../assets/img/home/euroscola.jpg" data-lightbox= "<?= $twoTitle ?>" data-title=" <?= $twoTitle ?>">
            <img  class=" img-fluid " src="../assets/img/home/euroscola.jpg" style="width:70%">
            </a>
            </div>
    </div>

    <hr class="featurette-divider">

    <!-- Erasmus -->
    <div class="row featurette">
    
        <div>
            <h2 class="featurette-heading text-center mb-3 ml-3"><?= $threeTitle ?></h2>
            <div >
            <a href="../assets/img/home/erasmus.jpg" data-lightbox= "<?= $threeTitle ?>" data-title=" <?= $threeTitle ?>">
            <img class=" img-fluid mx-auto mt-5" src="../assets/img/home/erasmus.jpg" style="width:50%">
            </a>
    
    </div>
            <h2 class="mx-4 mb-1"><?= $threeText ?></h2><ul class="lead"> <li><?= $threeText1 ?></ul>
            <h2 class="mx-4 mb-1"><?= $threeText2 ?><?= $threeText3 ?></h2>
            <h2 class="mx-4 mb-1"><?= $threeText4 ?></h2><ul class="lead"> <li><?= $threeText5 ?><li><?= $threeText6 ?><li><?= $threeText7 ?></ul>
            <h2 class="mx-4 mb-1"><?= $threeText8 ?></h2><ol class="lead"> <li><?= $threeText9 ?><li><?= $threeText10 ?><li><?= $threeText11 ?><li><?= $threeText12 ?><li><?= $threeText13 ?><li><?= $threeText14 ?></ol>
            <h2 class="mx-4 mb-1"><?= $threeText15 ?></h2><ul class="lead"> <li><?= $threeText16 ?></ul>

        </div>
        
       
    </div>
    <hr class="featurette-divider">
    <!-- Erasmus cndc -->
    <div class="row featurette">
        <div class="col-md-7 order-0">
            <h2 class="featurette-heading"><?= $fourTitle ?></h2>
            <h2 class="mx-4 mb-1" > <?=$fourText5?>01/10/2016-30/09/2018</h2>
            <h2 class="mx-4 mb-1" > <?=$fourText6?>63248€</h2>
           <h2 class="mx-4 mb-1" > <?=$fourText?></h2>
            <ol class="lead"><li><?=$fourText1?><li><?=$fourText2?><li><?=$fourText3?><li><?=$fourText4?></ol>
            <h2 class="mx-4 mb-1" > <?=$fourText7?></h2><p class="lead"> <?=$fourText8?></p>
            <h2 class="mx-4 mb-1" > <?=$fourText9?></h2><p class="lead"><?=$fourText10?></p>
            <h2 class="mx-4 mb-1" > <?=$fourText11?></h2><ol class="lead"><li><?=$fourText12?><li><?=$fourText13?><li><?=$fourText14?><li><?=$fourText15?><li><?=$fourText16?><li><?=$fourText17?></ol>

        </div>
        <div class="col-md-5 order-1">
        <a href="../assets/img/home/logoproiect.png" data-lightbox= "<?= $fourTitle ?>" data-title=" <?= $fourTitle ?>">
         <img class=" img-fluid mx-auto mt-5" src="../assets/img/home/logoproiect.png" >
        </a>
            <a href="../assets/img/home/grup1.jpg" data-lightbox= "<?= $fourTitle ?>" data-title=" <?= $fourTitle ?>">
            <img class=" img-fluid mx-auto mt-5" src="../assets/img/home/grup1.jpg" >
             </a>
           <a href="../assets/img/home/grup2.png" data-lightbox= "<?= $fourTitle ?>" data-title=" <?= $fourTitle ?>">
           <img class=" img-fluid mx-auto mt-5" src="../assets/img/home/grup2.png" >
            </a>  
    </div>
</div>
<hr class="featurette-divider">
    <!-- Campania noastra de promovare -->
    <div class="row featurette">
        <div >
        <h2 class="featurette-heading text-center mb-3 ml-3"><?= $fiveTitle ?></h2>
        <h2 class="mx-4 mb-1" > <?=$fiveText?>03/10/2018-17/10/2018</h2>
        <h2 class="mx-4 mb-1" > <?=$fiveText1?></h2><ol class="lead"> <li> <?=$fiveText2?><li> <?=$fiveText3?><li> <?=$fiveText4?></ol>
        </div>
        <div class="row featurette ">
        <a href="../assets/img/home/campanie1.jpg" data-lightbox= "<?= $fiveTitle ?>" data-title=" <?= $fiveTitle ?>">
        <img class=" img-fluid mx-auto mt-5" style="max-height:652px; height: auto; width: auto;" src="../assets/img/home/campanie1.jpg" >
        </a> 
        <a href="../assets/img/home/campanie2.jpg" data-lightbox= "<?= $fiveTitle ?>" data-title=" <?= $fiveTitle ?>">
        <img class=" img-fluid mx-auto mt-5" style=" max-height:652px; height: auto; width: auto;" src="../assets/img/home/campanie2.jpg" >
        </a>
         <a href="../assets/img/home/campanie3.jpg" data-lightbox= "<?= $fiveTitle ?>" data-title=" <?= $fiveTitle ?>">
         <img class=" img-fluid mx-auto mt-5" style=" max-height:652px; height: auto; width: auto;" src="../assets/img/home/campanie3.jpg" ></a>
</div>
</div>
<hr class="featurette-divider">

<!-- Impactul campaniei de promovare-->
 <div class="row featurette">
        <div class="col-md-7 order-0">
            <h2 class="featurette-heading text-center mb-3 ml-3"><?= $sixTitle ?></h2>
            <ol class="lead"><li><?=$sixText?><li><?=$sixText1?><li><?=$sixText2?></ol>
        </div>
        <div class="col-md-5 order-1">
        <a href="../assets/img/home/logoproiect.png" data-lightbox= "<?= $sixTitle ?>" data-title=" <?= $sixTitle ?>">
        <img class=" img-fluid mx-auto mt-5" src="../assets/img/home/logoproiect.png" style="width:60%">
        </a>
    </div>
</div>
<hr class="featurette-divider">
<!-- Pagina de Facebook-->
<div class="row featurette">
        <div >
        <h2 class="featurette-heading text-center mb-3 ml-3"><?= $sevenTitle ?></h2> 
            <p class="lead"> <?=$sevenText?><a href="https://www.facebook.com/exploreIT.EuroscolaRO2018/"><?=$sevenLink?></a></p>
            <p class="lead"> <?=$sevenText1?><a href="https://www.facebook.com/groups/556478561456197/"><?=$sevenLink?></a></p>
        </div>
        <div class="col-md-5 order-1">  
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
<script src="../assets/js/lightbox.min.js"></script>
<script>
    lightbox.option({
        'maxWidth': 1200,
        'maxHeight': 800,
   });
</script>
</body>
</html>
