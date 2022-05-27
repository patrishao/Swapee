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
        <div class="search-box">
            <input type="search" placeholder="Search...">
            <span class="fa fa-search"></span>
        </div>

        <!-- navbar menu -->
        <ul>
            <li><a class="a" href="index.php">Home</a></li>
            <li><a class="a" href="#">Notifications</a></li>
            <li><a class="a" href="#">Messages</a></li>
            <li><a class="a" href="profile.php">Profile</a></li>
        </ul>

        <label for="check" class="bar">
            <span class="fa fa-bars" id="bars"></span>
            <span class="fa fa-times" id="times"></span>
        </label>
    </nav>
</body>
</html>