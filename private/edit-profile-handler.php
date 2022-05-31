<?php

include 'private/includes/current-user-details.php';


if (isset($_POST['save'])) {


    // checking if image was replace, if not, set the profile to the previous photo
    if (empty($_FILES["profPhoto"]["name"])) {
        $profilePhoto = $profPic;
    } else {
        $profilePhoto =  uniqid() . $_FILES["profPhoto"]["name"];
        // getting the profile image name with uniqid to generate a unique number for each photo, so it wont be overwritten
    }



    // cleaning input and converting only the first letter of names to capital letter

    // firstname
    $firstNameU = cleanInput($connection, $_POST['firstName']);
    $firstNameU =  strtolower($firstNameU);
    $firstNameU =  ucfirst($firstNameU);

    // lastname
    $lastNameU = cleanInput($connection, $_POST['lastName']);
    $lastNameU =  strtolower($lastNameU);
    $lastNameU =  ucfirst($lastNameU);

    // username
    $usernameU = cleanInput($connection, $_POST['username']);
    $usernameU = strtolower($usernameU);

    // pass and loc
    $passwordU = cleanInput($connection, $_POST['password']);
    $locationU = $_POST['location'];
    $bioU = $_POST['bio'];

    if (empty($locationU)) {
        $locationU = $location;
    }



    if (empty($firstNameU) || empty($locationU) || empty($lastNameU) || empty($usernameU) || empty($passwordU)) {
        echo '<div class="alert alert-danger" role="alert">
            Please fill out all the input fields.
          </div>';
    } else {


        if (strlen($bioU) >= 200) {
            echo '<div class="alert alert-danger" role="alert">
           Your bio is too long! Please shorten it.
          </div>';
        } else {


            // target directory of the image to be uploaded
            $targetLoc = "images/uploaded-imgs/";

            move_uploaded_file($_FILES["profPhoto"]["tmp_name"], $targetLoc . $profilePhoto);


            // getting password of the user
            $passwordQuery = "SELECT password FROM users where user_id = $userID";
            $get_password = mysqli_query($connection, $passwordQuery);
            $row = mysqli_fetch_array($get_password);
            $db_user_password = $row['password'];

            if (password_verify($passwordU, $db_user_password)) {


                // starting the query to update
                $updateQuery = "UPDATE users SET ";
                $updateQuery .= "username = '{$usernameU}',";
                $updateQuery .= "first_name = '{$firstNameU}',";
                $updateQuery .= "last_name = '{$lastNameU}',";
                $updateQuery .= "bio = '{$bioU}',";
                $updateQuery .= "location = '{$locationU}',";
                $updateQuery .= "profile_pic = '{$profilePhoto}' ";
                $updateQuery .= "WHERE user_id = '{$userID}'";

                // adding the updated contents to the database
                if (!mysqli_query($connection, $updateQuery)) {
                    echo mysqli_error($connection);
                }


                // updating the sessions asap
                $_SESSION['username'] = $usernameU;
                $_SESSION['firstName'] = $firstNameU;
                $_SESSION['last_name'] = $lastNameU;
                $_SESSION['bio'] =  $bioU;
                $_SESSION['location'] = $locationU;
                $_SESSION['profPic'] = $profilePhoto;

                echo ("<script>location.href='profile.php'</script>");

                // header("Location: profile.php");

            } else {
                echo '<div class="alert alert-danger" role="alert">
            Incorrect password, please try again.
          </div>';
            }
        }
    }
}