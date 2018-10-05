<?php
// Getting the language of the user and redirecting to the correct version of the website
header('Location: home.php/?lang=' . substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2), true, 301);
exit();