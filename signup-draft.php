<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- script -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/signup-draft.css">

</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-6">



                <div class="form-container">
                    <h1 class="signup-title">SIGN UP</h1>

                    <form action="" method="post" id="">
                        <div class="signup-container">


                            <div class="signup-group">
                                <input type="text" name="firstName" placeholder="First name">
                            </div>

                            <div class="signup-group">
                                <input type="text" name="lastName" placeholder="Last name">
                            </div>

                            <div class="signup-group">
                                <input type="text" name="username" placeholder="Username">
                            </div>

                            <div class="signup-group">
                                <input type="email" name="email" placeholder="Email">
                            </div>

                            <div class="signup-group">
                                <div class="pass-container">
                                    <input type="password" name="password" placeholder="Password" id="password1">
                                    <i class="bi bi-eye-slash togglePass" id="togglePassword1"></i>
                                </div>
                            </div>

                            <div class="signup-group">
                                <input type="password" name="c-password" placeholder="Re-type password" id="password2">
                                <i class="bi bi-eye-slash togglePass" id="togglePassword2"></i>
                            </div>

                            <?php require_once('private/signup-data.php') ?>

                            <div class="signup-group2">
                                <input type="submit" value="SIGN UP" name="signUp" class="signup-button">
                            </div>


                            <p class="text-signup">Already have an account? <a href="login.php">Sign in here!</a></p>
                        </div>
                    </form>
                </div>

            </div>

            <div class="col-sm-6">
                <img src="images/signup-face.png" alt="" class="signup-face">
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

</body>

</html>