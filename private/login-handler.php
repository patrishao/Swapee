<?php

require_once('private/includes/functions.php');
require_once('private/includes/connection.php');

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // escaping the string by calling the function i created to clean it

    $email = cleanInput($connection, $email);
    $password  = cleanInput($connection, $password);


    if (empty($email) || empty($password)) {
        echo '<div class="alert alert-danger" role="alert">
        Please fill out all the input fields.
      </div>';
    } else {

        // created a query to get all data from users, this is to check if a user already exists to database
        $getusersData = "SELECT * FROM users WHERE email ='{$email}' ";
        $get_all_users_query = mysqli_query($connection, $getusersData);

        if (mysqli_num_rows($get_all_users_query) >= 1) {


            // start the query and get the results of that specific email found
            while ($row = mysqli_fetch_array($get_all_users_query)) {

                $db_id = $row['user_id'];
                $db_email = $row['email'];
                $db_firstName = $row['first_name'];
                $db_lastName = $row['last_name'];
                $db_password = $row['password'];
                $db_bio = $row['bio'];
                $db_profile_pic = $row['profile_pic'];
                $db_rating = $row['rating'];
                $db_username = $row['username'];
                $db_location = $row['location'];
            }

            // checking if the hashed password matches the given password
            if (password_verify($password, $db_password)) {

                session_start();

                // assigning a session so it can be pulled later
                $_SESSION['userID'] = $db_id;
                $_SESSION['email'] = $db_email;
                $_SESSION['username'] = $db_username;
                $_SESSION['firstName'] = $db_firstName;
                $_SESSION['lastName'] =  $db_lastName;
                $_SESSION['bio'] =  $db_bio;
                $_SESSION['profPic'] = $db_profile_pic;
                $_SESSION['rating'] = $db_rating;
                $_SESSION['location'] = $db_location;



                // sending a data that the user is logged in
                echo ("<script>location.href='index.php?status=loggedin'</script>");
                header('Cache-Control: no-cache, no-store, must-revalidate');
            } else {
                echo '<div class="alert alert-danger" role="alert">
               Password is incorrect.
              </div>';
            }
        } else {
            echo '<div class="alert alert-danger" role="alert">
           The email does not exist.
          </div>';
        }
    }
}