<?php



include 'private/includes/connection.php';

// getting email from user then checking if the email exists
if (isset($_POST['submit'])) {

    $email = $_POST['email'];

    if (!empty($email)) {


        $getEmailQuery = "SELECT * FROM users WHERE email = '$email'";

        $getEmailResult = mysqli_query($connection, $getEmailQuery);


        while ($row = mysqli_fetch_array($getEmailResult)) {

            $email2 = $row['email'];
            $firstName = $row['first_name'];
            $secondName = $row['last_name'];
        }


        if ($email == $email2) {


            #Unfortunately, as of May 30, 2022, to send email form google or yahoo, a different method must be done using PHP mailer and its not possible anymore to send if its a localhost.
            #so it's better to just send an email using the php mail functiuon once this website is hosted.

            // THIS IS TO SEND EMAIL WHEN WEBSITE IS HOSTED
            // generating a code
            $code = uniqid(true);

            // inserting the code and emails to the table
            $query = mysqli_query($connection, "INSERT INTO resetpassword (code, email) VALUES ('$code', '$email')");

            if (!$query) {
                echo mysqli_error($connection);
            }

            // $url = "http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/reset-pass.php?code=$code";
            // $to = "$email";
            // $subject = "You're a few steps from recovering your account!";
            // $txt = 'To change your password, please click on the link below. <a href="$url"> Reset password<a>';
            // $headers = "From: Swapee" . "\r\n" .

            //     mail($to, $subject, $txt, $headers);

            header("Location: reset-pass.php?code=$code");
        }
        // }
    } else {
        echo '<div class="alert alert-danger" role="alert">
        Please enter an email.
         </div>';
    }
}