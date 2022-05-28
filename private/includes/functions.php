<?php

function cleanInput($connection, $input)
{
    $input =  mysqli_real_escape_string($connection, $input);

    return $input;
}

function checkEmail($email)
{
    $email = "example.com";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.mailcheck.ai/domain/' . $email);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    var_dump($response);
}

// this function checks if a userinput from the database exists
function checkIfValueExist($connection, $field, $data)
{

    // creating the query based on the parameters
    $fieldFinder =  mysqli_query($connection, "SELECT $field from users WHERE $field = '$data'");

    // return number of rows found
    $num_rows = mysqli_num_rows($fieldFinder);

    // if a row exists with the fields given, return true
    if ($num_rows > 0) {
        return true;
    } else {
        return false;
    }
}

function checkItemisOffered($status)
{

    if (strcmp($status, "offered")) {
        return "status-offered";
    } else {
        return "status-wanted";
    }
}


function getFirstLastName($connection, $id)
{
    $getDetailsQuery =  mysqli_query($connection, "SELECT * from users WHERE user_id = '$id'");

    $row = mysqli_fetch_assoc($getDetailsQuery);
    $firstName = $row['first_name'];
    $lastName = $row['last_name'];


    return $firstName . " " . $lastName;
}


function getUserImg($connection, $id)
{
    $getDetailsQuery =  mysqli_query($connection, "SELECT * from users WHERE user_id = '$id'");

    $row = mysqli_fetch_assoc($getDetailsQuery);
    $userProfImg = $row['profile_pic'];



    return $userProfImg;
}


// getting the most recetn conversation the user had
function getMostRecentUser($connection, $userLoggedIn)
{
    $getMostRecentQuery = mysqli_query($connection, "SELECT user_toID, user_fromID FROM messages WHERE user_toID = '$userLoggedIn' OR user_fromID = '$userLoggedIn' ORDER BY msg_id DESC LIMIT 1");

    if (mysqli_num_rows($getMostRecentQuery) == 0) {
        return false;
    }

    // fetching the details
    $row = mysqli_fetch_array($getMostRecentQuery);
    $user_to = $row['user_toID'];
    $user_from = $row['user_fromID'];


    // checking who the user last messaged 
    if ($user_to != $userLoggedIn) {
        return $user_to;
    } else {
        return $user_from;
    }
}


// getting all convos that  is associated withb the user logged in
function getLatestMsg($userLoggedIn, $user2, $connection)
{



    $getMsgQuery = mysqli_query($connection, "SELECT body, user_toID FROM messages WHERE user_toID = '$userLoggedIn' AND user_fromID = '$user2' OR user_toID = '$user2' AND user_fromID ='$userLoggedIn' ORDER BY msg_id DESC LIMIT 1");

    $row = mysqli_fetch_array($getMsgQuery);
    $sent_by = $row['user_toID'] == $userLoggedIn ? " " :  "You: ";


    return $sent_by . $row['body'];
}