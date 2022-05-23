<?php


require_once('private/includes/connection.php');
require_once('private/includes/current-user-details.php');

?>

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
    <link rel="stylesheet" href="css/edit-profile.css?version=51">

    <title>Edit Profile</title>
</head>

<body>

    <?php include 'navbar.php'; ?>

    <div class="container">

        <div class="container2">
            <div class="title-edit">
                <h4><b>Edit profile</b></h4>
            </div>


            <div class="acc-details">
                <img src="images/pfp-ph.png" class="edit-pic" alt="" srcset="">
                <div class="usernames">
                    <p class="username1"><?php echo $firstName . " " . $lastName ?><br></p>
                    <p class="username2"><?php echo $username ?>r</p>
                </div>
            </div>

            <div class="acc-settings">

                <form class="pass-form" action="profile.php" method="POST">

                    <div class="editprof-group">
                        <label for="name">NAME</label> <br>
                        <input type="text" name="name" value="<?php echo $firstName ?>"> <br><br>
                    </div>

                    <div class="editprof-group">
                        <label for="username">USERNAME</label> <br>
                        <input type="username" name="user" value="<?php echo $username ?>"> <br><br>
                    </div>

                    <div class="editprof-group">
                        <label for="bio">BIO</label> <br>
                        <textarea name="bio"><?php echo $bio ?></textarea><br><br>
                    </div>

                    <div class="editprof-group">
                        <label for="location">LOCATION</label> <br>
                        <input type="text" name="loc"><?php echo $location; ?><br><br>
                    </div>

                    <div class="buttons">
                        <button class="cancel"><a href="profile.php" class="">Cancel</a></button>
                        <input class="save" type="submit" name="" id="" value="Save"> <br><br>
                    </div>

                </form>

                <br>

            </div>
        </div>

    </div>

</body>

</html>