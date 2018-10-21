<!-- code might look strange because of the usage of php; check the github project -->
<?php
$lang = $_GET["lang"];
include("$lang/$lang.php");

$srHome = "";
$srCantemir = "";
$srTeam = "active";
$srGallery = "";
?>
<html>
<head>
    <?php include("assets/misc/html/head.php"); ?>
    <link rel="stylesheet" href="../assets/css/lightbox.min.css">
    <title> <?= $team . ' ' . $baseTitle ?> </title>
</head>

<body>
<?php include("assets/misc/navbar/navbar.php"); ?>

<div class="container my-5 featurette mt-3 mb-1">
    <div class="container">
        <div class="row">
            <div class="col-12 mx-auto mx-3">
                <p class="featurette-heading team-text text-center"><?= $teamText ?></p>
            </div>
        </div>
    </div>

    <div class="text-center">
        <a href="../assets/img/team/team.jpg" data-lightbox="<?= $teamText ?>" data-title=" <?= $teamText ?>"><img class="rounded shadow featurette-image img-fluid mx-auto" style="width: 100%; max-width: 1000px;" src="../assets/img/team/team.jpg"></a>
    </div>
</div>

<?php
function newPerson($name, $img, $post)
{
    echo '
        <div class="col-4">
            <img class="rounded people" src="../assets/img/team/' . $img . '.jpg" >  
            <h3 class="mt-1 featurette-heading2">' . $name . '</h3>
            <p class="mb-3 lead people">' . $post . '</p>
        </div>';
}

?>
<div class="container people">
    <div class="row">
        <?php newPerson('Filip Gabriela-Felicia', 'felicia', $profs); ?>
        <?php newPerson('Basoc Lenuța', 'basoc', $profs); ?>
    </div>
    <div class="row">
        <?php newPerson('Alexe Vlad-Andrei', 'alexe', $posters); ?>
        <?php newPerson('Balint Robert', 'balint', $video); ?>
        <?php newPerson('Birtea Bogdan-Octavian', 'birtea', $posters); ?>
    </div>
    <div class="row">
        <?php newPerson('Calfa Mihai', 'calfa', $popularization); ?>
        <?php newPerson('Cărăușu Maria', 'carausu', $interview); ?>
        <?php newPerson('Cătea Francesca-Rita', 'catea', $articles); ?>
    </div>
    <div class="row">
        <?php newPerson('Cercel Cosmin', 'cercel', $articles); ?>
        <?php newPerson('Ciobanu Francesco', 'ciobanu', $posters); ?>
        <?php newPerson('Enea Flavia', 'enea', $posters); ?>
    </div>
    <div class="row">
        <?php newPerson('Filip Maria-Bianca', 'filip', $popularization); ?>
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
        <?php newPerson('Neculăiță-Mocanu Mălina-Andreea', 'mocanu', $popularization); ?>
        <?php newPerson('Palaghiță Mara-Andreea', 'palaghita', $popularization); ?>
    </div>
    <div class="row">
        <?php newPerson('Popa Tudor-Valentin', 'popa', $interview); ?>
        <?php newPerson('Stancu Diana-Elena', 'stancu', $web); ?>
        <?php newPerson('Pricopi Andrei', 'pricopi', $interview); ?>
    </div>
    <div class="row">
        <?php newPerson('Suditu Mara-Ioana', 'suditu', $popularization); ?>
        <?php newPerson('Zotica Ștefan-Lucian', 'zotica', $video); ?>
    </div>
</div>

<?php include("assets/misc/footer/footer.php"); ?>
<?php include("assets/misc/html/scripts.php"); ?>
<script src="../assets/js/lightbox.min.js"></script>
<script>
    lightbox.option({
        'maxWidth': 1400,
        'maxHeight': 1000,
    });
</script>
</body>
</html>