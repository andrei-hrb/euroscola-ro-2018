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
            <img class="rounded-circle" src="' . $img . '" width="140" height="140">
            <h2>' . $name . '</h2>
            <p>' . $post . '</p>
        </div>';
}

?>

<div class="container people">
    <div class="row">
       <?php newPerson('Filip', 'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==', substr($profs, 0, -1));?>
       <?php newPerson('Basoc', 'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==', substr($profs, 0, -1));?>
    </div>
    <hr>
    <div class="row">
        <?php newPerson('Popa', 'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==', $web);?>
        <?php newPerson('Amariutei', 'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==', $articles);?>
        <?php newPerson('Termin', 'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==', $fb);?>
    </div>
    <div class="row">
        <?php newPerson('Andrei', 'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==', $posters);?>
        <?php newPerson('Diana', 'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==', $interview);?>
        <?php newPerson('Marian', 'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==', $journal);?>
    </div>
</div>

<?php include("assets/misc/footer/footer.php"); ?>
<?php include("assets/misc/html/scripts.php"); ?>
</body>
</html>