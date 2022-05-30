<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/login.css?">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

</head>

<body>

    <!-- outside container -->
    <div class="container-fluid">

        <!-- inside container -->
        <div class="row">

            <div class="logo">
                <nav>
                    <img src="images/logo.png" id="logo1" alt="" srcset="">
                </nav>

            </div>


            <!-- left side -->
            <div class="col-sm-6 p-0 login-face-con">
                <img src="images/login_face.png" alt="" class="login-face">
            </div>


            <!-- right side  -->
            <div class="col-sm-6 p-10">
                <div class="centerer">
                    <h1 class="login-title">LOG IN</h1>
                    <div class="log-in-container d-flex justify-content-center">
                        <form action="" class="login-form" method="post">
                            <input type="email" placeholder="Email" class="textbox-login" name="email">

                            <div class="pw-container">
                                <input type="password" placeholder="Password" class="textbox-login" name="password"
                                    id="password1">
                                <i class="bi bi-eye-slash togglePass" id="togglePassword1"></i>
                            </div>

                            <?php require_once('private/login-handler.php'); ?>

                            <a href="forgot-pass.php" class="forgot-p">Forgot password?</a>
                            <button type="submit" value="" class="btn-login" name="login">
                                LOG IN
                            </button>
                        </form>

                    </div>
                    <div class="text-login">Don't have an account? <a href="signup.php" class="">Sign up here!</a></div>
                </div>
            </div>


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
    </script>
</body>

</html>