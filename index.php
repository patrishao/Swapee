<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


    <!-- css -->
    <link rel="stylesheet" href="css/home.css">
</head>

<body>

    <?php include 'navbar.php';
    ?>
    <?php include 'private/includes/current-user-details.php'; ?>





    <div class="body">

        <!-- title -->
        <div class="title   ">


            <div class="container d-flex justify-content-center align-content-center align-items-center ">


                <?php if (empty($userID) || session_status() != PHP_SESSION_ACTIVE) { ?>

                <div class="container animate__animated  animate__fadeInDown">
                    <h1 class="ps-lg-5 pe-lg-5 p-2 pb-lg-0 ">Welcome to Swapee!</h1>

                    <p class="ps-lg-5 pe-lg-5 pt-lg-0 p-2 ">How's swapping?</p>
                </div>
                <?php } else { ?>

                <div class="container animate__animated  animate__fadeInDown">
                    <h1 class="ps-lg-5 pe-lg-5 p-2 pb-lg-0 ">Welcome, <?php echo $firstName ?></h1>

                    <p class="ps-lg-5 pe-lg-5 pt-lg-0 p-2 ">How's swapping?</p>
                </div>
                <?php } ?>
                <img src="images/home/illus_homepage.png" alt="" class="animate__animated  animate__fadeInDown">

            </div>

        </div>

        <div class="top-ad text-center m-5 ">

            <a href="https://dodocodes.com/">
                <img src="images/home/top-ad.png" alt="" class="">
            </a>
        </div>


        <div class="container ">

            <!-- main contents -->

            <div class="d-flex flex-column flex-lg-row">

                <div class="aside ps-3 pe-3 ps-lg-0 pe-lg-0 ">

                    <!-- show dropdown for smaller screens -->
                    <div class="sm-dropdown d-md-none mt-3 mb-2 ">
                        <div class="dropdown ">

                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-expanded="false">
                                Categories
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <h5 class="d-none">Categories</h5>
                                <li><a href=" index-categ.php?categ=all-items#item">All items </a> </li>
                                <li> <a href="index-categ.php?categ=self-care#item">Self-care</a> </li>
                                <li><a href="index-categ.php?categ=beauty#item">Beauty</a> </li>
                                <li> <a href="index-categ.php?categ=electronics#item">Electronics</a> </li>
                                <li> <a href="index-categ.php?categ=supermarket#item">Supermarket</a> </li>
                                <li> <a href="index-categ.php?categ=sports#item">Sports</a> </li>
                                <li> <a href="index-categ.php?categ=laptops#item">Laptops</a> </li>
                                <li> <a href="index-categ.php?categ=toys#item">Toys</a> </li>
                                <li> <a href="index-categ.php?categ=kitchen#item">Kitchen</a> </li>
                                <li> <a href="index-categ.php?categ=baby#item">Baby</a> </li>
                                <li> <a href="index-categ.php?categ=mobiles#item">Mobiles</a> </li>
                                <li> <a href="index-categ.php?categ=fashion#item">Fashion</a> </li>
                                <li> <a href="index-categ.php?categ=instruments#item">Instruments</a> </li>
                                <li> <a href="index-categ.php?categ=books#item">Books</a> </li>
                                <li> <a href="index-categ.php?categ=others#item">Others</a> </li>
                            </ul>

                        </div>
                        <div class="categories">

                            <div class="dropdown d-none">

                                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-toggle="dropdown" aria-expanded="false">
                                    Sort by
                                </a>
                                <ul class="dropdown-menu  " aria-labelledby="dropdownMenuLink">

                                    <li> <a href="">Offered</a></li>
                                    <li>

                                        <a href="">Wanted</a>
                                    </li>
                                </ul>
                            </div>

                        </div>


                    </div>


                    <!-- if larger screens, show this  -->
                    <div class="lg-dropdown d-md-block d-none ">

                        <div class="aside ps-3 pe-3 ps-lg-0 pe-lg-0  ">

                            <div class="categories">
                                <h5>Categories</h5>
                                <a href="index-categ.php?categ=all-items#item">All items </a>
                                <a href="index-categ.php?categ=self-care#item">Self-care</a>
                                <a href="index-categ.php?categ=beauty#item">Beauty</a>
                                <a href="index-categ.php?categ=electronics#item">Electronics</a>
                                <a href="index-categ.php?categ=supermarket#item">Supermarket</a>
                                <a href="index-categ.php?categ=sports#item">Sports</a>
                                <a href="index-categ.php?categ=laptops#item">Laptops</a>
                                <a href="index-categ.php?categ=toys#item">Toys</a>
                                <a href="index-categ.php?categ=kitchen#item">Kitchen</a>
                                <a href="index-categ.php?categ=baby#item">Baby</a>
                                <a href="index-categ.php?categ=mobiles#item">Mobiles</a>
                                <a href="index-categ.php?categ=fashion#item">Fashion</a>
                                <a href="index-categ.php?categ=instruments#item">Instruments</a>
                                <a href="index-categ.php?categ=books#item">Books</a>
                                <a href="index-categ.php?categ=others#item">Others</a>
                            </div>


                            <div class="categories mt-5 d-none">
                                <h5>Sort by</h5>
                                <a href="">Offered</a>
                                <a href="">Wanted</a>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="main w-100 main w-100 ps-3 pe-3  p ps-lg-0 pe-lg-0">

                    <h2 class="mb-1 mb-lg-2 featured-title mt-3 mt-lg-3 featured-title">Featured Items</h2>




                    <!-- USE GRID -->
                    <div class="all-items container">



                        <div class="row row-cols-md-3 row-cols-1  ps-1 pe-1 ps-lg-0 pe-lg-0 mt-2 mt-lg-4">

                            <?php require_once('private/includes/connection.php');
                            require_once('private/includes/functions.php');


                            // getting the most recent featured items that is hasnt been swapped or deal is not closed   but limit it to 3
                            $getFeaturedItemsQuery = "SELECT * FROM posts WHERE isFeatured = true AND hasBeenSwapped = 'no' ORDER BY post_id DESC LIMIT 3";

                            $getFeaturedItemResult = mysqli_query($connection, $getFeaturedItemsQuery);


                            while ($row = mysqli_fetch_assoc($getFeaturedItemResult)) {

                                $post_id = $row['post_id'];
                                $title = $row['title'];
                                $category = ucfirst($row['category']);
                                $status = $row['status'];
                                $cover_img = $row['coverImg'];



                            ?>



                            <div class="item col ">

                                <a href="posts.php?p_id=<?php echo $post_id ?>" class="linkToPost">
                                    <div class="featured-container">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="star" width="30" height="30"
                                            viewBox="0 0 44 39" fill="none">
                                            <path
                                                d="M42.5779 13.733L29.3875 11.9537L23.4911 0.85833C23.33 0.554545 23.0651 0.308624 22.7378 0.159143C21.917 -0.216971 20.9195 0.0964574 20.5091 0.85833L14.6127 11.9537L1.42234 13.733C1.05868 13.7812 0.726193 13.9404 0.471633 14.1815C0.163885 14.475 -0.00569854 14.87 0.000146221 15.2796C0.00599098 15.6892 0.186786 16.0799 0.502804 16.3658L10.0462 25.002L7.79152 37.1968C7.73865 37.4804 7.77247 37.7722 7.88915 38.0389C8.00583 38.3057 8.20069 38.5367 8.45165 38.7059C8.70261 38.8751 8.99963 38.9756 9.30901 38.9961C9.61839 39.0166 9.92776 38.9562 10.202 38.8218L22.0001 33.0643L33.7982 38.8218C34.1203 38.9809 34.4943 39.0339 34.8528 38.9761C35.7567 38.8314 36.3645 38.0358 36.2087 37.1968L33.954 25.002L43.4974 16.3658C43.7572 16.1295 43.9286 15.8209 43.9805 15.4834C44.1208 14.6395 43.487 13.8584 42.5779 13.733Z"
                                                fill="#FEB005" />
                                        </svg>
                                    </div>
                                    <img src="images/uploaded-imgs/<?php echo $cover_img ?>" alt="">

                                </a>
                                <div class="item-details mt-3">
                                    <p class="item-categ"><?php echo $category ?></p>
                                    <p class="item-name"><?php echo $title ?></p>
                                    <p class="">Status: <span
                                            class="item-status <?php echo checkItemisOffered($status) ?> "><?php echo ucfirst($status) ?></span>
                                    </p>
                                </div>
                            </div>



                            <?php } ?>

                        </div>




                        <div class="row mt-3 mt-lg-5 row-cols-md-2 row-cols-1 ">

                            <!-- creating another loop to display data in different format -->
                            <?php

                            // getting the most recent featured items but start with the 3rd to the last row until the last 2 rows, to continue 
                            // the loop from the 1st row.
                            $getFeaturedItemsQuery2 = "SELECT * FROM posts WHERE isFeatured = true AND hasBeenSwapped = 'no' ORDER BY post_id DESC LIMIT 3,2";

                            $getFeaturedItemResult2 = mysqli_query($connection, $getFeaturedItemsQuery2);

                            while ($row = mysqli_fetch_assoc($getFeaturedItemResult2)) {

                                $post_id = $row['post_id'];
                                $title = $row['title'];
                                $category = ucfirst($row['category']);
                                $status = $row['status'];
                                $cover_img = $row['coverImg'];



                            ?>



                            <div class="item">

                                <a href="posts.php?p_id=<?php echo $post_id ?>" class="linkToPost">
                                    <div class="featured-container">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="star" width="30" height="30"
                                            viewBox="0 0 44 39" fill="none">
                                            <path
                                                d="M42.5779 13.733L29.3875 11.9537L23.4911 0.85833C23.33 0.554545 23.0651 0.308624 22.7378 0.159143C21.917 -0.216971 20.9195 0.0964574 20.5091 0.85833L14.6127 11.9537L1.42234 13.733C1.05868 13.7812 0.726193 13.9404 0.471633 14.1815C0.163885 14.475 -0.00569854 14.87 0.000146221 15.2796C0.00599098 15.6892 0.186786 16.0799 0.502804 16.3658L10.0462 25.002L7.79152 37.1968C7.73865 37.4804 7.77247 37.7722 7.88915 38.0389C8.00583 38.3057 8.20069 38.5367 8.45165 38.7059C8.70261 38.8751 8.99963 38.9756 9.30901 38.9961C9.61839 39.0166 9.92776 38.9562 10.202 38.8218L22.0001 33.0643L33.7982 38.8218C34.1203 38.9809 34.4943 39.0339 34.8528 38.9761C35.7567 38.8314 36.3645 38.0358 36.2087 37.1968L33.954 25.002L43.4974 16.3658C43.7572 16.1295 43.9286 15.8209 43.9805 15.4834C44.1208 14.6395 43.487 13.8584 42.5779 13.733Z"
                                                fill="#FEB005" />
                                        </svg>
                                    </div>
                                    <img src="images/uploaded-imgs/<?php echo $cover_img ?>" alt="" class="item1">
                                </a>
                                <div class="item-details mt-3">
                                    <p class="item-categ"><?php echo $category ?></p>
                                    <p class="item-name"><?php echo $title ?></p>
                                    <p class="">Status: <span
                                            class="item-status <?php echo checkItemisOffered($status) ?> "><?php echo ucfirst($status) ?></span>
                                    </p>
                                </div>
                            </div>

                            <?php } ?>



                        </div>

                    </div>


                    <div class="container text-center mt-5 mb-5">
                        <a href="index-categ.php?categ=featured">
                            <button class="see-all">See All</button>
                        </a>
                    </div>

                </div>


            </div>





        </div>


        <div class="bot-ad text-center mt-5 mb-4 m-lg-5 p-5  ">
            <a href="https://www.samsung.com/ae/">
                <img src=" images/home/ad2.png" />
            </a>
        </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>


    </div>




</body>

</html>