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


     <!-- animate.css -->

     <!-- css -->

     <link rel="stylesheet" href="css/home.css?version=51">
 </head>

 <body>


     <?php include_once 'navbar.php' ?>

     <?php

        // getting the category named and sort that was passed on the previous page
        $categoryName = $_GET['categ'];


        if (isset($_GET['sort'])) {
            $sort = $_GET['sort'];
        } else {
            $sort = "";
        }




        $allItem = "all-items";



        ?>


     <div class="body">

         <!-- title -->
         <div class="title-categ position-relative" id="categ">


             <script>
             document.getElementById("categ").style.backgroundImage =
                 "url('images/home/<?php echo "header_" . $categoryName  ?>.png') ";
             </script>


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

             <img src="images/home/topad2.png" alt="" class="">

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
                                 <li><a href=" index-categ.php?categ=all-items#item">Featured Items</a> </li>
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

                             <div class="dropdown">

                                 <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                     data-toggle="dropdown" aria-expanded="false">
                                     Sort by
                                 </a>
                                 <ul class="dropdown-menu  " aria-labelledby="dropdownMenuLink">

                                     <li> <a
                                             href="index-categ.php?categ=<?php echo $categoryName ?>&sort=offered#item">Offered</a>
                                     </li>
                                     <li>

                                         <a
                                             href="index-categ.php?categ=<?php echo $categoryName ?>&sort=wanted#item">Wanted</a>
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
                                 <a href="index-categ.php?categ=featured#item">Featured</a>
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


                             <div class="categories mt-5">
                                 <h5>Sort by</h5>
                                 <a
                                     href="index-categ.php?categ=<?php echo $categoryName ?>&sort=offered#item">Offered</a>
                                 <a href="index-categ.php?categ=<?php echo $categoryName ?>&sort=wanted#item">Wanted</a>
                             </div>

                         </div>

                     </div>

                 </div>


                 <?php require_once('private/includes/connection.php');
                    require_once('private/includes/functions.php');

                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                    } else {
                        $page = "";
                    }



                    // find page 1
                    if ($page == "" || $page == 1) {
                        $page_1 = 0;
                    } else {
                        $page_1 = ($page * 9) - 9;
                    }

                    // predefining the variable
                    $showFeatured = false;

                    // creating multiple query based on the conditions but sorted by the recnt featured items to most recent posts.

                    // if the category is all-item, show all the posts

                    if ($categoryName ==  $allItem) {

                        // checks if a user sorted the items, and if it is, do a query where it finds items that is offered or wanted
                        if (empty($sort)) {
                            $getPostbyCategoryQuery = "SELECT * FROM posts WHERE hasBeenSwapped = 'no' ORDER BY isFeatured DESC, post_id DESC   LIMIT $page_1,9";
                            $getTotalPostbyCategoryQuery = "SELECT * FROM posts WHERE hasBeenSwapped = 'no'";
                        } else {
                            $getPostbyCategoryQuery = "SELECT * FROM posts WHERE status = '$sort' AND hasBeenSwapped = 'no' ORDER BY isFeatured DESC, post_id DESC  LIMIT $page_1,9";
                            $getTotalPostbyCategoryQuery = "SELECT * FROM posts WHERE status = '$sort' AND hasBeenSwapped = 'no'";
                        }
                    }
                    // if the category is featured, show only the featured items
                    else if ($categoryName == "featured") {
                        if (empty($sort)) {
                            $getPostbyCategoryQuery = "SELECT * FROM posts WHERE isFeatured = true AND hasBeenSwapped = 'no' ORDER BY post_id DESC LIMIT $page_1,9   ";
                            $getTotalPostbyCategoryQuery = "SELECT * FROM posts WHERE isFeatured = true AND hasBeenSwapped = 'no' ";
                        } else {
                            $getPostbyCategoryQuery = "SELECT * FROM posts WHERE isFeatured = true AND status = '$sort' ORDER BY post_id DESC LIMIT $page_1,9   ";
                            $getTotalPostbyCategoryQuery = "SELECT * FROM posts WHERE isFeatured = true AND status = '$sort' AND hasBeenSwapped = 'no'  ";
                        }



                        $showFeatured = true; //to set the count 


                    } else {

                        // else, show the category based on what the user shows

                        if (empty($sort)) {
                            $getPostbyCategoryQuery = "SELECT * FROM posts WHERE category = '$categoryName'  ORDER BY isFeatured DESC, post_id DESC  LIMIT $page_1,9";
                            $getTotalPostbyCategoryQuery = "SELECT * FROM posts WHERE category = '$categoryName'";
                        } else {
                            $getPostbyCategoryQuery = "SELECT * FROM posts WHERE status = '$sort' AND category = '$categoryName'   ORDER BY isFeatured DESC, post_id DESC  LIMIT $page_1,9";
                            $getTotalPostbyCategoryQuery = "SELECT * FROM posts WHERE status = '$sort' AND category = '$categoryName' ";
                        }
                    }




                    $getPostResult = mysqli_query($connection, $getPostbyCategoryQuery);
                    $getTotalPostResult = mysqli_query($connection, $getTotalPostbyCategoryQuery);
                    // count all number of rows for pagination
                    $count = mysqli_num_rows($getTotalPostResult);

                    // get total count befoure rounding to check if its empty
                    $count2  = $count;

                    // rounding since the result will show a float

                    if (!$showFeatured) {
                        $count = ceil($count / 9);
                    } else {
                        $count = ceil($count / 9);
                    } ?>

                 <div class="main w-100 ps-3 pe-3 ps-lg-0 pe-lg-0">

                     <?php

                        $pageCheck =  empty($page) ? "1" : $page;

                        if ($count2 != 0) { ?>



                     <p class="mb-1 mb-lg-2 featured-title2 mt-3 mt-lg-3">All | <span class="page-count">
                             <?php echo $pageCheck . " of " . $count; ?></span>
                     </p>

                     <?php } ?>



                     <div class="all-items container">



                         <div class="row row-cols-md-3 row-cols-1 ps-1 pe-1 ps-lg-0 pe-lg-0 w-100 ">

                             <?php



                                while ($row = mysqli_fetch_assoc($getPostResult)) {


                                    $post_id = $row['post_id'];
                                    $title = $row['title'];
                                    $category = ucfirst($row['category']);
                                    $status = $row['status'];
                                    $cover_img = $row['coverImg'];
                                    $isFeatured = $row['isFeatured'];


                                ?>



                             <div class="item2 col  " id="item">
                                 <a href="posts.php?p_id=<?php echo $post_id ?>" class="linkToPost">
                                     <?php if ($isFeatured) { ?>
                                     <div class="featured-container">
                                         <svg xmlns="http://www.w3.org/2000/svg" class="star" width="30" height="30"
                                             viewBox="0 0 44 39" fill="none">
                                             <path
                                                 d="M42.5779 13.733L29.3875 11.9537L23.4911 0.85833C23.33 0.554545 23.0651 0.308624 22.7378 0.159143C21.917 -0.216971 20.9195 0.0964574 20.5091 0.85833L14.6127 11.9537L1.42234 13.733C1.05868 13.7812 0.726193 13.9404 0.471633 14.1815C0.163885 14.475 -0.00569854 14.87 0.000146221 15.2796C0.00599098 15.6892 0.186786 16.0799 0.502804 16.3658L10.0462 25.002L7.79152 37.1968C7.73865 37.4804 7.77247 37.7722 7.88915 38.0389C8.00583 38.3057 8.20069 38.5367 8.45165 38.7059C8.70261 38.8751 8.99963 38.9756 9.30901 38.9961C9.61839 39.0166 9.92776 38.9562 10.202 38.8218L22.0001 33.0643L33.7982 38.8218C34.1203 38.9809 34.4943 39.0339 34.8528 38.9761C35.7567 38.8314 36.3645 38.0358 36.2087 37.1968L33.954 25.002L43.4974 16.3658C43.7572 16.1295 43.9286 15.8209 43.9805 15.4834C44.1208 14.6395 43.487 13.8584 42.5779 13.733Z"
                                                 fill="#FEB005" />
                                         </svg>
                                     </div>

                                     <?php } ?>
                                     <img src="images/uploaded-imgs/<?php echo $cover_img ?>" alt="">


                                     <div class="item-details mt-3">
                                         <p class="item-categ"><?php echo $category ?></p>
                                         <p class="item-name"><?php echo $title ?></p>
                                         <p class="">Status: <span
                                                 class="item-status <?php echo checkItemisOffered($status) ?> "><?php echo ucfirst($status) ?></span>
                                         </p>
                                     </div>
                                 </a>
                             </div>







                             <?php }

                                ?>






                         </div>






                     </div>







                     <?php if ($count2 != 0) { ?>
                     <div
                         class="pages d-flex align-content-center justify-content-center  align-items-center justify-items-center">




                         <div class="container d-flex align-content-center justify-content-center ">
                             <div aria-label="page navigation ">
                                 <ul class="pagination">


                                     <!-- set up to back page, by decreasing the page (from the url) by one everytime it's pressed -->
                                     <?php $prevPage = (int) $page - 1; ?>


                                     <!--  if the page is equal to 0 or 1 disable the previous button because there wont be a previous page -->
                                     <li class="page-item   <?php
                                                                if ($page <= 1) {
                                                                    echo "disabled";
                                                                }; ?>">
                                         <a class="page-link"
                                             href="<?php echo "index-categ.php?categ=$categoryName&amp;page=$prevPage&amp;sort=$sort" ?>"
                                             aria-label=" Previous">
                                             <i class="bi bi-chevron-left   <?php
                                                                                if ($page <= 1) {
                                                                                    echo "disabled";
                                                                                }; ?> "></i>

                                         </a>
                                     </li>




                                     <?php for ($i = 1; $i <= $count; $i++) {


                                            ?>

                                     <!-- sending data to indicate what page user has pressed -->
                                     <li class="page-item"><a <?php if ($page == $i) echo 'style="color:#454545;"'; ?>
                                             class="page-link "
                                             href="<?php echo "index-categ.php?categ=$categoryName&amp;page=$i&amp;sort=$sort" ?>"><?php echo $i; ?></a>
                                     </li>

                                     <?php } ?>


                                     </li>

                                     <!-- redirecting users to next page by adding 1 to the page -->

                                     <?php $nextPage = (int) $page + 1; ?>

                                     <li class="page-item <?php
                                                                if ($page >= $count) {
                                                                    echo "disabled";
                                                                }; ?> ">
                                         <a class="page-link"
                                             href=" <?php echo "index-categ.php?categ=$categoryName&amp;page=$nextPage&amp;sort=$sort" ?>"
                                             aria-label="
                                            Next">
                                             <i class="bi bi-chevron-right <?php
                                                                                if ($page >= $count) {
                                                                                    echo "disabled";
                                                                                }; ?>"></i>

                                         </a>
                                     </li>


                                 </ul>
                             </div>
                         </div>

                     </div>

                     <?php } ?>


                 </div>

             </div>




             <?php if ($count2 == 0) { ?>
             <div
                 class="container d-flex align-content-center justify-content-center  align-items-center justify-items-center">


                 <h5 class="no-post ">
                     No posts available yet.</h5>

                 <?php } ?>

             </div>
         </div>


         <div class=" bot-ad text-center mt-5 m-lg-3 p-5  ">
             <a href="https://rakbank.ae/wps/portal/retail-banking">
                 <img src=" images/home/ad3.jpg" />
             </a>
         </div>


         <!-- Optional JavaScript -->
         <!-- jQuery first, then Popper.js, then Bootstrap JS -->
         <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
             integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
             crossorigin="anonymous">
         </script>
         <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
             integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
             crossorigin="anonymous">
         </script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
             integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
             crossorigin="anonymous">
         </script>


         <script src="js/index.js"></script>

     </div>




 </body>

 </html>