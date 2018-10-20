<?php

$lang = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2);

if( ! in_array($lang, array('en', 'fr', 'ro')) )
{
    $lang = 'en';
}

header("Location: home.php/?lang=" . $lang, true, 301);
exit();