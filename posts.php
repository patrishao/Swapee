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

    <?php include 'navbar.php'; ?>

    <div class="back-container">
        <a href="index.php" class="back-link"><img src="images/icons/back-icon.svg" alt="">Back</a>
    </div>

    <div class="main-container">


        <!-- CHANGES BY CHAY -->


        <div class="pic-holder ps-4 pe-4">




            <div class="prev-arrow arrow">
                <button>left</button>
            </div>

            <div class="container photo-container p-5">
                <img src="images/uploaded-imgs/chanelmakeup.jpg" class="photos">
                <img src="images/uploaded-imgs/diorlipstic.jpg" class="photos">
            </div>

            <div class="right-arrow arrow">
                <button>right</button>
            </div>
        </div>




        <div class="posts-container ">

            <div class="text-container">

                <div class="title-cont">
                    <p class="name-of-post">Detergent Essentials</p>
                    <p class="name-of-post-subtext">Supermarket</p>
                </div>

                <div class="desc-cont">
                    <p class="desc-title">Description</p>
                    <p class="desc-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis vehicula
                        velit. Suspendisse potenti. Ut tempor sem et pellentesque dapibus. </p>
                </div>

                <div class="seller-cont">
                    <p class="seller-title">Seller Details</p>
                    <div class="seller-desc">
                        <img src="images/pfp-pl.png" class="prof-pic" alt="" srcset="">
                        <div class="seller-desc2">
                            <p class="prof-name">Kaya Todei</p>
                            <p class="prof-user">@dimosyur</p>
                            <p class="prof-det"><img src="images/icons/loc-icon.svg" alt=""> Sharjah <img
                                    src="images/icons/bi_star.svg" alt=""> 2.1/5</p>
                        </div>
                    </div>
                </div>

                <div class="status-cont">
                    <p class="status-title">Status: </p>
                    <p class="status-stat">&nbsp Wanted</p>
                </div>

                <div class="send-cont">


                    <p class="send-title">Send seller a message</p>
                    <form class="send-message" action="" method="POST">
                        <input class="send-input" type="text" name="sendquestion" value=""
                            placeholder="Hi, is this available?"> <br>
                        <input class="send-btn" type="submit" name="send" value="Send">
                    </form>
                </div>


            </div>
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