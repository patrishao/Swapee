<?php
require_once 'private/includes/connection.php';
require_once 'private/includes/functions.php';

require_once 'private/includes/current-user-details.php';


// getting the post id 
if (isset($_GET['p_id'])) {
    $post_id = $_GET['p_id'];

    $getPostQuery = mysqli_query($connection, "SELECT * FROM posts WHERE post_id = $post_id");

    if (!$getPostQuery) {
        die("QUERY FAILED " . mysqli_error($connection));
    }

    while ($row = mysqli_fetch_array($getPostQuery)) {

        $titleP = $row['title'];
        $categoryP = $row['category'];
        $descriptionP = $row['description'];
        $coverImgP = $row['coverImg'];
        $sub1P = $row['sub_img1'];
        $sub2P = $row['sub_img2'];
        $sub3P = $row['sub_img3'];
    }
}




if (isset($_POST['submit'])) {

    // getting details

    $title = $_POST['title'];
    $category = $_POST['category'];
    $description = $_POST['desc'];
    $archive = $_POST['archive'];



    $title = cleanInput($connection, $title);
    $category = cleanInput($connection, $category);
    $description = cleanInput($connection, $description);



    if (empty($archive)) {
        $archive = "no";
    }


    // check if input is empty
    if (empty($title) || empty($category) || empty($description)) {
        echo '<div class="alert alert-danger" role="alert">
    Please fill in the required fields.
    </div>';
    } else if (strlen($title) >= 20) {
        echo '<div class="alert alert-danger" role="alert">
   Your title is way too long!
    </div>';
    } else {





        $updateQuery = "UPDATE posts SET ";
        $updateQuery .= "title = '{$title}',";
        $updateQuery .= "category = '{$category}',";
        $updateQuery .= "description = '{$description}',";
        $updateQuery .= "hasBeenSwapped = '{$archive}'";
        $updateQuery .= "WHERE post_id = '{$post_id}'";


        $add = mysqli_query($connection, $updateQuery);
        if (!$add) {
            die("QUERY FAILED " . mysqli_error($connection));
        }


        header("Location: posts.php?p_id=$post_id");
    }
}