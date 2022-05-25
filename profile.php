<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFILE</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/profile.css">

</head>

<body>
    <?php include 'navbar.php';


    require_once 'private/includes/connection.php';

    require_once 'private/includes/current-user-details.php';


    if (isset($_GET['u-id'])) {
        $uID = $_GET['u-id'];
    } else {

        $uID = $userID;
    }


    ?>
    <div class="container">

        <!-- inside container -->
        <div class="row">

            <!-- left side -->
            <div class="col-md-6 order-lg-1 order-md-1 order-sm-2 post-side">


                <?php

                // creating a query to find post based on user ID 

                $getPostByIDQuery = "SELECT * FROM posts WHERE user_id = $uID ORDER BY post_id DESC";
                $getPostByIDResult = mysqli_query($connection, $getPostByIDQuery);


                while ($row = mysqli_fetch_assoc($getPostByIDResult)) {

                    $postID = $row['post_id'];
                    $postTitle = $row['title'];
                    $category = ucfirst($row['category']);
                    $description = $row['description'];
                    $user_id = $row['user_id'];
                    $status = $row['status'];
                    $isFeatured = $row['isFeatured'];
                    $coverImg = $row['cover-img'];
                    $dateCreated = $row['dateCreated'];


                ?>

                <div class="post-holder">
                    <img src="images/uploaded-imgs/<?php echo $coverImg ?>" alt="" class="post-placeholder">


                    <?php if ($isFeatured) { ?>
                    <div class="featured-container">
                        <svg xmlns="http://www.w3.org/2000/svg" class="star" width="25" height="25" viewBox="0 0 44 39"
                            fill="none">
                            <path
                                d="M42.5779 13.733L29.3875 11.9537L23.4911 0.85833C23.33 0.554545 23.0651 0.308624 22.7378 0.159143C21.917 -0.216971 20.9195 0.0964574 20.5091 0.85833L14.6127 11.9537L1.42234 13.733C1.05868 13.7812 0.726193 13.9404 0.471633 14.1815C0.163885 14.475 -0.00569854 14.87 0.000146221 15.2796C0.00599098 15.6892 0.186786 16.0799 0.502804 16.3658L10.0462 25.002L7.79152 37.1968C7.73865 37.4804 7.77247 37.7722 7.88915 38.0389C8.00583 38.3057 8.20069 38.5367 8.45165 38.7059C8.70261 38.8751 8.99963 38.9756 9.30901 38.9961C9.61839 39.0166 9.92776 38.9562 10.202 38.8218L22.0001 33.0643L33.7982 38.8218C34.1203 38.9809 34.4943 39.0339 34.8528 38.9761C35.7567 38.8314 36.3645 38.0358 36.2087 37.1968L33.954 25.002L43.4974 16.3658C43.7572 16.1295 43.9286 15.8209 43.9805 15.4834C44.1208 14.6395 43.487 13.8584 42.5779 13.733Z"
                                fill="#FEB005" />
                        </svg>
                    </div>

                    <?php } ?>

                    <div class="information-item ms-4 mt-4">


                        <div class="name-item"><?php echo $postTitle ?></div>
                        <div class="categ-item"><?php echo $category ?></div>

                    </div>

                    <div
                        class=" info-container d-flex  justify-content-md-between flex-lg-row flex-column ms-4 mt-4 m-sm-3">
                        <div class=" time-item">
                            <img src="images\icons\icon-park-outline_time.png" alt="">
                            <?php echo $dateCreated  ?>
                        </div>


                        <div class="boost-item ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.2496 2.1875C12.2496 2.07147 12.2035 1.96019 12.1214 1.87814C12.0394 1.79609 11.9281 1.75 11.8121 1.75H6.56208C6.44604 1.75 6.33476 1.79609 6.25272 1.87814C6.17067 1.96019 6.12458 2.07147 6.12458 2.1875C6.12458 2.30353 6.17067 2.41481 6.25272 2.49686C6.33476 2.57891 6.44604 2.625 6.56208 2.625H10.756L1.87733 11.5028C1.83665 11.5434 1.80438 11.5917 1.78237 11.6449C1.76035 11.698 1.74902 11.755 1.74902 11.8125C1.74902 11.87 1.76035 11.927 1.78237 11.9801C1.80438 12.0333 1.83665 12.0816 1.87733 12.1223C1.918 12.1629 1.96629 12.1952 2.01944 12.2172C2.07259 12.2392 2.12955 12.2506 2.18708 12.2506C2.2446 12.2506 2.30156 12.2392 2.35471 12.2172C2.40786 12.1952 2.45615 12.1629 2.49683 12.1223L11.3746 3.24363V7.4375C11.3746 7.55353 11.4207 7.66481 11.5027 7.74686C11.5848 7.82891 11.696 7.875 11.8121 7.875C11.9281 7.875 12.0394 7.82891 12.1214 7.74686C12.2035 7.66481 12.2496 7.55353 12.2496 7.4375V2.1875Z"
                                    fill="white" stroke="white" stroke-width="1.5" />
                            </svg>
                            Boost Post
                        </div>
                    </div>
                </div>

                <?php } ?>

            </div>

            <!-- right side (profile)-->
            <div class="col-md-6 order-lg-2 order-md-1 order-sm-1 profile-side">


                <?php
                $getusersData = "SELECT * FROM users WHERE user_id ='{$uID}' ";
                $get_all_users_query = mysqli_query($connection, $getusersData);



                // start the query and get the results of that specific email found
                while ($row2 = mysqli_fetch_array($get_all_users_query)) {

                    $db_id = $row2['user_id'];
                    $db_email = $row2['email'];
                    $db_firstName = strtolower($row2['first_name']);
                    $db_firstName = ucfirst($db_firstName);
                    $db_lastName = strtolower($row2['last_name']);
                    $db_lastName = ucfirst($db_lastName);
                    $db_password = $row2['password'];
                    $db_bio = $row2['bio'];
                    $db_profile_pic = $row2['profile_pic'];
                    $db_rating = $row2['rating'];
                    $db_username = strtolower($row2['username']);
                    $db_location = $row2['location'];
                }


                ?>



                <div class="content-container">

                    <div class="container-firstpt">
                        <img src="images/<?php if (empty($profPic)) {
                                                echo "carterino.jpeg";
                                            } ?>" alt="" class="profile-pic">
                        <div class="name-user">
                            <div class="name"><?php echo $db_firstName . " " . $db_lastName; ?></div>
                            <div class="username"><?php echo $db_username; ?></div>
                        </div>
                    </div>
                    <div class="bio"><?php echo $db_bio; ?></div>
                    <div class="container-secondpt">

                        <div class="location"> <img src="images\icons\fa6-solid_map-pin.png" alt=""
                                class="location-img">
                            <p class="location-details"><?php if (empty($db_location)) {
                                                            echo "No location yet";
                                                        } ?></p>
                        </div>

                        <div class="rating"> <img src="images\icons\bi_star.png" alt="" class="rating-img">
                            <p class="rating-details"><?php echo $db_rating; ?> / 5</p>
                        </div>



                        <?php if ($uID == $userID) { ?>

                        <div class="prof-buttons ">
                            <a href="edit-profile.php"><img src="images\icons\ci_settings.png" alt=""></a>
                            <img src="images\icons\akar-icons_plus.png" alt="">
                        </div>

                        <?php } ?>

                    </div>

                </div>

            </div>

        </div>
    </div>
</body>

</html>