<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MESSAGES</title>
    <link rel="stylesheet" type="text/css" href="css/message.css" />
    <!-- <meta http-equiv="refresh" content="10" /> -->
</head>

<body>

    <?php include 'navbar.php';
    require_once 'private/includes/connection.php';
    require_once 'private/includes/functions.php';
    include_once 'private/includes/current-user-details.php';

    require_once 'private/message-handler.php';






    ?>

    <?php


    ?>



    <!-- TODO: PUT #CHATBOX ON THE LINK -->
    <div class="container">


        <?php if ($user_to != "new") {





        ?>





        <div class="contents">

            <div class="chat-list">


                <?php

                    // getting the conversations of user
                    $convos = array();

                    $getConvosQuery = mysqli_query($connection, "SELECT user_toID, user_fromID FROM messages WHERE user_toID = '$userLoggedIn' OR user_fromID = '$userLoggedIn'");


                    while ($row = mysqli_fetch_array($getConvosQuery)) {
                        // push wherever the user logged in is
                        $user_to_push = $row['user_toID'] != $userLoggedIn ? $row['user_toID'] : $row['user_fromID'];

                        if (!in_array($user_to_push, $convos)) {
                            array_push($convos, $user_to_push);
                        }
                    }


                    foreach ($convos as $username) {

                        $user_found2 = getFirstLastName($connection, $username);
                        $latest_message_details = getLatestMsg($userLoggedIn, $username, $connection);
                        $msgDate = getDateFromLatestMsg($userLoggedIn, $username, $connection);

                        if (strlen($latest_message_details) > 35) {
                            $lastConvo = substr($latest_message_details, 0, 25) . "...";
                        } else {
                            $lastConvo = $latest_message_details;
                        }



                    ?>

                <a href="message.php?u=<?php echo $username; ?>">

                    <div class="specific-chat <?php echo  $username == $user_to  ? "active" : ""; ?> ">
                        <div class="specific-user">

                            <div class="identifier">


                                <img class="user-img1"
                                    src="images/uploaded-imgs/<?php echo getUserImg($connection,  $username) ?>">


                                <div class="names1">
                                    <h1 class="name-post1"><?php echo  $user_found2 ?> </h1>
                                    <h2 class="msg-post1"> <?php echo $lastConvo ?> </h1>
                                </div>
                            </div>

                            <div class="time">
                                <p><?php echo $msgDate ?></p>
                            </div>

                        </div>

                    </div>



                    <?php } ?>

                </a>




            </div>




            <div class="chatbox" id="chatbox">


                <!-- linking the users to their profile page by passing their id to link -->
                <a href="profile.php?u-id=<?php echo $user_to; ?>" class="linkprof">
                    <div class="user">
                        <img class="user-img"
                            src="images/uploaded-imgs/<?php echo getUserImg($connection, $user_to) ?>">

                        <div class="names">
                            <h1 class="name-msg">
                                <?php echo  $user_to_details = getFirstLastName($connection, $user_to); ?>
                            </h1>
                        </div>
                    </div>
                </a>

                <?php





                    $updateQuery = mysqli_query($connection, "UPDATE messages SET isViewed = 1");

                    //retrieving the msgs between the two
                    $getMsgQuery = mysqli_query($connection, "SELECT * FROM messages WHERE user_toID = $userLoggedIn AND
                user_fromID = $user_to OR user_fromID = $userLoggedIn AND user_toID = $user_to");






                    ?>

                <div class="inbox" id="scrollto">

                    <?php



                        while ($row = mysqli_fetch_assoc($getMsgQuery)) {


                            $receiver = $row['user_toID'];
                            $sender =  $row['user_fromID'];
                            $body = $row['body'];
                            $itemImg = $row['itemImg'];
                            $subject = $row['subject'];
                            $message_post_id = $row['message_post_id'];


                            if ($sender == $userLoggedIn) {



                        ?>



                    <div class="replier" id="">




                        <div class="img-inquire">
                            <?php if (!empty($itemImg)) {  ?>
                            <img src="images/uploaded-imgs/<?php echo $itemImg ?>" class="imgSubject" />
                            <?php } ?>

                            <?php if (!empty($subject)) {  ?>
                            <a href="posts.php?p_id=<?php echo $message_post_id ?>" class="w-100 msgSubject">
                                <p class=""> <?php echo $subject ?></p>
                            </a>
                            <?php } ?>

                        </div>

                        <div class="replier2">

                            <img class="replier-img"
                                src="images/uploaded-imgs/<?php echo getUserImg($connection, $userLoggedIn) ?>">
                            <p class="replier-text"><?php echo $body ?> </p>

                        </div>


                    </div>



                    <?php } else {


                            ?>



                    <div class="chatter ">

                        <div class="img-inquire">

                            <?php if (!empty($itemImg)) {  ?>
                            <img src="images/uploaded-imgs/<?php echo $itemImg ?>" class="imgSubject" />
                            <?php } ?>

                            <?php if (!empty($subject)) {  ?>
                            <a href="posts.php?p_id=<?php echo $message_post_id ?>" class="w-100 msgSubject">
                                <p class=""> <?php echo $subject ?></p>
                            </a>
                            <?php } ?>
                        </div>

                        <div class="chatter2">

                            <a href="profile.php?u-id=<?php echo $user_to; ?>">
                                <img class="chatter-img" src="images\<?php echo getUserImg($connection, $user_to) ?>">
                            </a>
                            <p class="chat-text"><?php echo $body ?></p>

                        </div>
                    </div>

                    <?php  }
                        }
                        ?>

                </div>



                <form action="" class="form" method="post" enctype="multipart/form-data">


                    <textarea name="txtMsg" class="txt-msg" placeholder="Enter your message here.." id="txt"></textarea>




                    <div class="buttons">




                        <label for="img-upload" class="img-btn"><svg xmlns="http://www.w3.org/2000/svg" width="40"
                                height="40" viewBox="0 0 33 33" fill="none">
                                <path
                                    d="M5.5 6.875H23.375V16.5H26.125V6.875C26.125 5.35837 24.8916 4.125 23.375 4.125H5.5C3.98338 4.125 2.75 5.35837 2.75 6.875V23.375C2.75 24.8916 3.98338 26.125 5.5 26.125H16.5V23.375H5.5V6.875Z"
                                    fill="#5CACA9" />
                                <path d="M11 15.125L6.875 20.625H22L16.5 12.375L12.375 17.875L11 15.125Z"
                                    fill="#5CACA9" />
                                <path
                                    d="M26.125 19.25H23.375V23.375H19.25V26.125H23.375V30.25H26.125V26.125H30.25V23.375H26.125V19.25Z"
                                    fill="#5CACA9" />
                            </svg></label>

                        <input id="img-upload" type="file" name="img" accept=" image/png, image/jpeg, image/gif"
                            hidden />

                        <button type="submit" name="sendMsg" id="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M9.91245 12H4.00045L2.02345 4.13505C2.01079 4.08934 2.00308 4.0424 2.00045 3.99505C1.97845 3.27405 2.77245 2.77405 3.46045 3.10405L22.0004 12L3.46045 20.896C2.78045 21.223 1.99645 20.737 2.00045 20.029C2.00247 19.9658 2.01359 19.9031 2.03345 19.843L3.50045 15"
                                    stroke="#5CACA9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>







                </form>


                <div class="alert  <?php if ($emptyMsg) {
                                            echo "d-block";
                                        } else {
                                            echo "d-none";
                                        } ?>">
                    Please enter a text.
                </div>




                <script>
                var scroll = document.getElementById("scrollto");
                scroll.scrollTop = scroll.scrollTop = 9999999;

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



            </div>



        </div>
    </div>
    <?php } else { ?>


    <div class="no-msg-container">
        <h2 class="no-msg">No messages yet</h2>
        <p>Start a message by swapping with a user!</p>
        <a href="index.php">Go to Home Page</a>
        <?php } ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>

    <!-- <script src="js/index.js"></script> -->

</body>

</html>