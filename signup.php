<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <!-- CSS -->
    <link rel="stylesheet" href="samp.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

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
    
            <!-- right side  -->
            <div class="col-sm-6 p-10">
                <div class="centerer">
                    <h1 class="login-title">SIGN UP</h1>
                    <div class="log-in-container d-flex justify-content-center">
                        <form action="" class="login-form">
                            <input type="email" name="email "placeholder="Email" class="textbox-login">
                            <input type="password" name="password" placeholder="Password" class="textbox-login">
                            <input type="password" name="re-type password" placeholder="Re-type Password" class="textbox-login">
                            <a href="#" class="forgot-p">Forgot password?</a>
                            <button type="submit" value="" class="btn-login"> 
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
    </div>
</body>
</html>