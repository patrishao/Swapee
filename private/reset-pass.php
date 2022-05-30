<?php

require_once 'private/includes/connection.php';



// only allowing authentication when a code exists 
// THIS SHOULD WORK WELL IF WEBSITE IS HOSTED
// exit to the page if the code is not found
if (!isset($_GET["code"])) {
    exit("Sorry, the page can't be found!");
} else {
    // getting the code to see if there is a row in the table that matches the code
    $code = $_GET["code"];

    // getting the email based on the code
    $getEmail = mysqli_query($connection, "SELECT email FROM resetpassword WHERE code = '$code'");

    if (mysqli_num_rows($getEmail) == 0) {
        exit("Sorry, the page can't be found!");
    }
}


if (isset($_POST['update'])) {
    $password = $_POST['newPass'];
    $confirm = $_POST['confirm'];


    $password = mysqli_real_escape_string($connection, $password);
    $confirm = mysqli_real_escape_string($connection, $confirm);

    if (empty($password) || empty($confirm)) {
        echo '<div class="alert alert-danger" role="alert">
Please fill out all the input fields.
</div>';
    } else {
        if ($confirm != $password) {
            echo '<div class="alert alert-danger" role="alert">
          Password doesnt match.
            </div>';
        } else {

            $emailRow = mysqli_fetch_array($getEmail);
            $email = $emailRow['email'];




            // making the users create a strong password
            if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)) {
                echo '<div class="alert warning-alert2">
                  <h3>Password should atleast be a minimun of 8 characters and should contain one upper case, one lower case, one
                        digit, and one special character.</h3>
                    </div>';
            } else {

                // getting email with same code in resetpassword table

                // starting the query to update
                $updateQuery = "UPDATE users SET ";

                // hashing the password first
                $hashed_password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));

                // updating the passsword
                $updateQuery .= "password = '{$hashed_password}' ";
                $updateQuery .= "WHERE email = '{$email}'";


                // adding the updated contents to the database
                if (!mysqli_query($connection, $updateQuery)) {
                    echo mysqli_error($connection);
                }

                $deleteCode = mysqli_query($connection, "DELETE FROM resetpassword WHERE code = '$code'");
                // if everything was successful, delete the code from database

                echo ("<script>
location.href = 'login.php?status=changed'
</script>");

                // directing to profile page

            }
            // if not same, error


        }
    }
}