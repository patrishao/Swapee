<?php

require_once('private/includes/functions.php');
require_once('private/includes/connection.php');

if (isset($_POST['signUp'])) {

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPass = $_POST['c-password'];

    $randomPfp = randomPfp();


    // calling the function cleanInput to escape strings

    $firstName = cleanInput($connection, $firstName);
    $lastName = cleanInput($connection, $lastName);
    $username = cleanInput($connection, $username);
    $email = cleanInput($connection, $email);
    $password = cleanInput($connection, $password);
    $confirmPass = cleanInput($connection, $confirmPass);


    // making the first letter of the text the only capital letter
    $firstName = strtolower($firstName);
    $firstName =  ucfirst($firstName);

    $lastName = strtolower($lastName);
    $lastName =  ucfirst($lastName);

    // making the username in all lowercase
    $username = strtolower($username);


    // checking if all the input field is filled 
    if (empty($email) || empty($username) || empty($firstName) || empty($lastName) || empty($password) || empty($confirmPass)) {

        echo '<div class="alert alert-danger" role="alert">
        Please fill out all the input fields.
      </div>';
    } else {

        /* calling out the function and checking if the email
        already exists in the database
        */
        if (checkIfValueExist($connection, "email", $email)) {
            echo '<div class="alert alert-danger" role="alert">
             The email already exists. Please try another one.
            </div>';
        }
        // check if username is taken
        else if (checkIfValueExist($connection, "username", $username)) {
            echo '<div class="alert alert-danger" role="alert">
             The username is taken. Please try another one.
            </div>';
        } else {
            // if everything is unique, continue

            if ($password != $confirmPass) {

                echo '<div class="alert alert-danger" role="alert">
               Passwords do not match.
              </div>';
            } else {


                // requiring users to create a strong pasword using preg match condition
                if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)) {
                    echo '<div class="alert alert-danger" role="alert">
                Password should atleast be a minimun of 8 characters and should contain one upper case, one lower case, one digit, and one special character.
            </div>';
                } else {

                    // hashing the password using BCRYPT before sending it to database
                    $password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));


                    // finally inserting the data to the database
                    $insertQuery = "INSERT INTO users (first_name, last_name, username, password, email, profile_pic)  VALUES ('$firstName', '$lastName', '$username', '$password',
                '$email', '$randomPfp')";

                    // checking if the query failed
                    $register_user_query = mysqli_query($connection, $insertQuery);
                    if (!$register_user_query) {
                        die("QUERY FAILED " . mysqli_error($connection));
                    } else {
                        echo ("<script>location.href='login.php?status=success'</script>");
                    }
                }
            }
        }
    }
}