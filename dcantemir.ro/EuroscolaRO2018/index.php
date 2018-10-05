<?php
// Getting the language of the user and redirecting to the correct version of the website
$redirect = "Location: home.php/?lang=" . substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2);
header($redirect, true, 301);
exit();