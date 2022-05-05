<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- css -->
    <link rel="stylesheet" href="css/index.css">
</head>

<body>

    <nav> NAVBAR</nav>




    <?php

    // getting the category named that was passed on the previous page
    $categoryName = $_GET['categ'];

    $allItem = "all-items";



    ?>


    <div class="body">

        <!-- title -->
        <div class="title-categ position-relative">


            <div class="container ">

                <p class="category-top-title">Category / <span class="categ-top-type"> <?php


                                                                                        // displaying the category title based on the data obtained in the link
                                                                                        if (strpos($categoryName, $allItem) !== false) {
                                                                                            echo "All items";
                                                                                        } else {
                                                                                            echo $categoryName;
                                                                                        }

                                                                                        ?></span></p>

            </div>




        </div>

        <div class="top-ad text-center m-5 ">

            <img src="images/home/top-ad.png" alt="" class="">

        </div>


        <div class="container  ">

            <!-- main contents -->

            <div class="d-flex">

                <div class="aside ">

                    <div class="categories">
                        <h5>Categories</h5>
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


                <div class="main w-100">

                    <h2 class="mb-3 featured-title">Featured Items</h2>


                    <!-- USE GRID -->
                    <div class="all-items container">


                        <div class="row row-cols-md-3 row-cols-1">

                            <div class="item2 col ">
                                <img src="images/home/item-placeholder.png" alt="">

                                <div class="item-details mt-3">
                                    <p class="item-categ">Books</p>
                                    <p class="item-name">Books of Romains</p>
                                    <p class="">Status: <span class="item-status status-offered">offered</span></p>
                                </div>
                            </div>

                            <div class="item2 col ">
                                <img src="images/home/item-placeholder.png" alt="">

                                <div class="item-details mt-3">
                                    <p class="item-categ">Books</p>
                                    <p class="item-name">Books of Romains</p>
                                    <p class="">Status: <span class="item-status status-offered">offered</span></p>
                                </div>
                            </div>

                            <div class="item2 col">
                                <img src="images/home/item-placeholder.png" alt="">

                                <div class="item-details mt-3">
                                    <p class="item-categ">Books</p>
                                    <p class="item-name">Books of Romains</p>
                                    <p class="">Status: <span class="item-status status-wanted">wanted</span></p>
                                </div>
                            </div>

                            <div class="item2 col">
                                <img src="images/home/item-placeholder.png" alt="">

                                <div class="item-details mt-3">
                                    <p class="item-categ">Books</p>
                                    <p class="item-name">Books of Romains</p>
                                    <p class="">Status: <span class="item-status status-wanted">wanted</span></p>
                                </div>
                            </div>

                            <div class="item2 col">
                                <img src="images/home/item-placeholder.png" alt="">

                                <div class="item-details mt-3">
                                    <p class="item-categ">Books</p>
                                    <p class="item-name">Books of Romains</p>
                                    <p class="">Status: <span class="item-status status-wanted">wanted</span></p>
                                </div>
                            </div>


                            <div class="item2 col">
                                <img src="images/home/item-placeholder.png" alt="">

                                <div class="item-details mt-3">
                                    <p class="item-categ">Books</p>
                                    <p class="item-name">Books of Romains</p>
                                    <p class="">Status: <span class="item-status status-wanted">wanted</span></p>
                                </div>
                            </div>
                        </div>






                    </div>




                    <div class="pages ">

                        <div class="container d-flex align-content-center justify-content-center ">
                            <nav aria-label="Page navigation ">
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
                            </nav>
                        </div>

                    </div>
                </div>

            </div>





        </div>


        <div class="bot-ad text-center m-5 ">
            <img src=" images/home/ad2.png" />
        </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>


    </div>




</body>

</html>