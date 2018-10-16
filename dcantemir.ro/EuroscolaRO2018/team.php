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
    <link rel="stylesheet" href="../assets/css/lightbox.min.css">
    <title> <?= $team . ' ' . $title ?> </title>
</head>

<body>
<?php include("assets/misc/navbar/navbar.php"); ?>

<!-- Group photo plus text -->

<div class="container my-5 featurette">
    <div class="mt-3 mb-1">
        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto mx-3">
                    <p class="featurette-heading team-text text-center"><?= $teamText ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        <a href="../assets/img/team/team.jpg" data-lightbox= "<?= $teamText ?>" data-title=" <?= $teamText ?>">
            <img class="featurette-image img-fluid mx-auto img-thumbnail" style="width: 100%; max-width: 1000px;" src="../assets/img/team/team.jpg">
        </a>
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

<div class="container people">
    <div class="row">
        <?php newPerson('Filip Gabriela-Felicia', 'felicia', $profs); ?>
        <?php newPerson('Basoc Lenuța', 'basoc', $profs); ?>
    </div>

    <div class="row">
        <?php newPerson('Alexe Vlad-Andrei', 'alexe', $web); ?>
        <?php newPerson('Balint Robert', 'balint', $video); ?>
        <?php newPerson('Birtea Bogdan-Octavian', 'birtea', $posters); ?>
    </div>

    <div class="row">
        <?php newPerson('Calfa Mihai', 'calfa', $popularisation); ?>
        <?php newPerson('Cărăușu Maria', 'carausu', $interview); ?>
        <?php newPerson('Cătea Francesca-Rita', 'catea', $articles); ?>
    </div>

    <div class="row">
        <?php newPerson('Cercel Cosmin', 'cercel', $articles); ?>
        <?php newPerson('Ciobanu Francesco', 'ciobanu', $posters); ?>
        <?php newPerson('Enea Flavia', 'enea', $posters); ?>
    </div>

    <div class="row">
        <?php newPerson('Filip Maria-Bianca', 'filip', $popularisation); ?>
        <?php newPerson('Ghineț Iustin-Gabriel', 'ghinet', $posters); ?>
        <?php newPerson('Guramba Robert-Petru', 'guramba', $posters); ?>
    </div>

    <div class="row">
        <?php newPerson('Gotschik Clara-Maria', 'gotschik', $articles); ?>
        <?php newPerson('Hanganu Sonia-Serena', 'hanganu', $articles); ?>
        <?php newPerson('Hîrbu Andrei', 'hirbu', $web); ?>
    </div>

    <div class="row">
        <?php newPerson('Lupu Răzvan-Ioan', 'lupu', $interview); ?>
        <?php newPerson('Neculăiță-Mocanu Mălina-Andreea', 'mocanu', $popularisation); ?>
        <?php newPerson('Palaghiță Mara-Andreea', 'palaghita', $popularisation); ?>
    </div>

    <div class="row">
        <?php newPerson('Popa Tudor-Valentin', 'popa', $interview); ?>
        <?php newPerson('Stancu Diana-Elena', 'stancu', $web); ?>
        <?php newPerson('Pricopi Andrei', 'pricopi', $interview); ?>
    </div>

    <div class="row">
        <?php newPerson('Suditu Mara-Ioana', 'suditu', $popularisation); ?>
        <?php newPerson('Zotica Ștefan-Lucian', 'zotica', $video); ?>
    </div>
</div>

<?php include("assets/misc/footer/footer.php"); ?>
<?php include("assets/misc/html/scripts.php"); ?>
<script src="../assets/js/lightbox.min.js"></script>
<script>
    lightbox.option({
        'maxWidth': 1300,
        'maxHeight': 900
    });
</script>
</body>
</html>