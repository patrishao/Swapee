<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/boost.css">

    <title>Boost</title>
</head>

<body>

    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Boost
</button> -->

    <?php require_once 'private/boostpost.php' ?>
    <form class="" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true" method="post">


        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">



            <div class="modal-content">



                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Duration and Payment</h5>
                    <button type="submit" class="btn btn-primary " name="boostPost">Boost
                        Post</button>
                </div>


                <div class="modal-body p-3  mb-4">
                    <!-- duration -->


                    <p class="text-center p-3">We can assure you that your post will be seen by
                        everyone.</p>

                    <div class="duration mb-5 ">
                        <h5 class="pb-1 pt-3 ms-3">Select the duration:</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radio" id="exampleRadios1" value="3"
                                checked>
                            <label class="form-check-label" for="exampleRadios1">
                                AED 5 for 3 days
                            </label>
                        </div>
                        <div class="form-check  ">
                            <input class="form-check-input" type="radio" name="radio" id="exampleRadios2" value="7">
                            <label class="form-check-label" for="exampleRadios2">
                                AED 10 for 7 days
                            </label>
                        </div>
                        <div class="form-check  ">
                            <input class="form-check-input" type="radio" name="radio" id="exampleRadios2" value="15">
                            <label class="form-check-label" for="exampleRadios2">
                                AED 20 for 15 days
                            </label>
                        </div>
                    </div>

                    <!-- payment -->
                    <div class="payment">
                        <h5 class="pb-1 pt-3 ms-3">Select your payment method:</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios11"
                                value="option11" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Credit Card
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios22"
                                value="option22">
                            <label class="form-check-label" for="exampleRadios2">
                                Debit Card
                            </label>
                        </div>

                        <div class="payment-details pb-1 pt-3 ms-4">
                            <div class="col-md-6 mb-3">
                                Full Name
                                <input type="text" class="form-control1" id="cc-name" placeholder="">
                            </div>
                            <div class="col-md-6 mb-3">
                                Credit Card
                                <input type="text" class="form-control1" id="cc-number"
                                    placeholder="0000 0000 0000 0000">
                            </div>
                        </div>

                        <div class="expi-cvc pb-1 pt-3 ms-4 ">
                            <div class="col-md-3 mb-3">
                                Expiration
                                <input type="text" class="form-control" id="cc-expiration" placeholder="MM/YY">
                            </div>
                            <div class="col-md-3 mb-3">
                                CVV
                                <input type="text" class="form-control" id="cc-cvv" placeholder="000">
                            </div>
                        </div>




                    </div>
                </div>


            </div>

        </div>
    </form>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>




</html>