<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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

    <?php include_once 'private/add-post-handler.php'; ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="main-container">
            <div class="top-container">
                <a href="posts.php" class="back-link"><img src="images/icons/back-arrow.svg" alt=""></a>
                <p class="new-title">Create new post</p>
                <a class="post-btn"><button type="submit" name="submit">Post</button></a>
            </div>
            <div class="below">
                <div class="upload-container">
                    <div class="bg">

                    </div>
                    <div class="upload-overlay">

                        <input type="file" id="file" name="images[]" multiple>
                        <label for="file"><img src="images/icons/upload.svg" class="upload-icon" alt=""></label>
                    </div>
                </div>
                <!-- middle border -->
                <div class="vertical"></div>
                <div class="det-container">
                    <div class="det-cont">
                        <div class="input-details">
                            <div class="details-group">
                                <input type="text" name="title" value="" placeholder="TITLE"> <br><br>
                            </div>
                            <div class="details-group">
                                <input list="categories" name="category" placeholder="CATEGORY"> <br><br>
                                <datalist id="categories">
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
                                <textarea name="desc" placeholder="DESCRIPTION" rows="1"></textarea> <br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>