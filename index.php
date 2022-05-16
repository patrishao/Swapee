<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="css/index.css">
</head>

<body>

    <?php include 'navbar.php';?>


    <div class="body">

        <!-- title -->
        <div class="title  ">


            <div class="container d-flex justify-content-center align-content-center align-items-center ">

                <h1 class="p-5 ">Swap anywhere online!</h1>

                <img src="images/home/top.png" alt="" class="">

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

                            <div class="item col ">
                                <img src="images/home/item-placeholder.png" alt="">

                                <div class="item-details mt-3">
                                    <p class="item-categ">Books</p>
                                    <p class="item-name">Books of Romains</p>
                                    <p class="">Status: <span class="item-status status-offered">offered</span></p>
                                </div>
                            </div>

                            <div class="item col ">
                                <img src="images/home/item-placeholder.png" alt="">

                                <div class="item-details mt-3">
                                    <p class="item-categ">Books</p>
                                    <p class="item-name">Books of Romains</p>
                                    <p class="">Status: <span class="item-status status-offered">offered</span></p>
                                </div>
                            </div>

                            <div class="item col">
                                <img src="images/home/item-placeholder.png" alt="">

                                <div class="item-details mt-3">
                                    <p class="item-categ">Books</p>
                                    <p class="item-name">Books of Romains</p>
                                    <p class="">Status: <span class="item-status status-wanted">wanted</span></p>
                                </div>
                            </div>




                        </div>




                        <div class="row mt-5  row-cols-md-2 row-cols-1 ">

                            <div class="item">
                                <img src="images/home/item-placeholder.png" alt="">

                                <div class="item-details mt-3">
                                    <p class="item-categ">Books</p>
                                    <p class="item-name">Books of Romains</p>
                                    <p class="">Status: <span class="item-status status-offered">offered</span></p>
                                </div>
                            </div>

                            <div class="item  ">
                                <img src="images/home/item-placeholder.png" alt="">

                                <div class="item-details mt-3">
                                    <p class="item-categ">Books</p>
                                    <p class="item-name">Books of Romains</p>
                                    <p class="">Status: <span class="item-status status-offered">offered</span></p>
                                </div>
                            </div>


                        </div>

                    </div>


                    <div class="container text-center mt-5">
                        <button class="see-all">See All</button>
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