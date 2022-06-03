<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css">
    <script src="https://kit.fontawesome.com/67c66657c7.js"></script>
    <title>Swapee</title>
</head>

<body>


    <input type="checkbox" id="check">
    <nav>

        <!-- icon -->
        <div id="icon">
            <img src="images/logo.png" alt="" srcset="">
        </div>

        <!-- search -->
        <form class="search-box" action="search.php" method="get">
            <input type="search" placeholder="Search..." class="mt-1" name="search">
            <span class="fa fa-search"></span>
        </form>


        <?php  // getting the conversations of user

        require_once 'private/includes/connection.php';
        require_once 'private/includes/functions.php';
        include_once 'private/includes/current-user-details.php';




        $convos = array();

        $getConvosQuery = mysqli_query($connection, "SELECT * FROM messages WHERE user_toID = '$userID'  AND isViewed = 0 ");



        $countnotviewed =  mysqli_num_rows($getConvosQuery);


        while ($row = mysqli_fetch_array($getConvosQuery)) {
            // push wherever the user logged in is
            $user_to_push = $row['user_toID'] != $userID ? $row['user_toID'] : $row['user_fromID'];

            if (!in_array($user_to_push, $convos)) {
                array_push($convos, $user_to_push);
            }
        }



        // echo sizeof($convos);

        ?>




        <div class="navbar">
            <!-- navbar menu -->
            <ul>
                <li><a href="index.php">Home</a></li>




                <?php if (!empty($_SESSION['userID'])) { ?>

                <li class="counter">

                    <?php if ($countnotviewed != 0) { ?>
                    <p class="count"><?php echo $countnotviewed ?></p>
                    <?php } ?>
                    <a href="message.php">Messages</a>
                </li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="private/logout.php">Logout</a></li>
                <?php } else { ?>
                <li><a href="login.php">Login</a></li>
                <?php } ?>
            </ul>
        </div>
        <label for="check" class="bar">
            <span class="fa fa-bars" id="bars"></span>
            <span class="fa fa-times" id="times"></span>
        </label>

    </nav>
</body>

</html>