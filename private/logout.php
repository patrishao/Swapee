<?php

// clearing out all the sessions


unset($_SESSION); //all session will be gone
$_SESSION = array();

$userID = null;
$email = null;
$username = null;
$firstName =  null;
$lastName =  null;
$bio = null;
$profPic = null;
$rating = null;
$location = null;


$_SESSION['userID'] = null;
$_SESSION['email'] = null;
$_SESSION['username'] = null;
$_SESSION['firstName'] = null;
$_SESSION['lastName'] = null;
$_SESSION['bio'] = null;
$_SESSION['profPic'] = null;
$_SESSION['rating'] = null;
$_SESSION['location'] = null;



// unset cookies
if (isset($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach ($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time() - 1000);
        setcookie($name, '', time() - 1000, '/');
    }
}

header("Location: ../landing_page.php");