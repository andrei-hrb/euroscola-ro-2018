<?php $lang = $_GET["lang"];
include("$lang/$lang.php");
$srHome = "";
$srCantemir = "";
$srTeam = "active"; ?>
<html>
<head>
    <?php include("assets/misc/html/head.php"); ?>
    <title> <?= $team . ' ' . $title ?></title>
</head>
<body>
<?php include("assets/misc/navbar/navbar.php"); ?>

<div class="container my-5">
    <div class="text-center">
        <img src="/assets/img/team.png" class="rounded">
        <div class="m-3"
            <div class="container">
                <div class="row">
                    <div class="col-9 mx-auto">
                        <h5 class="team-text"><?= $teamText ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
function newPerson($name, $img, $post)
{
    echo '<div class="col-4">
            <img class="rounded" src="' . $img . '" width="140" height="140">
            <h2>' . $name . '</h2>
            <p>' . $post . '</p>
        </div>';
}

?>

<!--
vars at your disposal:

$profs
$web
$fb
$posters
$interview
$articles
$event
$journal
-->

<div class="container people">
    <div class="row">
       <?php newPerson('Filip Felicia', '../assets/img/Echipa/felicia.jpg', substr($profs, 0, -1));?>
       <?php newPerson('Basoc Lenuța', '../assets/img/Echipa/basoc.jpg', substr($profs, 0, -1));?>
    </div>
    
    <hr>

    <div class="row">
        <?php newPerson('Alexe Vlad-Andrei', '../assets/img/Echipa/alexe.jpg', $web);?>
        <?php newPerson('Balint Robert', '../assets/img/Echipa/balint.jpg', $interview);?>
        <?php newPerson('Birtea Bogdan-Octavian', '../assets/img/Echipa/birtea.jpg', $posters);?>
    </div>

    <div class="row">
        <?php newPerson('Calfa Mihai', '../assets/img/Echipa/calfa.jpg', $posters);?>
        <?php newPerson('Cărăușu Maria', '../assets/img/Echipa/carausu.jpg', $interview);?>
        <?php newPerson('Cătea Francesca-Rita', '../assets/img/Echipa/catea.jpg', $journal);?>
    </div>

<div class="row">
        <?php newPerson('Cercel Cosmin', '../assets/img/Echipa/cercel.jpg', $articles);?>
        <?php newPerson('Enea Flavia', '../assets/img/Echipa/ciobanu.jpg', $posters);?>
        <?php newPerson('Filip Bianca-Maria', '../assets/img/Echipa/filip.jpg', $posters);?>
    </div>

<div class="row">
        <?php newPerson('Ghineț Iustin-Gabriel', '../assets/img/Echipa/ghinet.jpg', $posters);?>
        <?php newPerson('Gotschik Clara-Maria', '../assets/img/Echipa/gotschik.jpg', $journal);?>
        <?php newPerson('Hanganu Sonia-Serena', '../assets/img/Echipa/hanganu.jpg', $articles);?>
    </div>
<div class="row">
        <?php newPerson('Hîrbu Andrei', '../assets/img/Echipa/hirbu.jpg', $web);?>
        <?php newPerson('Lupu Răzvan-Ioan', '../assets/img/Echipa/lupu.jpg', $interview);?>
        <?php newPerson('Neculăiță-Mocanu Mălina-Andreea', '../assets/img/Echipa/mocanu.jpg', $journal);?>
    </div>
<div class="row">
        <?php newPerson('Popa Tudor-Valentin', '../assets/img/Echipa/popa.jpg', $articles);?>
        <?php newPerson('Pricopi Andrei', '../assets/img/Echipa/pricopi.jpg', $articles);?>
        <?php newPerson('Stancu Diana-Elena', '../assets/img/Echipa/stancu.jpg', $web);?>
    
</div><div class="row">
        <?php newPerson('Suditu Mara-Ioana', '../assets/img/Echipa/suditu.jpg', $events);?>
        <?php newPerson('Zotica Ștefan-Lucian', '../assets/img/Echipa/zotica.png', $interview);?>
       <?php newPerson('Ciobanu Francesco', '../assets/img/Echipa/ciobanu.jpg', $posters);?>
    
</div>
<div class="row">
        <?php newPerson('Ciobanu Francesco', '../assets/img/Echipa/ciobanu.jpg', ($posters. ' & ' . $reserve));?>
        <?php newPerson('Guramba Robert-Petru', '../assets/img/Echipa/guramba.jpg', ($posters. ' & ' . $reserve));?>
        <?php newPerson('Palaghiță Mara-Andreea', '../assets/img/Echipa/palaghita.jpg', ($fb . ' & ' . $reserve));?>
    
</div>

<?php include("assets/misc/footer/footer.php"); ?>
<?php include("assets/misc/html/scripts.php"); ?>
</body>
</html>