<?php
$lang = $_GET["lang"];
include("$lang/$lang.php");

$srHome = "";
$srCantemir = "";
$srTeam = "active";
$srGallery="";
?>
<html>
<head>
    <?php include("assets/misc/html/head.php"); ?>
    <title> <?= $team . ' ' . $title ?></title>
</head>

<body>
<?php include("assets/misc/utils/mobile.php"); ?>
<?php include("assets/misc/navbar/navbar.php"); ?>

<!-- Group photo plus text -->

<div class="container my-5">
    <div class="text-center">
        <img id="myImg" class="featurette-image img-fluid mx-auto img-thumbnail" style="width: 100%; max-width: 1000px;" src="../assets/img/team/team.jpg" alt=<?= $teamAltText ?>>
        <div id="myModal" class="modal">
        <span class="close" style="color: white;">&times;</span><!-- The Close Button -->
        <img class="modal-content" id="img01" style="max-width: 90%"><!-- Modal Content (The Image) -->
        <div id="caption">

        </div><!-- Modal Caption (Image Text) -->
        </div>
    </div>

    <div class="mt-3 mb-1">
            <div class="container">
                <div class="row">
                    <div class="col-9 mx-auto">
                        <h6 class="team-text display-5 text-center"><?= $teamText ?></h6>
                    </div>
            </div>
        </div>
    </div>
</div>

<!-- Each person's photo, name and role in this project -->

<?php
function newPerson($name, $img, $post)
{
    echo '
        <div class="col-4">
            <img  class="rounded people" src="../assets/img/team/' . $img . '.jpg" alt="' . $name . '">
            <h6 class="mt-1 people">' . $name . '</h6>
            <p class="mb-3 people">' . $post . '</p>
        </div>';
}

?>

<!--
vars at your disposal: (for production)
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
        <?php newPerson('Filip Gabriela-Felicia', 'felicia', substr($profs, 0, -1)); ?>
        <?php newPerson('Basoc Lenuța', 'basoc', substr($profs, 0, -1)); ?>
    </div>

    <div class="row">
        <?php newPerson('Alexe Vlad-Andrei', 'alexe', $web); ?>
        <?php newPerson('Balint Robert', 'balint', $interview); ?>
        <?php newPerson('Birtea Bogdan-Octavian', 'birtea', $posters); ?>
    </div>

    <div class="row">
        <?php newPerson('Calfa Mihai', 'calfa', $posters); ?>
        <?php newPerson('Cărăușu Maria', 'carausu', $interview); ?>
        <?php newPerson('Cătea Francesca-Rita', 'catea', $journal); ?>
    </div>

    <div class="row">
        <?php newPerson('Cercel Cosmin', 'cercel', $articles); ?>
        <?php newPerson('Ciobanu Francesco', 'ciobanu', $posters); ?>
        <?php newPerson('Enea Flavia', 'enea', $posters); ?>
    </div>

    <div class="row">
        <?php newPerson('Filip Maria-Bianca', 'filip', $posters); ?>
        <?php newPerson('Ghineț Iustin-Gabriel', 'ghinet', $posters); ?>
        <?php newPerson('Guramba Robert-Petru', 'guramba', $posters); ?>
    </div>

    <div class="row">
        <?php newPerson('Gotschik Clara-Maria', 'gotschik', $journal); ?>
        <?php newPerson('Hanganu Sonia-Serena', 'hanganu', $articles); ?>
        <?php newPerson('Hîrbu Andrei', 'hirbu', $web); ?>
    </div>

    <div class="row">
        <?php newPerson('Lupu Răzvan-Ioan', 'lupu', $interview); ?>
        <?php newPerson('Neculăiță-Mocanu Mălina-Andreea', 'mocanu', $journal); ?>
        <?php newPerson('Palaghiță Mara-Andreea', 'palaghita', $fb); ?>
    </div>

    <div class="row">
        <?php newPerson('Popa Tudor-Valentin', 'popa', $articles); ?>
        <?php newPerson('Stancu Diana-Elena', 'stancu', $web); ?>
        <?php newPerson('Pricopi Andrei', 'pricopi', $articles); ?>
    </div>

    <div class="row">
        <?php newPerson('Suditu Mara-Ioana', 'suditu', $events); ?>
        <?php newPerson('Zotica Ștefan-Lucian', 'zotica', $interview); ?>
    </div>

</div>

<?php include("assets/misc/footer/footer.php"); ?>
<?php include("assets/misc/html/scripts.php"); ?>
</body>
</html>