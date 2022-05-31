<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/add-post.css">
    <title>Swapee</title>
</head>

<body>
    <!-- <div class="top-container">
        <a href="posts.php" class="back-link"><img src="images/icons/back-arrow.svg" alt=""></a>
        <p class="new-title">Create new post</p>
        <button class="post-btn">Post</button>
    </div> -->


    <!-- displaying the details based on the post ID retrieved in the link -->
    <!-- images wont be able to be edited to avoid scams -->


    <form action="" method="POST" enctype="multipart/form-data">
        <div class="main-container">

            <div class="top-container">

                <a href="profile.php" class="back-link"><img src="images/icons/back-arrow.svg" alt=""></a>
                <p class="new-title">Edit your post</p>
                <a class="post-btn"><button type="submit" name="submit">Post</button></a>
            </div>
            <?php include_once 'private/edit-post-handler.php'; ?>
            <div class="below">
                <div class="upload-container">
                    <div class="bg">

                        <div class="prev-arrow arrow">
                            <button type="button"><img src="images/icons/back-icon-big.svg" alt=""></button>
                        </div>

                        <div class="photo-container">

                            <div class="photo-holder">
                                <img src="images/uploaded-imgs/<?php echo $coverImgP ?>" class="photo" id="cover" />
                                <p class="caption">Cover image</p>
                            </div>

                            <div class="photo-holder">
                                <img src="images/uploaded-imgs/<?php echo $sub1P ?>" class="photo" id="sub1" />
                                <p class="caption">Sub image</p>
                            </div>


                            <div class="photo-holder">
                                <img src="images/uploaded-imgs/<?php echo $sub2P ?>" class="photo" id="sub2" />
                                <p class="caption">Sub image</p>
                            </div>

                            <div class="photo-holder">
                                <img src="images/uploaded-imgs/<?php echo $sub2P ?>" class="photo" id="sub3" />
                                <p class="caption">Sub image</p>
                            </div>



                        </div>


                        <div class="right-arrow arrow">
                            <button type="button"><img src="images/icons/forward-icon.svg" alt=""></button>
                        </div>

                    </div>

                </div>
                <!-- middle border -->
                <div class="vertical"></div>
                <div class="det-container">
                    <div class="det-cont">
                        <div class="input-details">
                            <div class="details-group">
                                <input type="text" name="title" value="<?php echo    $titleP ?>" placeholder="Title">
                                <br><br>
                            </div>
                            <div class="details-group">
                                <input list="categories" name="category" placeholder="Category"
                                    value="<?php echo $categoryP ?>"> <br><br>
                                <datalist id="categories">

                                    </option>
                                    <option value="Home">
                                    <option value="Self-care">
                                    <option value="Beauty">
                                    <option value="Electronics">
                                    <option value="Supermarket">
                                    <option value="Sports">
                                    <option value="Laptops">
                                    <option value="Toys">
                                    <option value="Kitchen">
                                    <option value="Baby">
                                    <option value="Mobiles">
                                    <option value="Fashion">
                                    <option value="Instruments">
                                    <option value="Books">
                                    <option value="Others">
                                </datalist>
                            </div>
                            <div class="details-group">
                                <textarea name="desc" placeholder="Description"
                                    rows="1"><?php echo $descriptionP ?></textarea> <br><br>
                            </div>

                            <div class="details-group select">
                                <label>Close this deal?</label>
                                <select class="archive" name="archive">
                                    <option value="no" default selected="selected">No</option>
                                    <option value="yes">Yes</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- carousel -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>




    <script>
    // displaying images before uploading
    var loadFile = function(event) {

        // var captions = document.getElementsByClassName('caption');
        // captions.style.display = "block";

        var cover = document.getElementById('cover');
        cover.src = URL.createObjectURL(event.target.files[0]);
        cover.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }


        // sub1

        var sub1 = document.getElementById('sub1');
        sub1.src = URL.createObjectURL(event.target.files[1]);
        sub1.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }

        // sub2

        var sub2 = document.getElementById('sub2');
        sub2.src = URL.createObjectURL(event.target.files[2]);
        sub2.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }

        // sub3

        var sub3 = document.getElementById('sub3');
        sub3.src = URL.createObjectURL(event.target.files[3]);
        sub3.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };



    $('.photo-container').slick({
        infinite: true,
        prevArrow: $('.prev-arrow'),
        nextArrow: $('.right-arrow'),
        slidesToShow: 1,
        slidesToScroll: 1

    });


    const tx = document.getElementsByTagName("textarea");
    var value = 0;


    for (let i = 0; i < tx.length; i++) {



        tx[i].setAttribute("style", "height:" + (tx[i].scrollHeight) + "px;overflow-y:hidden;");


        tx[i].addEventListener("input", OnInput, false);





    }

    function OnInput() {


        // if the scroll height is less than the default size
        if (this.scrollHeight <= this.offsetHeight) {

            // reset the height  to default
            this.setAttribute('style', '' + "px;overflow-y:hidden;");
            this.style.height = (this.scrollHeight) + "px";




            // if the scroll height is greater than the default size
        } else {
            this.style.height = this.offsetHeight;
            this.style.height = (this.scrollHeight) + "px";

        }
    }
    </script>

</body>

</html>