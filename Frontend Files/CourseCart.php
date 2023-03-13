<?php
       session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn Anything That You Want</title>
    <!-- Costum Css Link -->
    <link rel="stylesheet" href="courses.css" type="text/css">
    <!-- Font Awesomr CDN link -->
    <script src="https://kit.fontawesome.com/e8e9c02a1b.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../Images/Favicon (2).png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Festive&family=Merriweather:ital,wght@0,300;0,900;1,300;1,900&family=Poppins:wght@400;500;600&family=Roboto+Slab:wght@700&family=Roboto:ital,wght@0,100;0,300;0,400;0,700;1,100;1,300;1,500&display=swap" rel="stylesheet">

    <style>
        .left_img
        {
            margin-left: 40px;
        }
        .right_img
        {
            margin-right: 50px; 
        }
        .left_img img{
            height: 250px;
        }
        .right_img img{
            height: 260px;
        }
    </style>
</head>
<body>

<!-- Navbar Starts -->
    <?php
        include("header.php")
    ?>
<!-- Navbar Ends -->


<!-- Categeries head starts -->


<div class="categories_head_container">
    <div class="head_left left_img">
        <img src="../Images/My_cart_1.png" alt="">
    </div>

    <div class="head_details">
        <h1>My Cart</h1>
        <p>Buy Courses to upscale your carrer and life.</p>
    </div>

    <div class="head_left right_img">
        <img src="../Images/My_cart_2.png" alt="">
    </div>
</div>

<!-- Categeries head ends -->

<body>
</html>