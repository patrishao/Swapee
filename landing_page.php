<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>Swapee</title>

</head>

<body>



    <section id="section1">
        <div class="container">
            <!-- logo and brand name -->
            <header class="head my-3">
                <nav class="navbar navbar-expand-lg navbar-light head__custom-nav">
                    <a class="navbar-brand d-flex align-items-center" href="#">
                        <img src="images/logo-M.png">
                        <span>SWAPEE</span>
                    </a>

                    <!-- menu button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                        <span><img src="images/menu.png" alt=""></span>
                    </button>

                    <!-- navigation bar -->
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#section1">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#section2">SERVICES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#section3">FEATURES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#section4">TEAM</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link join-us" style="color: white; background-color: #FEB005;"
                                    href="login.php">JOIN US</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
        </div>
    </section>


    <!-- HOME -->
    <div class="container">
        <div class="row custom-section d-flex align-items-center">
            <div class="col-12 col-lg-4">
                <h2>Why shop, </h2>
                <h3>when you can swap online?</h3>
                <p>Swapping old stuff you don't need through a dedicated website has never been easier, just select an
                    item and swap away

                </p>
                <a href="index.php">Browse Items</a>
            </div>
            <div class="col-12 col-lg-8">
                <img src="images/home_icon.png" alt="Swapee banner">

            </div>
        </div>
    </div>

    <!-- SERVICES -->
    <section id="section2">
        <div class="container">
            <div class="row custom-section d-flex align-items-center">

                <div class="col-12 col-lg-8 p-5">
                    <img src="images/sevices2.png" alt="Swapee banner">
                </div>

                <div class="col-12 col-lg-4">
                    <h3>Communicate with fellow barterers</h3>
                    <p>Swapee provides a bartering experience like no other, with our messaging and rating system, it
                        allow users
                        all around the globe to
                        converse
                        and swap their items smoothly.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FEATURES -->
    <section id="section3">
        <div class="container">
            <div class="row custom-section d-flex align-items-center">
                <div class="col-12 col-lg-4">
                    <h3>Just keep swiping!</h3>
                    <p>The more you swipe for other options, the more chances you get to see good deals! A golden
                        opportunity that Swapee gives to their users!</p>
                </div>
                <div class="col-12 col-lg-8">
                    <img src="images/services_icon.png" alt="Swapee banner">

                </div>
            </div>
        </div>
    </section>

    <!-- TEAM -->
    <section id="section4">
        <div class="container mt-5">

            <div id="team-head" class="mt-5 pt-5">
                <h2>TEAM</h2>
            </div>

            <div class="team">
                <!-- patrisha -->
                <div class="member">
                    <div class="profile"><img src="images/pat.jpeg" alt="" srcset=""></div>
                    <div id="description">
                        <h6>Patrisha Ortigas</h6>
                        <p>Backend Developer</p>
                    </div>
                </div>

                <!-- carter -->
                <div class="member">
                    <div class="profile"><img src="images/carterino.jpeg" alt="" srcset=""></div>
                    <div id="description">
                        <h6>Trisha Catis</h6>
                        <p>Frontend Developer</p>
                    </div>
                </div>

                <!-- gabby -->
                <div class="member">
                    <div class="profile"><img src="images/gabby.jpeg" alt="" srcset=""></div>
                    <div id="description">
                        <h6>Alysxandra Reyes</h6>
                        <p>Frontend Developer</p>
                    </div>
                </div>

                <!-- ruth -->
                <div class="member">
                    <div class="profile"><img src="images/ruth.jpeg" alt="" srcset=""></div>
                    <div id="description">
                        <h6>Ruth Amurao</h6>
                        <p>Frontend Developer</p>
                    </div>
                </div>

                <!-- bianca -->
                <div class="member">
                    <div class="profile"><img src="images/biancs.jpeg" alt="" srcset=""></div>
                    <div id="description">
                        <h6>Bianca Dalangin</h6>
                        <p>Web Designer</p>
                    </div>
                </div>

                <!-- sarai -->
                <div class="member">
                    <div class="profile"><img src="images/sari.jpeg" alt="" srcset=""></div>
                    <div id="description">
                        <h6>Sarai Carreon</h6>
                        <p>Web Designer</p>
                    </div>
                </div>

            </div>

        </div>
    </section>


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
</body>

</html>