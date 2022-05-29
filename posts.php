<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!-- For the carousel pictures -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />


    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/posts.css">

    <title>Swapee</title>
</head>

<body>

    <?php include 'navbar.php';
    require_once('private/includes/connection.php');
    require_once('private/includes/functions.php');
    require_once('private/includes/current-user-details.php')
    ?>

    <?php


    // getting postID from the link
    $postID = $_GET['p_id'];




    // getting the most recent featured items but limit it to 3
    $getFeaturedItemsQuery = "SELECT * FROM posts WHERE post_id = $postID";

    $getFeaturedItemResult = mysqli_query($connection, $getFeaturedItemsQuery);


    while ($row = mysqli_fetch_assoc($getFeaturedItemResult)) {

        $post_id = $row['post_id'];
        $title = $row['title'];
        $category = ucfirst($row['category']);
        $description = $row['description'];
        $post_user_id = $row['user_id'];
        $status = $row['status'];
        $isFeatured = $row['isFeatured'];
        $cover_img = $row['cover-img'];
        $dateCreated = $row['dateCreated'];
        $sub_img1 = $row['sub_img1'];
        $sub_img2 = $row['sub_img2'];
        $sub_img3 = $row['sub_img3'];
    }




    ?>

    <div class="back-container">
        <a href="index.php" class="back-link"><img src="images/icons/back-icon.svg" alt="">Back</a>
    </div>

    <div class="main-container">

        <!-- CHANGES BY CHAY -->

        <div class="pic-holder ps-4 pe-4">
            <div class="prev-arrow arrow">
                <button><img src="images/icons/back-icon-big.svg" alt=""></button>
            </div>

            <div class="container photo-container p-5">

                <div class="photo">
                    <img src="images/uploaded-imgs/<?php echo  $cover_img ?>" class="photos">
                </div>
                <div class="photo">
                    <img src="images/uploaded-imgs/<?php echo  $sub_img1 ?>" class="photos">
                </div>

                <div class="photo">
                    <img src="images/uploaded-imgs/<?php echo  $sub_img2 ?>" class="photos">
                </div>

                <div class="photo">
                    <img src="images/uploaded-imgs/<?php echo  $sub_img3 ?>" class="photos">
                </div>

            </div>

            <div class="right-arrow arrow">
                <button><img src="images/icons/forward-icon.svg" alt=""></button>
            </div>
        </div>

        <!-- middle border -->
        <div class="vertical"></div>

        <div class="posts-container ">

            <div class="text-container">

                <div class="title-cont">
                    <p class="name-of-post"><?php echo  $title ?></p>
                    <p class="name-of-post-subtext"><?php echo  $category ?></p>
                </div>

                <div class="desc-cont">
                    <p class="desc-title">Description</p>
                    <p class="desc-desc"><?php echo  $description ?></p>
                </div>


                <?php

                // getting user details


                $getusersData = "SELECT * FROM users WHERE user_id ='$post_user_id' ";
                $get_all_users_query = mysqli_query($connection, $getusersData);



                // start the query and get the results of the user
                while ($row2 = mysqli_fetch_array($get_all_users_query)) {


                    $post_firstName = strtolower($row2['first_name']);
                    $post_firstName = ucfirst($post_firstName);
                    $post_lastName = strtolower($row2['last_name']);
                    $post_lastName = ucfirst($post_lastName);
                    $post_profile_pic = $row2['profile_pic'];
                    $post_rating = $row2['rating'];
                    $post_username = strtolower($row2['username']);
                    $post_location = $row2['location'];
                }


                ?>

                <div class="seller-cont">
                    <p class="seller-title">Seller Details</p>

                    <!-- redirecting users to the profile page of users -->
                    <a href="profile.php?u-id=<?php echo $post_user_id ?>">
                        <div class="seller-desc">

                            <img src="images/uploaded-imgs/<?php echo  $post_profile_pic ?>" class="prof-pic" alt=""
                                srcset="">
                            <div class="seller-desc2">
                                <p class="prof-name"><?php echo  $post_firstName . " "  . $post_lastName ?></p>
                                <p class="prof-user">@<?php echo  $post_username ?></p>
                                <p class="prof-det"><img src="images/icons/loc-icon.svg" alt="">
                                    <?php echo $checkLoc =   empty($post_location) ?  "Location unset" :   $post_location; ?>
                                    <img src="images/icons/bi_star.svg" alt=""> <?php echo  $post_rating ?>/5
                                </p>
                            </div>

                        </div>
                    </a>
                </div>

                <div class="status-cont">
                    <p class="status-title">Status: </p>
                    <p class="status-stat <?php echo checkItemisOffered($status) ?> ">
                        <?php echo " " . ucfirst($status) ?>
                    </p>
                </div>

                <!-- check if the userID is not the seller if it is, don't show the send message -->
                <?php if ($userID != $post_user_id) { ?>

                <div class="send-cont">


                    <p class="send-title">Send seller a message</p>
                    <?php require 'private/sendSellerMsg.php';




                        // only sending a message if the user has no conversation with the other user with that specific post
                        if (checkIfConvoBetweenUsersExist($connection, $userID, $post_user_id, $postID)) {

                        ?>

                    <p>You already have an existing conversation with this user. <span><a class="linkToMsg"
                                href="message.php?u=<?php echo $post_user_id ?>">Go to the
                                message?</span></a>
                    </p>

                    <?php } else { ?>


                    <form class="send-message" action="" method="POST">
                        <input class="send-input" type="text" name="messageToUser" value=""
                            placeholder="Hi, is this available?"> <br>

                        <input type="text" value="<?php echo $userID ?>" hidden name="userLoggedIn">

                        <input type="text" value="<?php echo $post_id ?>" hidden name="postID">

                        <input type="text" value="<?php echo $cover_img ?>" hidden name="postImg">

                        <input type="text" value="<?php echo $post_user_id ?>" hidden name="userTo">

                        <input type="text" value="<?php echo $title ?>" hidden name="subject">

                        <input class="send-btn" type="submit" name="sendMsg" value="Send">
                    </form>
                </div>




                <?php } ?>





            </div>

            <?php } ?>
        </div>

    </div>

    <!-- <div id="slider">
        <figure>
            <img src="images/uploaded-imgs/detergentessentials.png">
            <img src="images/uploaded-imgs/detergentessentials.png">
            <img src="images/uploaded-imgs/detergentessentials.png">
        </figure>
    </div> -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">

    </script>


    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


    <script>
    $('.photo-container').slick({
        infinite: true,
        prevArrow: $('.prev-arrow'),
        nextArrow: $('.right-arrow'),
        slidesToShow: 1,
        slidesToScroll: 1

    });
    </script>


</body>

</html>