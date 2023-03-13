
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Section</title>

    <script src="https://kit.fontawesome.com/e8e9c02a1b.js" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="Course_1C.css"> -->
    <link rel="stylesheet" href="StudyLab.css">
    <link rel="stylesheet" href="UserProfile.css">

    <link
        href="https://fonts.googleapis.com/css2?family=Festive&family=Merriweather:ital,wght@0,300;0,900;1,300;1,900&family=Poppins:wght@400;500;600&family=Roboto+Slab:wght@700&family=Roboto:ital,wght@0,100;0,300;0,400;0,700;1,100;1,300;1,500&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

<!-- Navbar Starts -->
    <?php
        include("header.php")
    ?>
<!-- Navbar Ends -->


<!-- User Profile Starts -->

<div class="Profile_outer">
    <div class="UserProfile_section">
            <div class="profile_bg">
                    <!-- <img src="../Images/Profile_bg_img.jpg" alt=""> -->
            </div>
            <div class="user_details">
                    <div class="Username">
                        <p>Name:Saurabh</p>
                    </div>
                    <div class="Username">
                        <p>Username:Saurabh1122</p>
                    </div>
                    <div class="Username">
                        <p>Email:SaurabhWankhade@gmial.com</p>
                    </div>   
            </div>

            <div class="buttons">
                    <button>Logout</button>
                    <button>Delete Account</button>
            </div>
    </div>

    <div class="User_details">
            <div class="Username">
                        <p>Email:SaurabhWankhade@gmial.com</p>
    </div>
    </div>
</div>

<!-- User Profile Ends -->

<body>

</html>