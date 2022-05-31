<?php
if (isset($_POST['rateUser'])) {



    if (!empty($_POST['rate'])) {

        $rating = $_POST['rate'];

        $insertRatingsQuery = mysqli_query($connection, "INSERT INTO rating (rating, ratingTo, ratingBy) VALUES ('$rating', '$uID', '$userID')");

        if (!$insertRatingsQuery) {
            die("QUERY FAILED " . mysqli_error($connection));
        }



        echo ("<script>location.href='profile.php?u-id=$uID'</script>");
    } else {
        echo '<p style="color:  rgb(165, 60, 60);">Please fill out all the input fields.</p>';
    }
} else {
}