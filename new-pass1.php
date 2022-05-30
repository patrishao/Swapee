<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Password Setup</title>
        <link rel="stylesheet" type="text/css" href="css/newpass.css" />

    </head>

    <body>
    <?php include 'navbar.php'; ?>
    
        <div class="container">

        <div class="headings">
            <h1 class="page-title">Create new password</h1>
            <p class="sub-heading">Create a new password that is at least 6 characters long. A strong password is combination of letters, numbers, and punctuation marks.</p>
        </div>

        <article>



            <div class="center-form">
                <form action="<?php echo '"http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/new-pass.php?code=$code' ?>" method="post">
                    <div class="move-text-area">
                    <input class="email input" type="password" name="password" placeholder="New password" /> <br>
                    <input class="email input" type="password" name="confirm" placeholder="Confirm password" /> <br>
                    </div>
                    <div class="center-button">
                        <button class="back">Cancel</button>

                        <input type="submit" name="update" value="Update password" />


                    </div>



                </form>

            </div>

                </article>

        </div>

    </body>

    </html>