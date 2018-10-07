<?php
$lang = $_GET["lang"];
include("$lang/$lang.php");

$srHome = "active";
$srCantemir = "";
$srTeam = "";
?>
<html>
<head>
    <?php include("assets/misc/html/head.php"); ?>
    <title> <?= $home . ' ' . $title ?> </title>
</head>

<body>
<?php include("assets/misc/utils/mobile.php"); ?>
<?php include("assets/misc/navbar/navbar.php"); ?>
<?php include("assets/misc/posts/carousel.php"); ?>

<!-- index (for dev)

1) Introducere
2) Ce este Euroscola?
3) Ce este Erasmus?
4) Erasmus in CNDC
5) Campania noastra de promovare
6) Impact
7) Sponsori / Parteneri
8) Pagina / Grup de Facebook-->

<!--Introduction-->
<div class="container marketing" id="spacingtop">
    <div class="row featurette">
        <div class="col-md-7 order-0">
            <h2 class="featurette-heading"><?= $oneTitle ?> </h2>
            <p class="lead"><?= $oneText ?></p>
        </div>
        <div class="col-md-5 order-1">
            <img id="myImg img01" class="featurette-image img-fluid mx-auto" src="../assets/img/team/team.png">
            <div id="myModal" class="modal">
                <p class="close" style="color: white">&times;</p>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
            </div>
        </div>
    </div -->

    <hr class="featurette-divider">

    <!-- Erasmus -->
    <div class="row featurette">
        <div class="col-md-7 order-0">
            <h2 class="featurette-heading"><?= $twoTitle ?></h2>
            <p class="lead"><?= $twoText ?></p>
        </div>
        <div class="col-md-5 order-1">
            <img id="myImg img02" class="featurette-image img-fluid mx-auto" src="../assets/img/team/team.png">
            <div id="myModal" class="modal">
                <p class="close" style="color: white; @media ">&times;</p>
                <img class="modal-content" id="img02">
                <div id="caption"></div>
            </div>
        </div>
    </div>

    <hr class="featurette-divider">

    <!-- Euroscola -->
    <div class="row featurette">
        <div class="col-md-7 order-0">
            <h2 class="featurette-heading"><?= $threeTitle ?></h2>
            <p class="lead"><?= $threeText ?></p>
        </div>
        <div class="col-md-5 order-1">
            <img id="myImg img03" class="featurette-image img-fluid mx-auto" src="../assets/img/team/team.png">
            <div id="myModal" class="modal">
                <p class="close" style="color: white"; @media>&times;</p>
                <img class="modal-content" id="img03">
                <div id="caption"></div>
            </div>
        </div>
    </div>
    <hr class="featurette-divider">
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
