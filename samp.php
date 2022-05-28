<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Notification Dropdown</title>
	<link rel="stylesheet" href="samp.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".notification_icon ").click(function(){
				$(".dropdown").toggleClass("active");
			})
		});
	</script>
</head>
<body>
	
	<input type="checkbox" id="check">
    <nav>

        <!-- icon -->
        <div id="icon">
            <img src="images/logo.png" alt="" srcset="">
        </div>

        <!-- search -->
        <div class="search-box">
            <input type="search" placeholder="Search...">
            <span class="fa fa-search"></span>
        </div>

        <div class="navbar">
        <!-- navbar menu -->
            <ul>
                <li><a href="#">Home</a></li>
                <li>
                    <div class="notification_wrap">
                        <div class="notification_icon">
                            <a href="#">Notifications</a>
                        </div>
                        <div class="dropdown">
                            <div class="notify_item">
                                <div class="notify_img">
                                    <img src="images/biancs.jpeg" alt="profile_pic" style="width: 50px">
                                </div>
                                <div class="notify_info">
                                    <p>Alex wants to<span>swapee with you</span></p>
                                </div>
                                <div class="notify_button">
                                    <button>Decline</button>
                                    <button>Accept</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a href="#">Messages</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>
        <label for="check" class="bar">
            <span class="fa fa-bars" id="bars"></span>
            <span class="fa fa-times" id="times"></span>
        </label>

    </nav>


</body>
</html>