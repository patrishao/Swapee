<?php
require_once 'private/includes/connection.php';

if (isset($_GET['p-id'])) {
    $pID = $_GET['p-id'];
}

if (isset($_POST['boostPost'])) {


    $day = $_POST['radio'];
    $postID = $_POST['postID'];

    $setToFeature = mysqli_query($connection, "UPDATE posts SET isFeatured = 1 WHERE post_id = '$pID'");


    if (!$setToFeature) {
        die("QUERY FAILED " . mysqli_error($connection));
    } else {

        $setScheduleOn = mysqli_query($connection, "SET GLOBAL event_scheduler = ON");


        $scheduleQuery = "CREATE EVENT myevent" . uniqid() .  " ON SCHEDULE AT CURRENT_TIMESTAMP + INTERVAL "  . $day .   " DAY ";
        $scheduleQuery .= " DO ";
        $scheduleQuery .=  "UPDATE posts SET isFeatured = 0 WHERE post_id =  '$pID'";

        // CREATE EVENT myevent


        $scheduleResult = mysqli_query($connection, $scheduleQuery);

        if (!$scheduleResult) {
            die("QUERY FAILED " . mysqli_error($connection));
        } else {
            echo ("<script>location.href='profile.php?status=paymentsuccess'</script>");
        }
    }
}