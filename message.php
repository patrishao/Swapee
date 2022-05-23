<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/message.css" />
</head>

<body>

    <!-- sweetalert 
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>

    <script>
        Swal.fire({
            icon: 'error',
            title: 'Sorry!',
            text: 'This feature is still coming soon, please wait!',

        }).then(function() {
            window.location.href = "index.php";
        })
    </script>
        -->
    <?php include 'navbar.php' ?>

    <div class="container">

        <div class="titles">
            <svg class="" xmlns="http://www.w3.org/2000/svg" width="35" height="31" viewBox="0 0 35 31" fill="none">
                <path d="M34.0504 9.1751C34.0504 11.383 33.1259 13.5005 31.4802 15.0618C29.8346 16.623 27.6027 17.5001 25.2754 17.5001C22.9481 17.5001 20.7162 16.623 19.0705 15.0618C17.4249 13.5005 16.5004 11.383 16.5004 9.1751C16.5004 6.96717 17.4249 4.84967 19.0705 3.28843C20.7162 1.72719 22.9481 0.850098 25.2754 0.850098C27.6027 0.850098 29.8346 1.72719 31.4802 3.28843C33.1259 4.84967 34.0504 6.96717 34.0504 9.1751ZM26.2504 5.4751C26.2504 5.22977 26.1477 4.9945 25.9648 4.82102C25.782 4.64755 25.534 4.5501 25.2754 4.5501C25.0168 4.5501 24.7688 4.64755 24.586 4.82102C24.4031 4.9945 24.3004 5.22977 24.3004 5.4751V8.2501H21.3754C21.1168 8.2501 20.8688 8.34755 20.686 8.52102C20.5031 8.6945 20.4004 8.92977 20.4004 9.1751C20.4004 9.42042 20.5031 9.6557 20.686 9.82917C20.8688 10.0026 21.1168 10.1001 21.3754 10.1001H24.3004V12.8751C24.3004 13.1204 24.4031 13.3557 24.586 13.5292C24.7688 13.7026 25.0168 13.8001 25.2754 13.8001C25.534 13.8001 25.782 13.7026 25.9648 13.5292C26.1477 13.3557 26.2504 13.1204 26.2504 12.8751V10.1001H29.1754C29.434 10.1001 29.682 10.0026 29.8648 9.82917C30.0477 9.6557 30.1504 9.42042 30.1504 9.1751C30.1504 8.92977 30.0477 8.6945 29.8648 8.52102C29.682 8.34755 29.434 8.2501 29.1754 8.2501H26.2504V5.4751ZM30.1504 25.8251V18.2401C30.845 17.9033 31.4988 17.4958 32.1004 17.0246V25.8251C32.1004 27.0517 31.5868 28.2281 30.6725 29.0955C29.7583 29.9628 28.5183 30.4501 27.2254 30.4501H5.77539C4.48246 30.4501 3.24248 29.9628 2.32824 29.0955C1.41401 28.2281 0.900391 27.0517 0.900391 25.8251V11.0251C0.900391 9.79847 1.41401 8.62209 2.32824 7.75473C3.24248 6.88737 4.48246 6.4001 5.77539 6.4001H14.954C14.7736 7.00482 14.6528 7.62416 14.5933 8.2501H5.77539C4.99963 8.2501 4.25565 8.54246 3.7071 9.06288C3.15856 9.58329 2.85039 10.2891 2.85039 11.0251V11.5838L16.5004 19.2021L19.3103 17.6333C19.9441 18.0347 20.6246 18.3752 21.3442 18.6453L16.9957 21.0724C16.8713 21.1417 16.7323 21.184 16.5887 21.1961C16.445 21.2083 16.3003 21.19 16.165 21.1427L16.0051 21.0724L2.85039 13.7316V25.8251C2.85039 26.5611 3.15856 27.2669 3.7071 27.7873C4.25565 28.3077 4.99963 28.6001 5.77539 28.6001H27.2254C28.0011 28.6001 28.7451 28.3077 29.2937 27.7873C29.8422 27.2669 30.1504 26.5611 30.1504 25.8251Z" fill="white" />
            </svg>
        </div>




        <div class="contents">

            <div class="chat-list">

                <div class="specific-chat">
                    <div class="specific-user">

                        <div class="identifier">
                            <img class="user-img1" src="images\gabby.jpeg">

                            <div class="names1">
                                <h1 class="name-post1">Name </h1>
                                <h2 class="msg-post1">hello pwede pa swap nuba </h1>
                            </div>
                        </div>

                        <div class="time">
                            <p>1h</p>
                        </div>

                    </div>

                </div>
            <!--
                <a href="smaller-message.php" class="specific-chat-clickable">
                    <div class="specific-user">

                        <div class="identifier">
                            <img class="user-img1" src="images\gabby.jpeg">

                            <div class="names1">
                                <h1 class="name-post1">Name </h1>
                                <h2 class="msg-post1">hello pwede pa swap nuba </h1>
                            </div>
                        </div>

                            <div class="time">
                                <p>1h</p>
                            </div>

                        </div>
             


                   </a> -->

            </div>


            <div class="chatbox">

                <div class="user">
                    <img class="user-img" src="images\gabby.jpeg">

                    <div class="names">
                        <h1 class="name-msg">Username </h1>
                    </div>
                </div>

                <div class="inbox">

                    <div class="chatter">
                        <img class="chatter-img" src="images\gabby.jpeg">
                        <p class="chat-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>

                    </div>

                    <div class="replier">
                        <img class="replier-img" src="images\carterino.jpeg">
                        <p class="replier-text"> Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur </p>
                    </div>

                    <div class="chatter">
                        <img class="chatter-img" src="images\gabby.jpeg">
                        <p class="chat-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                    </div>

                    <div class="replier">
                        <img class="replier-img" src="images\carterino.jpeg">
                        <p class="replier-text"> Laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur </p>
                    </div>

                    <div class="chatter">
                        <img class="chatter-img" src="images\gabby.jpeg">
                        <p class="chat-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                    </div>


                </div>

                <form action="#" class="typing-area" class="form">

                    <textarea name="txt-msg" class="txt-msg" placeholder="Enter your message here.."></textarea>


                    <button type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" fill="none">
                            <path d="M9.91245 12H4.00045L2.02345 4.13505C2.01079 4.08934 2.00308 4.0424 2.00045 3.99505C1.97845 3.27405 2.77245 2.77405 3.46045 3.10405L22.0004 12L3.46045 20.896C2.78045 21.223 1.99645 20.737 2.00045 20.029C2.00247 19.9658 2.01359 19.9031 2.03345 19.843L3.50045 15" stroke="#5CACA9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </form>





            </div>
        </div>
</body>

</html>