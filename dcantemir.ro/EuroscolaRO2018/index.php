<html>
<head>
    <meta property="og:title" content="<?= $title ?>">
    <meta property="og:image" content="https://i.imgur.com/VIfOuyT.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="640">
    <meta property="og:details" content="<?= $footerText ?>">
</head>
</html>

<?php

$lang = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2);

if( ! in_array($lang, array('en', 'fr', 'ro')) )
{
    $lang = 'en';
}

header("Location: home.php/?lang=" . $lang, true, 301);
exit();