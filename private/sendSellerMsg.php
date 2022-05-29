<?php
require_once('private/includes/connection.php');
if (isset($_POST['sendMsg'])) {

    $message = $_POST['messageToUser'];
    $userLoggedIn = $_POST['userLoggedIn'];
    $postID = $_POST['postID'];
    $postImg = $_POST['postImg'];
    $userTo = $_POST['userTo'];
    $subject = $_POST['subject'];
    $date = date("Y-m-d H:i:s");

    if (empty($message)) {
        echo "Msg is empty";
    } else {




        // cleaning the text
        $message = cleanInput($connection, $message);


        // inserting the query to the database, and making sure that the sender or userfrom is the userloggedin
        $insertMsgQuery = "INSERT INTO messages (user_toID, user_fromID, body, date, itemImg, subject, message_post_id) VALUES ('$userTo', '$userLoggedIn', '$message', '$date', '$postImg', '$subject', '$postID')";


        $insert = mysqli_query($connection, $insertMsgQuery);

        if (!$insert) {
            echo "Error " . mysqli_error($connection);
        } else {
            echo ("<script>location.href='message.php?u=$userTo'</script>");
        }
    }
}