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
<link href="https://getbootstrap.com/docs/4.1/assets/css/docs.min.css" rel="stylesheet">
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

    <div class="container-fluid cupr">
      <div class="row flex-xl-nowrap">
        <div class="col-12 col-md-3 col-xl-2 bd-sidebar">
            <ul class="section-nav">
<li class="toc-entry toc-h1 "><a  class="" href="#introduction"><?=$oneTitle?></a>
<li class="toc-entry toc-h1 "><a href="#euroscola"><?=$twoTitle?></a></li>
<li class="toc-entry toc-h1 "><a href="#erasmus"><?=$threeTitle?></a></li>
<li class="toc-entry toc-h1 "><a href="#erasmusc"><?=$fourTitle?></a></li>
<li class="toc-entry toc-h1 "><a href="#campania"><?=$fiveTitle?></a></li>
<li class="toc-entry toc-h1 "><a href="#impact"><?=$sixTitle?></a></li>
<li class="toc-entry toc-h1 "><a href="#pagina"><?=$sevenTitle?></a></li>
</ul>
 </div>
        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <!--Introduction-->
<div  id="introducion" class="container mt-3" >
  <div class="row featurette">
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

  <!-- Euroscola -->
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

  <!-- Erasmus -->
  <div id="erasmus" class="featurette">
      <div class="row">
          <div class="col-md-7 order-0">
              <h2 class="featurette-heading text-center mb-3"><?= $threeTitle ?></h2>
              <h2 class="mx-4 mb-1"><?= $threeText?></h2><div class="lead"><?= $threeText1 ?></div>
              <h2 class="mx-4 mb-1"><?= $threeText2 ?></h2><div class="lead"><?= $threeText3 ?></div>
          </div>
          <div class="col-md-5 order-1 mx-auto text-center float-right">
              <img class="img-fluid mx-auto" src="../assets/img/home/erasmus.jpg" style="width:70%">
          </div>
      </div>

      <h2 class="mx-4 mb-1"><?= $threeText4 ?></h2>
      <ul class=" mb-5">
          <li class="lead"><?= $threeText5 ?></li>
          <li class="lead"><?= $threeText6 ?></li>
          <li class="lead"><?= $threeText7 ?></li>
      </ul>

      <h2 class="mx-4 mb-1"><?= $threeText8 ?></h2>
      <ul class=" mb-5">
          <li class="lead"><?= $threeText9 ?></li>
          <li class="lead"><?= $threeText10 ?></li>
          <li class="lead"><?= $threeText11 ?></li>
          <li class="lead"><?= $threeText12 ?></li>
          <li class="lead"><?= $threeText13 ?></li>
          <li class="lead"><?= $threeText14 ?></li>
      </ul>

      <h2 class="mx-4 mb-1"><?= $threeText15 ?></h2>
      <p class=" lead" style="text-indent: 30px;"><?= $threeText16 ?></p>
  </div>

  <hr class="featurette-divider">


  <!-- Erasmus CNDC -->
  <div id="erasmusc" class="row featurette">
      <div class="col-md-7 order-0">
          <h2 class="featurette-heading text-center mb-3"><?= $fourTitle ?></h2>
          <h2 class="mx-4 mb-1"> <?= $fourText5 ?>01/10/2016-30/09/2018</h2>
          <h2 class="mx-4 mb-1"> <?= $fourText6 ?>63248€</h2>
          <h2 class="mx-4 mb-1"> <?= $fourText ?></h2>
          <ol class="lead">
              <li><?= $fourText1 ?>
              <li><?= $fourText2 ?>
              <li><?= $fourText3 ?>
              <li><?= $fourText4 ?></ol>
          <h2 class="mx-4 mb-1"> <?= $fourText7 ?></h2>
          <p class="lead"> <?= $fourText8 ?></p>
          <h2 class="mx-4 mb-1"> <?= $fourText9 ?></h2>
          <p class="lead"><?= $fourText10 ?></p>
          <h2 class="mx-4 mb-1"> <?= $fourText11 ?></h2>
          <ol class="lead">
              <li><?= $fourText12 ?>
              <li><?= $fourText13 ?>
              <li><?= $fourText14 ?>
              <li><?= $fourText15 ?>
              <li><?= $fourText16 ?>
              <li><?= $fourText17 ?></ol>

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
  <!-- Campania noastra de promovare -->
  <div id="campania" class="row featurette ">
      <div>
          <h2 class="featurette-heading text-center mb-3 "><?= $fiveTitle ?></h2>
          <h2 class="mx-4 mb-1"> <?= $fiveText ?>03/10/2018-17/10/2018</h2>
          <h2 class="mx-4 mb-1"> <?= $fiveText1 ?></h2>
          <ol class="lead">
              <li> <?= $fiveText2 ?>
              <li> <?= $fiveText3 ?>
              <li> <?= $fiveText4 ?></ol>
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

  <!-- Impactul campaniei de promovare-->
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
                  <img class="img-fluid mx-auto mt-5 img-thumbnail" src="../assets/img/home/group.jpg" style="width:100%">
              </a>
          </div>
      </div>
  </div>


  <hr class="featurette-divider">


  <!-- Pagina de Facebook-->

  <div id="pagina" class="row featurette">
      <div class="col-md-7 order-0">
          <h2 class="featurette-heading text-center mb-3"><?= $sevenTitle ?></h2>
          <p class="lead"> <?= $sevenText ?></p>
          <p class="lead"> <?= $sevenText1 ?></p>
      </div>
      <div class="col-md-5 order-1">
          <div class="mx-auto text-center">
              <?php include("assets/misc/posts/facebook.php"); ?>
          </div>
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

        </main>
      </div>
    </div>
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
