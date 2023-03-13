<?php
    require('config.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course</title>

    <script src="https://kit.fontawesome.com/e8e9c02a1b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="MainCourses.css">
    <link rel="stylesheet" href="StudyLab.css">
    <!-- <link rel="stylesheet" href="Signup.css"> -->
    <!-- <link rel="stylesheet" href="Login-page.css"> -->
    <!-- <link rel="stylesheet" href="Login.css"> -->
    

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
    <div class="head_c">
        <!-- <section>  
            <nav class="nav_c common_c">
                <li class="nav_c1">Home</li>
                <li class="nav_c2">All courses</li>
                <li class="nav_c2">User Experience Design</li>
                <li class="nav_c2">User Interface</li>
            </nav>
        </section> -->
        <!-- navbar Section End  -->

        <!--  Main Section Started  -->
        <!-- Left Section started -->
        <div class="left_right_c">
            <div class="left_section_c">
                <Section>
                    <div class="best common_c">
                        <div class="best_c1">BEST SELLER</div>
                        <div class="best_c2">NEW</div>
                        <div class="best_c3">POPULAR</div>
                    </div>

                    <div class="heading_c common_c">
                        <p class="main_heading_c">Complete Guitar Lessons System - Beginner to Advanced</p>

                        <p class="secondery_heading_c">All-in-one Guitar Course, Fingerstyle Guitar,
                             Blues Guitar, Acoustic Guitar, Electric Guitar & Fingerpicking Guitarra
                           
                        </p>
                    </div>

                    <div class="reating_c common_c">
                        <!-- First Reating 4.5 wal -->
                        <div class="first_reating_c">
                            <div class="reating_class_c">
                                <p class="reating_no">4.5</p>
                            </div>
                            <div class="reating_class_c">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="">
                                <p class="year_c">(1991)</p>
                            </div>
                        </div>

                        <!-- second Reating enrolled wal -->
                        <div class="second_reating_c">
                            <div>
                                <i class="fa-regular fa-user"></i>
                            </div>

                            <div>
                                <p>14,123 enrolled on this course</p>
                            </div>
                        </div>

                        <!-- Third Reating update wala -->
                        <div class="third_reating_c">
                            <div>
                                <i class="fa-regular fa-clock"></i>
                            </div>

                            <div>
                                Last updated 9/2022
                            </div>
                        </div>
                    </div>

                    <div class="tufan common_c">
                        <p class="teacheby">Teached By :</p>
                        <br>
                        <div class="tufan_img_c">
                            <img src="../Images/Digital_inst_final.jpg" alt="">
                        </div>
                        <div class="tufan_name_c">
                            <p>Yash Wasankar</p>
                        </div>
                    </div>
                </Section>
            </div>
            <!-- Left Section ended -->

            <!-- Right Section started -->
            <div class="right_section_div">
                <div class="right_section_c">
                    <div class="right_img_c">
                        <img class="Image_c" src="../Images/guitar.jpg" alt="">
                    </div>

                    <div class="right_details_c">
                        <div class="after_img_c">
                            <div class="reating_right_c">
                                <div class="Course_price">
                                    <div class="first_rate_c price">
                                        <p>₹499</p>
                                    </div>
                                    <div class="second_rate_c price">
                                        <p>₹2,299</p>
                                    </div>
                                    <div class="Price_off">
                                        <p>78% off</p>
                                    </div>
                                </div>
                               
                            </div>

                           
                            </div>
                        </div>

                        <div class="right_list_c">
                            <div class="right_first_list_c">
                                <div class="list_left_c">
                                    <i class="fa-regular fa-file-video"></i>
                                    <span class="Lessons_c">Modules</span>
                                </div>
                                <div>16</div>
                            </div>
                            <div class="right_line_c"></div>

                            <div class="right_first_list_c">
                                <div class="list_left_c">
                                    <i class="fa-solid fa-chart-simple"></i>
                                    <span class="Lessons_c">Skill level</span>
                                </div>
                                <div>Beginner/ Intermidate</div>
                            </div>
                            <div class="right_line_c"></div>
                            <div class="right_first_list_c">
                                <div class="list_left_c">
                                    <i class="fa-solid fa-certificate"></i>
                                    <span class="Lessons_c">Certificate</span>
                                </div>
                                <div>Yes</div>
                            </div>
                            <div class="right_line_c"></div>

                            <div class="right_first_list_c">
                                <div class="list_left_c">
                                    <i class="fa-solid fa-infinity"></i>
                                    <span class="Lessons_c">Full lifetime access</span>
                                </div>
                                <div>Yes</div>
                            </div>
                            <div class="right_line_c"></div>
                        </div>



                        <div class="right_button_c">
                            <div class="Course_buttons">
                                <button class="second_btn_c"> Buy Now</button>
                                <button class="cart-button">
	                                <span class="add-to-cart">Add to cart</span>
	                                <span class="added">Added</span>
                                    <i class="fas fa-shopping-cart"></i>
                                    <i class="fas fa-box"></i>
                                </button>    
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Description Section Started -->



    <section class="description_c common_c">

        <div class="overview_c">
            <a href="#" class="overview_first_c">Overview</a>
            <a href="#" class="overview_second_c">Course Content</a>
            <a href="#" class="overview_second_c">Instructor</a>
            <a href="#" class="overview_second_c">Reviews</a>
        </div>
        <div class="line_d_c"></div>

        <div class="main_description_c">
            <p class="head_desc_c">Description</p>

            <p class="full_desc_c">Would You Like to Eliminate Every Struggle That You
                 Are Faced With When Starting to Play Guitar?
                This course is your "Ticket" to playing guitar.  It is the most direct
                 and to the point complete online guitar course. 
                  have learned soooo much from Erich's lessons! I've had my guitar 
                    for less than 5 months and I have such a firm foundation and core 
                    understanding of the principles and techniques I need. The sky is 
                    the limit, If my fingers can catch up to my brain. It will take a 
                    lot of practice, but thanks to this Complete Guitar System, I 
                    KNOW WHAT to practice and HOW (and why) to do it CORRECTLY!!! 
                    I'm on the continuum to being a great guitar player, and I'm 
                    loving it!!! It's been a pleasure and I look forward to revisiting
                     many of the lessons since I get to keep them FOREVER!! Thanks Erich 
                     for answering all my questions!! You RAWK!" 
            </p>

            <button class="show_btn_c">Show more</button>
           
        </div>
    </section>

    <!-- Description Section Ended -->


    <!-- Learn Section Started -->


    <section class="learn_c common_c">

        <p class="head_learn_c">What you'll learn</p>

        <div class="flex_c">
            <div class="learn_flex_c">

                <div class="first_flex_c">
                    <i class="fa-regular fa-circle-check"></i>
                    <p>New to Guitar? This Will be the Only Course You Will Ever Need to Take</p>
                </div>
                <div class="first_flex_c">
                    <i class="fa-regular fa-circle-check"></i>
                    <p>Most Logical Step-by-step Method to Play Songs and Master Chords,
                         Scales and Guitar Theory</p>
                </div>
            </div>

            <div class="second_flex_c">
                <div class="first_flex_c">
                    <i class="fa-regular fa-circle-check"></i>
                    <p>Have You Playing the Guitar in the Shortest Amount of Time 
                        While Having the Most Fun</p>
                </div>
                <div class="first_flex_c">
                    <i class="fa-regular fa-circle-check"></i>
                    <p>Exercises That Will Sharpen Your Chord Transitioning,
                         Strumming, Fretting, Picking, and Fingerpicking</p>
                </div>
            </div>
        </div>
    </section>



    <!-- Learn Section Started -->



    <!-- Requirements section Started -->


    <div class="heading_req_c common_c">
        <h2>Requirements</h2>
        <ul class="list_req_c">
            <li class="first_list_req">No Special Skills Needed</li>
            <li class="first_list_req">You Will Need a Guitar</li>
            <li class="first_list_req">Practice Can Not Be Avoided</li>
         </ul>
    </div>


    <!-- Requirements section Ended -->

    
   <!-- Course Content Section Started -->

    <section class="course_c common_c">
        <p class="course_head">Course Content</p>

        <div class="course_lecture">
            <p>16 Modules • 168 lectures</p>
            <a href="#" class="course_link">Expand All Sections</a>
        </div>

        <ul class="acco"> 
            <li>
                <input type="radio" name="accord" id="first">
                <label for="first">
                    <div class="course_content_1 content-color5">
                        <div class="course_1_left">
                            <i class="fa-solid fa-chevron-down"></i>
                            <p class="head_course_1">Introduction - Must Watch!</p>
                        </div>
                        <div class="course_1_right">
                            <p>4 lectures • 11 min 48 sec</p>
                        </div>
                    </div>
                </label>
    
                <div class="contents">
                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p> Beginner - The CORE - Module 1</p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#"> 1min 25 sec</a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p> Beginner - The CORE - Module 2</p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">4 min 38 sec</a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p> Beginner - The CORE - Module 3</p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">3 min 24 sec</a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p> Beginner - The CORE - Module 4</p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">2 min 28 sec</a>
                        </div>
                    </div>
                    
                   
                    </div>
                </div>
            </li>

            <li>
                <input type="radio" name="accord" id="second">
                <label for="second">
                    <div class="course_content_1 content-color1">
                        <div class="course_1_left">
                            <i class="fa-solid fa-chevron-down"></i>
                            <p class="head_course_1">  Solid foundation  </p>
                        </div>
                        <div class="course_1_right">
                            <p>20 lectures • 2 hr 8 min</p>
                        </div>
                    </div>
                </label>
    
                <div class="contents">
                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>Begineer - Solid foundation - Module 1</p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">1 min 40 sec</a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p> Begineer - Solid foundation - Module 2</p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">4 min 12 sec</a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>Begineer - Solid foundation - Module 3</p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">8 min 13 sec</a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>Intermidate - Solid foundation - Module 4 </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">6 min 16 sec</a>
                        </div>
                    </div>
                    
                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>Intermidate - Solid foundation - Module 1</p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">15 min 51 sec</a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p> Intermidate - Solid foundation - Module 2</p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">25 min 41 sec</a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>Intermidate - Solid foundation - Module 3</p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">6 min 20 sec</a>
                        </div>
                    </div>
                    
                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>Intermidate - Solid foundation - Module 4</p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">20 min 20 sec</a>
                        </div>
                    
                    </div>
                </div>
            </li>

            <li>
                <input type="radio" name="accord" id="third">
                <label for="third">
                    <div class="course_content_1 content-color2">
                        <div class="course_1_left">
                            <i class="fa-solid fa-chevron-down"></i>
                            <p class="head_course_1">Techniques </p>
                        </div>
                        <div class="course_1_right">
                            <p>21 lectures • 3 hr 8 min</p>
                        </div>
                    </div>
                </label>
    
                <div class="contents">
                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>Intermidate - Techniques - Module 1</p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">13 min 23 sec</a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>Intermidate - Techniques - Module 2</p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">10 min 28 sec</a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>Intermidate - Techniques - Module 3</p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">20 min 56 sec</a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>Play Your Chords On Time When Moving From One Chord To The Next</p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">36 min 34 sec</a>
                        </div>
                    </div>
                    
                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>Dexterity Exercise - Ninja Fretting Hand Skills</p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">31 min 59 sec</a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>Dexterity Exercise 2 - Ninja Fretting Hand Skills</p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">21 min 45 sec</a>
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <input type="radio" name="accord" id="fourth">
                <label for="fourth">
                    <div class="course_content_1 content-color3">
                        <div class="course_1_left">
                            <i class="fa-solid fa-chevron-down"></i>
                            <p class="head_course_1">Chord Noodling</p>
                        </div>
                        <div class="course_1_right">
                            <p>6 lectures • 2 hr 41 min</p>
                        </div>
                    </div>
                </label>
    
                <div class="contents">
                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>Octave Technique
                            </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">11 min sec 56</a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>Fretting Hand Muting </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">20 min 20 sec </a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>Introduction to Playing By Ear</p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">41 min 13 sec</a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>Fingerpicking Guitar - An Introduction
                            </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">03:56</a>
                        </div>
                    </div>
                    
                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p> How To Learn & Practice a Song Step-By-Step - Amazing Grace
                            </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">30 min 2 sec</a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>How To Read Chord Charts
                            </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">4 min 34 sec</a>
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <input type="radio" name="accord" id="fifth">
                <label for="fifth">
                    <div class="course_content_1 content-color4">
                        <div class="course_1_left">
                            <i class="fa-solid fa-chevron-down"></i>
                            <p class="head_course_1">Basic Guitar electric techniques</p>
                        </div>
                        <div class="course_1_right">
                            <p>6 lectures • 2 hr 34 secd</p>
                        </div>
                    </div>
                </label>
    
                <div class="contents">
                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>Basic Guitar electric techniques Part - 1
                            </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">9 min 45 sec</a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>Basic Guitar electric techniques Part - 2
                            </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">40 min 23 sec</a>
                        </div>
                    </div>

                    <div class="main_cont_1">
                        <div class="cont_det_1">
                            <i class="fa-regular fa-square-caret-right"></i>
                            <p>Basic Guitar electric techniques Part - 3
                            </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">37 min 34 sec</a>
                        </div>
                    </div>

                    <li>
                        <!-- <input type="radio" name="accord" id="fourth">
                        <label for="fourth">
                            <div class="course_content_1">
                                <div class="course_1_left">
                                    <i class="fa-solid fa-chevron-down"></i>
                                    <p class="head_course_1">MySQL</p>
                                </div>
                                <div class="course_1_right">
                                    <p>6 lectures • 2 hr 41 min</p>
                                </div>
                            </div> -->
                        </label>
            

        </ul>

        <!-- <div class="course_content_1">
            <div class="course_1_left">
                <i class="fa-solid fa-chevron-down"></i>
                <p class="head_course_1">Course Content</p>
            </div>
            <div class="course_1_right">
                <p>5 lectures • 87 min</p>
            </div>

        </div>
        <div class="course_content_1">
            <div class="course_1_left">
                <i class="fa-solid fa-chevron-down"></i>
                <p class="head_course_1">The Brief</p>
            </div>
            <div class="course_1_right">
                <p>5 lectures • 87 min</p>
            </div>

        </div>
        <div class="course_content_1">
            <div class="course_1_left">
                <i class="fa-solid fa-chevron-down"></i>
                <p class="head_course_1">Type, Color & Icon Introduction</p>
            </div>
            <div class="course_1_right">
                <p>5 lectures • 87 min</p>
            </div>

        </div>
        <div class="course_content_1">
            <div class="course_1_left">
                <i class="fa-solid fa-chevron-down"></i>
                <p class="head_course_1">Prototyping a App - Introduction</p>
            </div>
            <div class="course_1_right">
                <p>5 lectures • 87 min</p>
            </div>

        </div>
        <div class="course_content_1">
            <div class="course_1_left">
                <i class="fa-solid fa-chevron-down"></i>
                <p class="head_course_1">Wireframe Feedback</p>
            </div>
            <div class="course_1_right">
                <p>5 lectures • 87 min</p>
            </div>

        </div> -->








    </section>

    <!-- Course Content Section Ended -->



    <!-- Instructor section Started -->


    <div class="instructor_c common_c">
        <p class="inst_name_c">Instructor</p>
        <div class="main_info_c">
            <div class="img_inst_c">
                <img src="../Images/Digital_inst_final.jpg" alt="">
            </div>

            <div class="info_inst_c">
                <p class="name_c">Erich Andreas</p>
                <p class="sale_c">#1 Guitar Lessons! 40+Years, 100,000s of Students</p>

                <div class="rate_inst_c">
                    <div class="fiex_inst_c">
                        <div class="color_div_c">
                            <i class="fa-solid fa-star"></i><span>4.5</span>
                        </div>
                        <p>Instructor Rating</p>
                    </div>
                    <div class="fiex_inst_c">
                        <i class="fa-regular fa-comment-dots"></i>
                        <p>23,982 Reviews</p>
                    </div>
                    <div class="fiex_inst_c">
                        <i class="fa-solid fa-user"></i>
                        <p>123 Students</p>
                    </div>
                    <div class="fiex_inst_c">
                        <i class="fa-regular fa-clock"></i>
                        <p>26 Course</p>
                    </div>
                </div>
            </div>
        </div>


        <p class="p_inst_c">Erich has been playing/teaching guitar for nearly 30 years.
             By personally teaching 100s of one-on-one students and 1000s of guitar lessons
              within the last 30+ years Erich has proven to maximize any students' results 
              by providing them with the clearest step-by-step system to playing guitar.</p><br>

        <p class="p_inst_c">Erich brought his guitar teachings online, AKA Youtube, in 2008, and 
            since then his Youtube Channels have accumulated more than 784,000 subscribers and
             have also received more than 100 Million Views across his channels.</p>
    </div>



    <!-- Instructor section Ended -->

 
    <!-- Review section started -->

    <section class="review_section_c common_c">
        <h3>Reviews</h3>

        <div class="review_first_c">
            <div class="review_div">
                <p class="A_T">A.T</p>
            </div>

            <div class="review_det">
                <p class="review_ali">Olli P. <span>9 Days ago</span></p>
                <p class="review_LMS">The best course ever</p>
                <p class="review_para">Great and most comprehensive course on guitar
                     that I've found. I'm a seasoned guitar player but still learned new stuff
                      and filled gaps in my knowledge. I highly recommend this course!</p>

                <div class="review_was">
                    <a href="#" class="review_que">Was this review helpful?
                    </a>
                    <button class="review_btn1">Yes</button>
                    <button class="review_btn2">No</button>
                </div>
            </div>
        </div>

        <div class="line_review_c"></div>


        <div class="review_first_c">
            <div class="review_div">
                <p class="A_T">A.T</p>
            </div>

            <div class="review_det">
                <p class="review_ali">Jarratt S. <span>3 Days ago</span></p>
                <p class="review_LMS">The course ever seen tood Good</p>
                <p class="review_para">This course is above most other content I've seen. 
                    It gave me the most in-depth learning on Photoshop. I wish I could 
                    find this level of technical direction for Affinity photo. This course
                     really takes you from nothing to using
                </p>

                <div class="review_was">
                    <a href="#" class="review_que">Was this review helpful?
                    </a>
                    <button class="review_btn1">Yes</button>
                    <button class="review_btn2">No</button>
                </div>
            </div>
        </div>

        <div class="line_review_c"></div>


        <div class="review_view_all">
            <a href="#" class="review_view">View All Reviews</a>
        </div>


        <div class="write_review_section">
            <p class="write_R">Write a Review</p>
            <p class="write_w">What is it like to Course?</p>
            <div class="reating_class_s">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <p class="write_w1">Review Title</p>
            <input class="write_input_1" type="text" placeholder="Great Course">

            <p class="write_w2">Review Content</p>
            <textarea class="write_input_2" type="text" placeholder="Message" rows="8"></textarea>
        </div>

        <button class="first_btn_w">Add To Cart</button><br>
    </section>


    <!-- Review section Ended -->
<!-- Footer Section Starts -->

<?php
    include("footer.php");
?>

<!-- Footer Section Ends -->

</body>
<script src="javascript.js">
    </script>

</html>