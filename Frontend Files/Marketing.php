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

    <!-- navbar Section Started  -->
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
                        <p class="main_heading_c">Online Marketing: SEO & Social Media Marketing Strategy</p>

                        <p class="secondery_heading_c">2022 growth hacking with top web marketing and Internet
                             marketing strategies: Social media marketing strategies + SEO</p>
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
                                <p>21,234 enrolled on this course</p>
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
                        <div class="tufan_img_c">
                            <img src="Image/Person_9.jpg" alt="">
                        </div>
                        <div class="tufan_name_c">
                            <p>Ali Tufan</p>
                        </div>
                    </div>
                </Section>
            </div>
            <!-- Left Section ended -->

            <!-- Right Section started -->
            <div class="right_section_div">
                <div class="right_section_c">
                    <div class="right_img_c">
                        <img src="../Images/course2.png" alt="">  
                    <!-- <img class="Image_c" src="/Image/course2.png" alt=""> -->
                    </div>

                    <div class="right_details_c">
                        <div class="after_img_c">
                            <div class="reating_right_c">
                                <div class="Course_price">
                                    <div class="first_rate_c price">
                                        <p>₹2,299</p>
                                    </div>
                                    <div class="second_rate_c price">
                                        <p>₹3,299</p>
                                    </div>
                                    <div class="Price_off">
                                        <p>10% off</p>
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
                                <a href="payment.php"><button class="second_btn_c"> Buy Now</button></a> 
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

            <p class="full_desc_c">Apply the most effective SEO and social media Internet marketing strategies
                 for 2022 and finally get the growth you've been hoping for!</div> 
                 <div>Lost in your marketing? Did you hire freelancers with no results? Not sure what to do next? </div>
                 <div>TThis course will set you on the right path, help you choose the most effective marketing
                     strategies, and show you how to implement them for your business. </div></p>

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
                    <p>Reach 1,000,000+ people with your marketing by combining the savviest SEO 
                        and social media strategies</p>
                </div>
                <div class="first_flex_c">
                    <i class="fa-regular fa-circle-check"></i>
                    <p>Top social media marketing strategies to brand yourself and your business as an authority</p>
                </div>
                <div class="first_flex_c">
                    <i class="fa-regular fa-circle-check"></i>
                    <p>Join my office hours and get personal help from me (rare opportunity)</p>
                </div>
                <div class="first_flex_c">
                    <i class="fa-regular fa-circle-check"></i>
                    <p>SEO and social media courses in one great online marketing course.</p>
                </div>
            </div>

            <div class="second_flex_c">
                <div class="first_flex_c">
                    <i class="fa-regular fa-circle-check"></i>
                    <p>Get ahead of your competitors with creative SEO strategies like voice SEO for 2022</p>
                </div>
                <div class="first_flex_c">
                    <i class="fa-regular fa-circle-check"></i>
                    <p>Get publicity and press coverage from large publications, radio shows, and podcasts</p>
                </div>
                <div class="first_flex_c">
                    <i class="fa-regular fa-circle-check"></i>
                    <p>Increase the sales conversion rate of your site visitors for immediate revenue boost</p>
                </div>
            </div>
        </div>
    </section>



    <!-- Learn Section Started -->



    <!-- Requirements section Started -->


    <div class="heading_req_c common_c">
        <h2>Requirements</h2>
        <ul class="list_req_c">
            <li class="first_list_req">Get ready to grow your business using smartest and
                 most effective strategies for 2019
            </li>
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
                            <p class="head_course_1">Introduction</p>
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
                            <p>Long-tail vs. short-tail SEO keywords
                            </p>
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
                            <p>Introduction to the Google keyword tool for SEO
                            </p>
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
                            <p>Three other SEO keyword tools - just to give you more options
                            </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">3 min 24 sec</a>
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
                            <p class="head_course_1">strategies of popular business Types</p>
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
                            <p>Section introduction - how SEO applies to YOUR business
                            </p>
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
                            <p>Ecommerce example for SEO
                            </p>
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
                            <p>How to promote a local service</p>
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
                            <p>Building long-term keyword authority in your niche keywords
                            </p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">6 min 16 sec</a>
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
                            <p class="head_course_1">Setting up your Google Search Console 
                                </p>
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
                            <p>Creating your sitemap.xml
                            </p>
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
                            <p>Submitting new URLs and checking for page status and indexing</p>
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
                            <p>Where your pages are ranking and page/query performance
                            </p>
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
                            <p>User experience section of Google Search Console
                            </p>
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
                            <p>Google Analytics introduction - useful in all your online marketingy</p>
                        </div>
                        <div class="cont_link_1">
                            <!-- <a href="#">Preview</a>
                            <a href="#">5 question</a> -->
                            <a href="#">31 min 59 sec</a>
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
                            <p class="head_course_1">Image Processing</p>
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
                            <p>Additional SEO strategies</p>
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
                            <p>Google SEO trends for 2022 and what to focus on
                            </p>
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
                            <p>Advanced intent-match boosting strategy for ranking higher in Google search</p>
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
                            <p>Are views a ranking factor?
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
                            <p> Leveraging recommendation algorithms</p>
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
                            <p>Common question: Should you have a blog?
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
                            <p class="head_course_1">On-page & Off-page SEO</p>
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
                            <p>Common SEO mistakes: Don't make these</p>
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
                            <p>SEO Quake Chrome plugin to research competition
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
                            <p>SEO KeywordOptimizer tool for on-page text optimization</p>
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
                <img src="/Image/inst_1.png" alt="">
            </div>

            <div class="info_inst_c">
                <p class="name_c">Alex Genadinik</p>
                <p class="sale_c">Business, Entrepreneurship, SEO, Marketing, Amazon, YouTube</p>

                <div class="rate_inst_c">
                    <div class="fiex_inst_c">
                        <div class="color_div_c">
                            <i class="fa-solid fa-star"></i><span>4.5</span>
                        </div>
                        <p>Instructor Rating</p>
                    </div>
                    <div class="fiex_inst_c">
                        <i class="fa-regular fa-comment-dots"></i>
                        <p>23,987 Reviews</p>
                    </div>
                    <div class="fiex_inst_c">
                        <i class="fa-solid fa-user"></i>
                        <p>692 Students</p>
                    </div>
                    <div class="fiex_inst_c">
                        <i class="fa-regular fa-clock"></i>
                        <p>15 Course</p>
                    </div>
                </div>
            </div>
        </div>


        <p class="p_inst_c">Originally from Ukraine. 3-time bestselling Amazon author with some 
            of my books used in universities and high schools across the country.


        </p><br>

        <p class="p_inst_c">I like playing soccer, chess, dabbling in philosophy, creating music, and writing lyrics. Plus, I am always daydreaming about finally getting a dog (a rescue from a shelter, of course).</p>
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
                <p class="review_ali">Sabrina W. <span>1 Days ago</span></p>
                <p class="review_LMS">The best marketing course</p>
                <p class="review_para">You don't learn any systematic techniques that you could
                     apply to your own business. It's more of a trial-and-error storytelling 
                     of the author. When it came to Facebook Marketing: I think he himself had a
                      bit more than 100 Followers? He went on showing that his posts weren't 
                      really successful but when he posted a funny, unrelated video he got more
                       engagement. And yeah. That's the big insight. Way to go. Pixels, Custom 
                       Conversions, FB Event Manager?! Never heard of. Some of his videos are 
                       over 5 year old Youtube Tutorials that he dropped into the course.</p>

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
                <p class="review_ali">Payal G.. <span>3 Days ago</span></p>
                <p class="review_LMS">The best marketing course</p>
                <p class="review_para">His style of explaining in detail and delivery of speech is commendable.
                    <div>This course offers a lot of useful knowledge in digital marketing. Easy to understand,
                         even for beginners.</div>
                   
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

<!-- Footer Section Starts -->
<?php
    include("footer.php");
?>

<!-- Footer Section Ends -->
    <!-- Review section Ended -->
    <script>
    const cartButtons = document.querySelectorAll('.cart-button');

    cartButtons.forEach(button => {
	button.addEventListener('click', cartClick);
    });

    function cartClick() {
	let button = this;
	button.classList.add('clicked');
    }
</script>

</body>
<script src="javascript.js">
    </script>

</html>