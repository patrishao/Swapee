<?php






?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" type="text/css" href="css/newpass.css" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />



</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="container">

        <div class="headings">
            <h1 class="page-title">Change your password</h1>
            <p class="sub-heading">Create a new password that is at least 6 characters long. A strong password is
                combination of letters, numbers, and punctuation marks.</p>
        </div>

        <article>



            <div class="center-form">
                <form action="" method="post">
                    <div class="move-text-area">

                        <div class="pw-container">
                            <input class="email input" id="password1" type="password" name="oldPass"
                                placeholder="Current password" />
                            <i class="bi bi-eye-slash togglePass" id="togglePassword1"></i>
                        </div>
                        <br>
                        <div class="pw-container">
                            <input class="email input" id="password2" type="password" name="newPass"
                                placeholder="New password" id="password2" /> <br>
                            <i class="bi bi-eye-slash togglePass" id="togglePassword2"></i>
                        </div>
                        <div class="pw-container">
                            <input class="email input" id="password3" type="password" name="confirm"
                                placeholder="Confirm password" id="password3" />
                            <i class="bi bi-eye-slash togglePass" id="togglePassword3"></i>
                            <br>
                        </div>
                    </div>

                    <?php require_once 'private/includes/change-pass.php' ?>
                    <div class="center-button">
                        <button class="back">Cancel</button>

                        <input type="submit" name="update" value="Update password" />


                    </div>



                </form>

            </div>

        </article>

    </div>

    <script>
    const togglePassword = document.querySelector("#togglePassword1");
    const password = document.querySelector("#password1");

    togglePassword.addEventListener("click", function() {
        // toggle the type attribute
        const type = password.getAttribute("type") === "password" ? "text" : "password";
        password.setAttribute("type", type);

        // toggle the icon
        this.classList.toggle("bi-eye");
    });

    const togglePassword2 = document.querySelector("#togglePassword2");
    const password2 = document.querySelector("#password2");

    togglePassword2.addEventListener("click", function() {
        // toggle the type attribute
        const type = password2.getAttribute("type") === "password" ? "text" : "password";
        password2.setAttribute("type", type);

        // toggle the icon
        this.classList.toggle("bi-eye");
    });

    const togglePassword3 = document.querySelector("#togglePassword3");
    const password3 = document.querySelector("#password3");

    togglePassword3.addEventListener("click", function() {
        // toggle the type attribute
        const type = password3.getAttribute("type") === "password" ? "text" : "password";
        password3.setAttribute("type", type);

        // toggle the icon
        this.classList.toggle("bi-eye");
    });
    </script>

</body>

</html>