<?php

// clearing out all the sessions


$userID = null;
$email = null;
$username = null;
$firstName =  null;
$lastName =  null;
$bio = null;
$profPic = null;
$rating = null;
$location = null;

session_destroy();

header("Location: ../landing_page.php");