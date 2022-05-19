
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFILE</title>

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

      <!-- CSS -->
      <link rel="stylesheet" href="css/profile.css">

</head>
<body>
<?php include 'navbar.php';
  
  
  ?>
    <div class="container">

    <!-- inside container -->
      <div class="row">

      <!-- left side -->
        <div class="col-md-6 order-lg-1 order-md-1 order-sm-2 post-side">
          <img src="images\placeholder.jpg" alt="" class="post-placeholder">
          <img src="images\placeholder.jpg" alt="" class="post-placeholder">
          <img src="images\placeholder.jpg" alt="" class="post-placeholder">
        </div>

      <!-- right side (profile)-->
      <div class="col-md-6 order-lg-2 order-md-1 order-sm-1 profile-side">

        <div class="content-container">

              <div class="container-firstpt">
             <img src="images/carterino.jpeg" alt="" class="profile-pic">
             <div class="name-user">
                    <div class="name">display name po</div>
                    <div class="username">@usernamepoito</div>
              </div>
              </div>
              <div class="bio">bio po it maglagay ng kung anong ano dine thank u</div>
              <div class="container-secondpt">

                <div class="location"> <img src="images\icons\fa6-solid_map-pin.png" alt="" class="location-img">
                <p class="location-details">dubai baket</p></div>

                <div class="rating"> <img src="images\icons\bi_star.png" alt="" class="rating-img">
                <p class="rating-details">5/5</p></div>

                <div class="prof-buttons">
                  <img src="images\icons\ci_settings.png" alt="">
                  <img src="images\icons\akar-icons_plus.png" alt="">
                </div>
              </div>

          </div>

      </div>

      </div>
    </div>
</body>
</html>