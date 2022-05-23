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

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- css -->
    <link rel="stylesheet" href="css/home.css">
</head>

<body>


    <?php include_once 'navbar.php' ?>

    <?php

    // getting the category named that was passed on the previous page
    $categoryName = $_GET['categ'];

    $allItem = "all-items";



    ?>


    <div class="body">

        <!-- title -->
        <div class="title-categ position-relative">


            <div class="container ">

                <p class="category-top-title">Category / <span class="categ-top-type">
                        <?php


                        // displaying the category title based on the data obtained in the link
                        if (strpos($categoryName, $allItem) !== false) {
                            echo "All items";
                        } else {
                            echo $categoryName;
                        }

                        ?>
                    </span></p>

            </div>




        </div>

        <div class="top-ad text-center m-4 m-lg-5  ">

            <img src="images/home/ad2.png" alt="" class="">

        </div>


        <div class="container d-flex">

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
                                <li><a href=" index-categ.php?categ=all-items">Featured Items</a> </li>
                                <li><a href=" index-categ.php?categ=all-items">All items </a> </li>
                                <li> <a href="index-categ.php?categ=self-care">Self-care</a> </li>
                                <li><a href="index-categ.php?categ=beauty">Beauty</a> </li>
                                <li> <a href="index-categ.php?categ=electronics">Electronics</a> </li>
                                <li> <a href="index-categ.php?categ=supermarket">Supermarket</a> </li>
                                <li> <a href="index-categ.php?categ=sports">Sports</a> </li>
                                <li> <a href="index-categ.php?categ=laptops">Laptops</a> </li>
                                <li> <a href="index-categ.php?categ=toys">Toys</a> </li>
                                <li> <a href="index-categ.php?categ=kitchen">Kitchen</a> </li>
                                <li> <a href="index-categ.php?categ=baby">Baby</a> </li>
                                <li> <a href="index-categ.php?categ=mobiles">Mobiles</a> </li>
                                <li> <a href="index-categ.php?categ=fashion">Fashion</a> </li>
                                <li> <a href="index-categ.php?categ=instruments">Instruments</a> </li>
                                <li> <a href="index-categ.php?categ=books">Books</a> </li>
                                <li> <a href="index-categ.php?categ=others">Others</a> </li>
                            </ul>

                        </div>
                        <div class="categories">

                            <div class="dropdown">

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

                        <div class="aside  ">

                            <div class="categories">
                                <h5>Categories</h5>
                                <a href="index-categ.php?categ=self-care">Featured</a>
                                <a href="index-categ.php?categ=all-items">All items </a>
                                <a href="index-categ.php?categ=self-care">Self-care</a>
                                <a href="index-categ.php?categ=beauty">Beauty</a>
                                <a href="index-categ.php?categ=electronics">Electronics</a>
                                <a href="index-categ.php?categ=supermarket">Supermarket</a>
                                <a href="index-categ.php?categ=sports">Sports</a>
                                <a href="index-categ.php?categ=laptops">Laptops</a>
                                <a href="index-categ.php?categ=toys">Toys</a>
                                <a href="index-categ.php?categ=kitchen">Kitchen</a>
                                <a href="index-categ.php?categ=baby">Baby</a>
                                <a href="index-categ.php?categ=mobiles">Mobiles</a>
                                <a href="index-categ.php?categ=fashion">Fashion</a>
                                <a href="index-categ.php?categ=instruments">Instruments</a>
                                <a href="index-categ.php?categ=books">Books</a>
                                <a href="index-categ.php?categ=others">Others</a>
                            </div>


                            <div class="categories mt-5">
                                <h5>Sort by</h5>
                                <a href="">Offered</a>
                                <a href="">Wanted</a>
                            </div>

                        </div>

                    </div>

                </div>


                <div class="main w-100 ps-3 pe-3 ps-lg-0 pe-lg-0">

                    <p class="mb-1 mb-lg-2 featured-title2 mt-3 mt-lg-3">All | <span class="page-count"> 1 of 1</span>
                    </p>


                    <!-- USE GRID -->
                    <div class="all-items container">




                        <div class="row row-cols-md-3 row-cols-1 ps-1 pe-1 ps-lg-0 pe-lg-0 w-100 ">

                            <?php

                            require_once('private/includes/connection.php');
                            require_once('private/includes/functions.php');

                            if ($categoryName ==  $allItem) {

                                $getPostbyCategoryQuery = "SELECT * FROM posts ORDER BY isFeatured = true";
                            } else {
                                $getPostbyCategoryQuery = "SELECT * FROM posts WHERE category = '$categoryName' ORDER BY isFeatured = true";
                            }

                            $getPostResult = mysqli_query($connection, $getPostbyCategoryQuery);

                            while ($row = mysqli_fetch_assoc($getPostResult)) {


                                $post_id = $row['post_id'];
                                $title = $row['title'];
                                $category = ucfirst($row['category']);
                                $status = $row['status'];
                                $cover_img = $row['cover-img'];


                            ?>



                            <div class="item2 col  ">
                                <img src="images/uploaded-imgs/<?php echo $cover_img ?>" alt="">


                                <div class="item-details mt-3">
                                    <p class="item-categ"><?php echo $category ?></p>
                                    <p class="item-name"><?php echo $title ?></p>
                                    <p class="">Status: <span
                                            class="item-status <?php echo checkItemisOffered($status) ?> "><?php echo ucfirst($status) ?></span>
                                    </p>
                                </div>
                            </div>







                            <?php }

                            ?>






                        </div>






                    </div>




                    <div
                        class="pages d-flex align-content-center justify-content-center  align-items-center justify-items-center">

                        <div class="container d-flex align-content-center justify-content-center ">
                            <div aria-label="page navigation ">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <i class="bi bi-chevron-left"></i>

                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <i class="bi bi-chevron-right"></i>

                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>





        </div>


        <div class="bot-ad text-center m-1 m-lg-5 ">
            <img src=" images/home/ad2.png" />
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


        <script src="js/index.js"></script>

    </div>




</body>

</html>