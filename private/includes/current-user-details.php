<?php


// storing the sessions to a variable for easier call
session_start();
error_reporting(E_ALL & ~E_NOTICE);

if (!empty($_SESSION['userID'])) {

    $userID = $_SESSION['userID'];
    $email = $_SESSION['email'];
    $username = strtolower($_SESSION['username']);
    $firstName =  strtolower($_SESSION['firstName']);
    $firstName =  ucfirst($firstName);
    $lastName =  strtolower($_SESSION['lastName']);
    $lastName =  ucfirst($lastName);
    $bio = $_SESSION['bio'];
    $profPic = $_SESSION['profPic'];
    $rating = $_SESSION['rating'];
    $location = $_SESSION['location'];
} else {
    $userID = null;
    $email = null;
    $username = null;
    $firstName =  null;
    $lastName =  null;
    $bio = null;
    $profPic = null;
    $rating = null;
    $location = null;
}