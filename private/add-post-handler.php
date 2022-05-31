<?php
require_once 'private/includes/connection.php';
require_once 'private/includes/functions.php';

require_once 'private/includes/current-user-details.php';




if (isset($_POST['submit'])) {

    // getting details

    $title = $_POST['title'];
    $category = $_POST['category'];
    $description = $_POST['desc'];
    $date = date("Y-m-d H:i:s");

    $images = $_FILES['images'];
    // print_r($images);


    $title = cleanInput($connection, $title);
    $category = cleanInput($connection, $category);
    $description = cleanInput($connection, $description);


    // check if input is empty
    if (empty($images) || empty($title) || empty($category) || empty($description)) {
        echo '<div class="alert alert-danger" role="alert">
    Please fill in the required fields.
    </div>';
    } else {
        if (count($_FILES['images']['name']) > 4 || count($_FILES['images']['name']) < 4) {
            echo '<div class="alert alert-danger" role="alert">
    Maximum or minimum image requirement is not met. Total number of images
    should only be 4.
    </div>';
        } else if (strlen($title) >= 20) {
            echo '<div class="alert alert-danger" role="alert">
   Your title is way too long!
    </div>';
        } else {


            $targetLoc = "images/uploaded-imgs/";
            $cover =  uniqid() . $_FILES["images"]["name"][0];
            $sub1 =  uniqid() . $_FILES["images"]["name"][1];
            $sub2 =  uniqid() . $_FILES["images"]["name"][2];
            $sub3 =  uniqid() . $_FILES["images"]["name"][3];

            move_uploaded_file($_FILES["images"]["tmp_name"][0], $targetLoc . $cover);
            move_uploaded_file($_FILES["images"]["tmp_name"][1], $targetLoc . $sub1);
            move_uploaded_file($_FILES["images"]["tmp_name"][2], $targetLoc . $sub2);
            move_uploaded_file($_FILES["images"]["tmp_name"][3], $targetLoc . $sub3);

            $insertQuery = "INSERT INTO posts (title, category, description, user_id, dateCreated, coverImg, sub_img1, sub_img2, sub_img3)  VALUES ('$title', '$category', '$description', '$userID',
            '$date', '$cover', '$sub1', '$sub2', '$sub3')";

            $add = mysqli_query($connection, $insertQuery);
            if (!$add) {
                die("QUERY FAILED " . mysqli_error($connection));
            }


            header("Location: profile.php");
        }
    }
}