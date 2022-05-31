<?php

use GuzzleHttp\Psr7\Header;

include_once 'private/includes/current-user-details.php';

$userLoggedIn = $userID;
$emptyMsg = false;


// getting the user ID from the link
if (isset($_GET['u'])) {
    $user_to = $_GET['u'];
    $isCurrentMsg = true;
}


// if not, get the most recent user 
else {

    $user_to = getMostRecentUser($connection, $userLoggedIn);
    $isCurrentMsg = true;



    // checks if the user has sent a message to anyone yet
    if ($user_to == false) {
        $user_to = "new";
    }
}

// count database 



// semdomg the message if there are values
if (isset($_POST['sendMsg'])) {

    $txtMsg = $_POST['txtMsg'];
    $date = date("Y-m-d H:i:s");


    $img =  uniqid() . $_FILES["img"]["name"];

    // cleaning the text
    $txtMsg = cleanInput($connection, $txtMsg);

    if (empty($txtMsg)) {
        $emptyMsg = true;
    } else {


        // inserting the query to the database, and making sure that the sender or userfrom is the userloggedin

        if (empty($_FILES["img"]["name"])) {
            $img = null;
        } else {
            $targetLoc = "images/uploaded-imgs/";

            move_uploaded_file($_FILES["img"]["tmp_name"], $targetLoc . $img);
        }



        $insertMsgQuery = mysqli_query($connection, "INSERT INTO messages (user_toID, user_fromID, body, date, itemImg )VALUES ('$user_to', '$userLoggedIn', '$txtMsg', '$date', '$img')");
        header("Location: message.php#chatbox");
    }
}