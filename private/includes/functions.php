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
    $getImgDetailsQuery =  mysqli_query($connection, "SELECT profile_pic from users WHERE user_id = '$id'");

    $row = mysqli_fetch_assoc($getImgDetailsQuery);
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

// getting date from latest msgs
function getDateFromLatestMsg($userLoggedIn, $user2, $connection)
{

    $getMsgQuery = mysqli_query($connection, "SELECT body, user_toID, date FROM messages WHERE user_toID = '$userLoggedIn' AND user_fromID = '$user2' OR user_toID = '$user2' AND user_fromID ='$userLoggedIn' ORDER BY msg_id DESC LIMIT 1");

    $row = mysqli_fetch_array($getMsgQuery);



    //Timeframe
    $date_time_now = date("Y-m-d H:i:s");
    $start_date = new DateTime($row['date']); //Time of post
    $end_date = new DateTime($date_time_now); //Current time
    $interval = $start_date->diff($end_date); //Difference between dates 
    if ($interval->y >= 1) {
        if ($interval == 1)
            $time_message = $interval->y . " y"; //1 year ago
        else
            $time_message = $interval->y . " y"; //1+ year ago
    } else if ($interval->m >= 1) {
        if ($interval->d == 0) {
            $days = " ago";
        } else if ($interval->d == 1) {
            $days = $interval->d . " d";
        } else {
            $days = $interval->d . " d";
        }


        if ($interval->m == 1) {
            $time_message = $interval->m . "m" . $days;
        } else {
            $time_message = $interval->m . "m" . $days;
        }
    } else if ($interval->d >= 1) {
        if ($interval->d == 1) {
            $time_message = "Yesterday";
        } else {
            $time_message = $interval->d . "d";
        }
    } else if ($interval->h >= 1) {
        if ($interval->h == 1) {
            $time_message = $interval->h . "h";
        } else {
            $time_message = $interval->h . "h";
        }
    } else if ($interval->i >= 1) {
        if ($interval->i == 1) {
            $time_message = $interval->i . "m";
        } else {
            $time_message = $interval->i . "m";
        }
    } else {
        if ($interval->s < 30) {
            $time_message = "Just now";
        } else {
            $time_message = $interval->s . "s";
        }
    }

    return  $time_message;
}




// check if convo between user logged in and other user exixsts of the post id
// so that if its from a different post, users can
function checkIfConvoBetweenUsersExist($connection, $userLoggedIn, $user_to, $post_id)
{
    $getMsgQuery2 = mysqli_query($connection, "SELECT * FROM messages WHERE user_toID = $userLoggedIn AND
    user_fromID = $user_to  AND message_post_id = $post_id OR user_fromID = $userLoggedIn AND user_toID = $user_to AND message_post_id = $post_id");

    $msgCount = mysqli_num_rows($getMsgQuery2);

    // if count is greater or equal than 1, reutrn true
    $checkConvo = $msgCount >= 1 ? true : false;


    return $checkConvo;
}



// function categImage($category){

//     switch($category){
//         case "all-items":
//     }
// }