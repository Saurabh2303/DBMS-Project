
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
    <link rel="stylesheet" href="Profile.css">
    <!-- <link rel="stylesheet" href="Signup.css">
    <link rel="stylesheet" href="Login-page.css">
    <link rel="stylesheet" href="Login.css">
    <link rel="stylesheet" href="form.css"> -->

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


    <!-- main img_name profile section started -->

    <section class="main_section_pm">

        <div class="color_div_pm"></div>

        <div class="profile_pm">

            <div class="img_pm">
                <img class="img_circle_pm" src="../Images/01.png" alt="">
            </div>
            
            <div class="profile_name_pm">
                <h1 class="name_pm">Khushi Makvane</h1>
            </div>

        </div>


        <div class="edit_profile_pm">
            <button class="btn_edit_pm">Edit Profile</button>
        </div>


    </section>

    <!-- main img_name profile section ended -->

    <!-- main form profile section started -->

    <section class="main_form common_c">

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

            <div class="right_form_pm">

                <div class="head_edit_r">
                    <h2>Edit Profile</h2>
                </div>

                <div class="profile_pic">
                    <p class="heading_pict_r">Profile picture</p>
                    <div class="pic_btn_profile">
                        <img class="picture_r" src="../Images/07.png" alt="">
                        <button class="change_profile_btn">Change</button>
                    </div>
                </div>

                <div class="sign_r">
                    <i class="fa-solid fa-xmark"></i>
                </div>



                <div class="form_p">

                    <p class="full_name_head_r">Full name</p>
                    <div class="input_div">
                        <input class="input_name_class" type="text" value="Khushi" placeholder="First name">
                        <input class="input_name_class" type="text" value="Makavane" placeholder="Last name">
                    </div>



                    <div class="user_email_r">

                        <div class="user_r">
                            <p class="full_name_head_r">Username</p>
                            <input class="input_username_class" type="text" value="KhushiMakavane"
                                placeholder="Username">

                        </div>

                        <div class="email_r">
                            <p class="full_name_head_r">Email id</p>
                            <input class="input_email_class" type="text" value="this@gmail.com" placeholder="Email id">

                        </div>


                    </div>

                    <div class="phone_loc_r">

                        <div class="phone_r">
                            <p class="full_name_head_r">Phone number</p>
                            <input class="input_name_class" type="phnumber" value="1234567890"
                                placeholder="Phone number">

                        </div>

                        <div class="loction_r">
                            <p class="full_name_head_r">Location</p>
                            <input class="input_name_class" type="text" value="Anjangaon">
                        </div>

                    </div>


                    <div class="about_me_r">
                        <p class="full_name_head_r">About me</p>
                        <textarea class="textarea_r" rows="3">"I’ve found a way to get paid for my favorite hobby, and do so while following my dream of traveling the world."</textarea>

                        <p class="brief_r">Brief description for your profile.</p>

                    </div>


                    <div class="education_r">

                        <p class="full_name_head_r"> Education </p>

                        <input class="input_educ_r" type="text" value="Bachelor in Computer Graphics"><br>

                        <input class="input_educ_r" type="text" value="Masters in Computer Graphics">

                    </div>

                    <button class="add_more_btn">+ &nbsp; Add more</button>


            

                </div>

                <button class="save_change_btn">Save Changes</button>

            </div>

            

        </div>

    </section>


    <!-- main form profile section ended -->

<!-- Footer Section Starts -->

<?php
    include("footer.php");
?>

<!-- Footer Section Ends -->

</body>

</html>