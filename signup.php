<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/signup.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />



</head>

<body>

    <!-- outside container -->
    <div class="container-fluid">

        <!-- inside container -->
        <div class="row">

            <!-- right side  -->
            <div class="col-sm-6 p-10">
            <div class="logo logo1">
                <img src="images/final-logo.png" id="logo1" alt="" srcset="">
            </div>
                <div class="centerer">
                    <h1 class="login-title">SIGN UP</h1>
                    <div class="log-in-container d-flex justify-content-center">
                        <form action="" class="login-form" method="post">


                            <input type="email" name="email" placeholder="Email" class="textbox-login">

                            <input type="text" name="firstName" placeholder="First name" class="textbox-login">


                            <input type="text" name="lastName" placeholder="Last name" class="textbox-login">

                            <input type="text" name="username" placeholder="Username" class=" textbox-login">



                            <div class="pass-container w-100">
                                <input type="password" name="password" placeholder="Password" class="textbox-login"
                                    id="password1">
                                <i class=" bi bi-eye-slash togglePass" id="togglePassword1"></i>
                            </div>


                            <div class="pass-container w-100">
                                <input type="password" name="c-password" placeholder="Re-type Password"
                                    class="textbox-login" id="password2">
                                <i class=" bi bi-eye-slash togglePass" id="togglePassword2"></i>
                            </div>

                            <?php require_once('private/signup-data.php') ?>


                            <button type="submit" value="" class="btn-login" name="signUp">
                                SIGN UP
                            </button>
                        </form>

                    </div>
                    <div class="text-login">Don't have an account? <a href="login.php" class="">Sign in here!</a></div>
                </div>
            </div>

            <!-- right side -->
            <div class="col-sm-6 p-0 login-face-con">
                <img src="images/reg_face.png" alt="" class="login-face">
            </div>

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
        </script>
    </div>


</body>

</html>