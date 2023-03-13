
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
 

    </div>
</div>

<!-- User Profile Ends -->

<body>

</html>


<div class="form_profile">

<div class="left_form_pm">
    <ul>
        <li>
            <div class="list_list_pm">
                <i class="fa-solid fa-bars"></i>
                <p>Dashboard</p>
            </div>
        </li>
        <li>
            <div class="list_list_pm">
                <i class="fa-solid fa-cart-shopping"></i>
                <p>My Courses</p>
            </div>
        </li>
        <li>
            <div class="list_list_pm">
                <i class="fa-brands fa-quinscape"></i>
                <p>Quiz</p>
            </div>
        </li>
        <li>
            <div class="list_list_pm">
                <i class="fa-solid fa-chart-line"></i>
                <p>Earnings</p>
            </div>
        </li>
        <li>
            <div class="list_list_pm">
                <i class="fa-solid fa-user-group"></i>
                <p>Students</p>
            </div>
        </li>
        <li>
            <div class="list_list_pm">
                <i class="fa-solid fa-bag-shopping"></i>
                <p>Orders</p>
            </div>
        </li>
        <li>
            <div class="list_list_pm">
                <i class="fa-solid fa-star"></i>
                <p>Reviews</p>
            </div>
        </li>
        <li>
            <div class="list_list_pm">
                <i class="fa-solid fa-pen-to-square"></i>
                <p>Edit Profile</p>
            </div>
        </li>
        <li>
            <div class="list_list_pm">
                <i class="fa-solid fa-gear"></i>
                <p>Setting</p>
            </div>
        </li>
        <li>
            <div class="list_list_pm">
                <i class="fa-solid fa-trash"></i>
                <p>Delete Profile</p>
            </div>
        </li>
        <li>
            <div class="list_list_pm_2">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                <p>Logout</p>
            </div>
        </li>
    </ul>
</div>

/* main profile section started */

.main_section_pm{
    width: 100%;
    height: 200px;
    background-color:  #1c2e4a;
    /* background-color: #f60; */
}

.img_pm{
    position: relative;
    left: 110px;
    top: 130px;
}

.img_circle_pm{
    width: 150px;
    height: 130px;
    border-radius: 50%;
    border: 4px solid white;
}

.profile_name_pm{
    position: relative;
    left: 290px;
    top: 68px;
}

.name_pm{
    font-weight: 600;
    font-size: 24px;
    color: rgb(33, 34, 95);
}

.edit_profile_pm{
    position: relative;
    left: 1250px;
    top: 60px;
}

.btn_edit_pm{
    border: none;
    padding-top: 8px;
    padding-bottom:8px ;
    padding-left: 28px;
    padding-right: 28px;
    font-size: 18px;
    font-weight: 500;
    background-color: #f60;
    border-radius: 8px;
    color: white;
}

.btn_edit_pm:hover{
    background-color: #d15300;
}

/* main profile section ended */