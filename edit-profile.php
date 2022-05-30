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
    <?php require_once 'private/includes/connection.php'; ?>
    <?php require_once 'private/includes/functions.php'; ?>


    <div class="container">

        <div class="container2">
            <div class="title-edit">
                <h4><b>Edit profile</b></h4>
            </div>


            <div class="acc-details">
                <div class="prof-pic">
                    <img src="images/uploaded-imgs/<?php echo $profPic; ?>" class="edit-pic" id="profileDisplay" alt=""
                        srcset="">
                    <div class="edit-pic-overlay">
                        <label for="file"><img src="images/icons/edit-prof-pic.png" class="edit-pic-upload" alt=""
                                srcset=""></label>
                    </div>
                </div>

                <div class="usernames">
                    <p class="username1"><?php echo $firstName . " " . $lastName ?><br></p>
                    <p class="username2">@<?php echo $username ?></p>
                </div>
            </div>

            <div class="acc-settings">
                <form class="pass-form" action="" method="POST" enctype="multipart/form-data">

                    <input type="file" id="file" name="profPhoto" onChange="loadFile(event) "
                        accept=" image/png, image/jpeg" hidden>

                    <div class="editprof-group">
                        <label for="name">FIRST NAME</label> <br>
                        <input type="text" name="firstName" value="<?php echo $firstName ?>"> <br><br>
                    </div>

                    <div class="editprof-group">
                        <label for="name">LAST NAME</label> <br>
                        <input type="text" name="lastName" value="<?php echo $lastName ?>"> <br><br>
                    </div>

                    <div class="editprof-group">
                        <label for="username">USERNAME</label> <br>
                        <input type="username" name="username" value="<?php echo $username ?>"><br><br>
                    </div>

                    <div class="editprof-group">
                        <label for="bio">BIO</label> <br>
                        <textarea name="bio" rows="1" placeholder="<?php if (empty($bio)) {
                                                                        echo "No bio yet..";
                                                                    } ?>"><?php echo $bio ?></textarea><br><br>
                    </div>


                    <div class=" editprof-group">
                        <label for="location">LOCATION</label> <br>
                        <div class="editprof-location">
                            <select name="location" id="loc">
                                <option value="<?php echo $location; ?>" selected disabled="true">
                                    <?php if (!empty($location)) {

                                        echo $location;
                                    } ?>
                                </option>
                                <option value="Abu Dhabi">Abu Dhabi</option>
                                <option value="Dubai">Dubai</option>
                                <option value="Sharjah">Sharjah</option>
                                <option value="Ajman">Ajman</option>
                                <option value="Umm Al-Quwain">Umm Al-Quwain</option>
                                <option value="Fujairah">Fujairah</option>
                                <option value="Ras Al Khaimah">Ras Al Khaimah</option>
                            </select>
                        </div>
                    </div>


                    <div class="editprof-group">
                        <label for="co-password">CONFIRM PASSWORD</label> <br>
                        <input type="password" name="password" value=""> <br><br>
                    </div>

                    <?php require_once 'private/edit-profile-handler.php'; ?>

                    <div class="buttons">
                        <button class="cancel"><a href="profile.php" class="">Cancel</a></button>
                        <a class="changePass" href="change-password.php">Change password</a></button>
                        <input class=" save" type="submit" name="save" id="" value="Save"> <br><br>

                    </div>

                </form>

                <br>
            </div>
        </div>

    </div>

    <script>
    // to display the images temporarily
    var loadFile = function(event) {
        var profileDisplay = document.getElementById('profileDisplay');
        profileDisplay.src = URL.createObjectURL(event.target.files[0]);
        profileDisplay.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };

    const tx = document.getElementsByTagName("textarea");
    var value = 0;


    for (let i = 0; i < tx.length; i++) {



        tx[i].setAttribute("style", "height:" + (tx[i].scrollHeight) + "px;overflow-y:hidden;");


        tx[i].addEventListener("input", OnInput, false);





    }

    function OnInput() {


        // if the scroll height is less than the default size
        if (this.scrollHeight <= this.offsetHeight) {

            // reset the height  to default
            this.setAttribute('style', '' + "px;overflow-y:hidden;");
            this.style.height = (this.scrollHeight) + "px";




            // if the scroll height is greater than the default size
        } else {
            this.style.height = this.offsetHeight;
            this.style.height = (this.scrollHeight) + "px";

        }
    }
    </script>
</body>

</html>