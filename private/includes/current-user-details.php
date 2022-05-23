<?php

// storing the sessions to a variable for easier call
session_start();

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