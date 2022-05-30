<?php

require_once 'private/includes/connection.php';
require_once 'private/includes/current-user-details.php';



if (isset($_POST['update'])) {
    $oldPass = $_POST['oldPass'];
    $password = $_POST['newPass'];
    $confirm = $_POST['confirm'];

    // cleaning password
    $oldPass = mysqli_real_escape_string($connection, $oldPass);
    $password = mysqli_real_escape_string($connection, $password);
    $confirm = mysqli_real_escape_string($connection, $confirm);

    if (empty($password) || empty($confirm) || empty($oldPass)) {
        echo '<div class="alert alert-danger" role="alert">
Please fill out all the input fields.
</div>';
    } else {
        if ($confirm != $password) {
            echo '<div class="alert alert-danger" role="alert">
          Password doesnt match.
            </div>';
        } else {


            $passwordQuery = "SELECT password FROM users WHERE user_id = '$userID'";
            $get_password = mysqli_query($connection, $passwordQuery);

            if (!$get_password) {
                echo mysqli_error($connection);
            }

            $row = mysqli_fetch_array($get_password);
            $db_user_password = $row['password'];


            if (password_verify($oldPass, $db_user_password)) {


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
                    $updateQuery .= "WHERE user_id = '{$userID}'";


                    // adding the updated contents to the database
                    if (!mysqli_query($connection, $updateQuery)) {
                        echo mysqli_error($connection);
                    }

                    // if everything was successful, delete the code from database

                    echo ("<script>
location.href = 'profile.php?status=changed'
</script>");

                    // directing to profile page

                }
                // if not same, error
            } else {

                echo '<div class="alert alert-danger" role="alert">
                Current password is incorrect.
                  </div>';
            }
        }
    }
}