<?php
$lang = $_GET["lang"];

if ($lang == "") header('Location: /?lang=en', true, 301);

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


<?php include("assets/misc/navbar/navbar.php"); ?>

<!-- index (for dev)

1) Munca noastra
2) Workshop1
3) Workshop2
4) Popularizare !-->


</div>
<!-- rand -->
<div class="coloane">
  <!-- coloana -->
  <h1 class="featurette-heading text-center text-info"><?=$posters?></h1>
    <div >
       <img class="img-fluid" src="../assets/img/gallery/afis.jpg" style="width:80%">
    </div>
    <!-- coloana -->
    <div>
      <img class="img-fluid" src="../assets/img/gallery/anunt.jpg">
    </div></div>

<!-- rand -->
  <div class="coloane">
    <!--coloana-->
    <div>
        <img class="img-fluid" src="../assets/img/gallery/pliant1.png" >
    </div>
    <!-- coloana-->
    <div >
        <img class="img-fluid" src="../assets/img/gallery/pliant2.png" >
    </div></div>

<hr class="featurette-divider">
<!-- rand -->
<div class="coloane">
<h1 class="featurette-heading text-center text-info"><?=$sessions?></h1></div>



<?php include("assets/misc/footer/footer.php"); ?>
<?php include("assets/misc/html/scripts.php"); ?>
</body>
</html>
