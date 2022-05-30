<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Pass</title>
    <link rel="stylesheet" type="text/css" href="css/newpass.css" />

</head>

<body>
    <?php include 'navbar.php'; ?>




    <div class="container">

        <div class="headings">
            <h1 class="page-title">Forgot your password?</h1>
            <p class="sub-heading">Enter your email address and we'll send you a reset password link.</p>
        </div>

        <article>



            <div class="center-form">
                <form action="" method="post">
                    <div class="move-text-area">
                        <input class="email input" type="email" name="email" placeholder="Enter your email" required />
                        <br>
                    </div>
                    <div class="center-button">
                        <button class="back">Cancel</button>


                        <input type="submit" name="submit" value="Enter" />

                        <?php include 'private/forgetpass.php'; ?>

                    </div>



                </form>

            </div>

        </article>

    </div>

</body>

</html>