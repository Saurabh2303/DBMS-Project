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
    <title>Learn Anything That You Want</title>
    <!-- Costum Css Link -->
    <link rel="stylesheet" href="StudyLab.css" type="text/css">
    <!-- Font Awesomr CDN link -->
    <script src="https://kit.fontawesome.com/e8e9c02a1b.js" crossorigin="anonymous"></script>
    <!-- link for the favicon -->
    <link rel="icon" href="../Images/Favicon (2).png">
    <!-- Link of Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Festive&family=Merriweather:ital,wght@0,300;0,900;1,300;1,900&family=Poppins:wght@400;500;600&family=Roboto+Slab:wght@700&family=Roboto:ital,wght@0,100;0,300;0,400;0,700;1,100;1,300;1,500&display=swap" rel="stylesheet">
    <!-- For Typing Effect -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
</head>
<body>

    <!-- <div class="loader_wapper" id="preloader">
        <svg xmlns="http://www.w3.org/2000/svg" height="128px" width="128px" viewBox="0 0 128 128" class="pl">
            <defs>
              <linearGradient y2="1" x2="0" y1="0" x1="0" id="pl-grad">
                <stop stop-color="hsl(193,90%,55%)" offset="0%"></stop>
                <stop stop-color="hsl(223,90%,55%)" offset="100%"></stop>
              </linearGradient>
            </defs>
            <circle stroke-linecap="round" stroke-width="16" stroke="hsla(0,10%,10%,0.1)" fill="none" cy="64" cx="64" r="56" class="pl__ring"></circle>
            <path stroke-dashoffset="10" stroke-dasharray="44 1111" stroke-linejoin="round" stroke-linecap="round" stroke-width="16" stroke="url(#pl-grad)" fill="none" d="M92,15.492S78.194,4.967,66.743,16.887c-17.231,17.938-28.26,96.974-28.26,96.974L119.85,59.892l-99-31.588,57.528,89.832L97.8,19.349,13.636,88.51l89.012,16.015S81.908,38.332,66.1,22.337C50.114,6.156,36,15.492,36,15.492a56,56,0,1,0,56,0Z" class="pl__worm"></path>
          </svg>
    </div> -->
   
<!-- Navbar Starts -->
    <?php
        include("header.php")
    ?>
<!-- Navbar Ends -->

<!-- Home Section Starts -->

<div class="home" id="home">

        <div class="h-right">
            <div class="h-details">
                <h4 class="better">FOR A BETTER FUTURE</h4>
                <h1 class="heading">Master The Skills To <br> Uplift Your <span class="orange-txt typing">Career</span></h1>
                <p class="para">Flexible easy to access learning opportunities can bring a significant <br> change in how individuals prefer to learn!</p>
            </div>
        
            <div class="h-btn">
            <?php 
            if (isset($_SESSION["Fname"])){ ?>
                <a href="courses.php">
                    <button class="h-btn1">Explore Courses</button>
                </a>
                
            <?php } else { ?>
                <a href="StudyLab_Signup.php">
                    <button class="h-btn1"> Join for Free</button>
                </a>
            <?php }
            ?>   
                <a href="courses.php">
                    <button class="h-btn2">Find Courses</button>
                </a>
                
            </div>

            <div class="stat">
                <div class="i1">
                    <i class="fas fa-graduation-cap icons"></i>
                    <p class="s-details">Over 12 million students</p>
                </div>

                <div class="i1">
                    <i class="fas fa-play icons"></i>
                    <p class="s-details">More than 60,000 courses</p>
                </div>
            </div>
    </div>

            <div class="h-left">

                <img src="../Images/home2.png" alt="">

            </div>

</div>
    
<!-- Home section Ends -->


<!-- company logo section start-->

    <section class="logos">
        <div class="head">
            <p>Trusted by the <span class="world"> world’s best</span></p>
        </div>
        <div class="company">
            <div>
                <img src="../Images/img_1.png" class="img_class " alt="">
            </div>
            <div>
                <img src="../Images/img_2.png" class="img_class amd" alt="">
            </div>
            <div>
                <img src="../Images/img_3.png"  class="img_class Img_33" alt="">
            </div>
            <div>
                <img src="../Images/img_4.png" class="img_class dro" alt="">
            </div>
            <div>
                <img src="../Images/img_5.png" class="img_class logitech" alt="">
            </div>
            <div>
                <img src="../Images/img_6.png"  class="img_class Img_3" alt="">
            </div>
        </div>
    </section>

<!-- company logo section end-->

</section>

<!-- Start your Learning Journey Today!  end-->



<!-- how it works starts -->

<div class="how">
    <div class="work">
        <h2>How it works?</h2>
        <p>10,000+ unique online course list designs</p>
    </div>

    <div class="works">

        <div class="how-work">
            
            <div class="circle">
                <div class="num1">
                    <p class="number">01</p>
                </div>
                
                <img src="../Images/work1.png" alt="">
            </div>
            <div class="how-details">
                <p>Browse courses from <br> our expert <br> contributors.</p>
            </div>
        </div>

        <div class="arrow1">
            <img src="../Images/arrow1.png" alt="">
        </div>

        <div class="how-work">
            <div class="circle">
                <div class="num1">
                    <p class="number">02</p>
                </div>
                <img src="../Images/work2.png" alt="">
            </div>
            <div class="how-details">
                <p>Purchase quickly and <br> securely.</p>
            </div>
        </div>

        <div class="arrow1">
            <img src="../Images/arrow2.png" alt="">
        </div>

        <div class="how-work">
            <div class="circle">
                <div class="num1">
                    <p class="number">03<p>
                </div>
                <img src="../Images/work3.png" alt="">
            </div>
            <div class="how-details">
                <p>That’s it! Start <br> learning right away.</p>
            </div>
        </div>
    </div>


</div>

<!-- how it works Ends -->


<!-- Categories Section Starts -->

    <div class="cate-container" id="categories">

            <div class="cat-details">
                    <h1>
                        Explore top featured <span class="Journey" style="color:#f60 ;">Categories</span> 
                    </h1>
                     <p>Choose form the top categories of your Interest.</h4> 
            </div>

        <div class="categories">
                <div class="cate-1 cate-bg1">
                    <div class="cate-icon ">
                        <img src="../Images/datascience.png" alt="">
                    </div>

                    <div class="cate-details">
                        <h4 class="cate-name">Data Science</h4>
                        <p>22 Courses</p>
                   </div>
                    
                </div>

                <div class="cate-1 cate-bg3">
                    <div class="cate-icon ">
                        <img src="../Images/software.png" alt="">
                    </div>
                   
                    <div class="cate-details">
                        <h4 class="cate-name">It & Software</h4>
                        <p>503+ Courses</p>
                   </div>
                </div>

                <div class="cate-1 cate-bg2">
                    <div class="cate-icon">
                        <img src="../Images/engineering.png" alt="">
                    </div>
                   
                    <div class="cate-details">
                        <h4 class="cate-name">Engineering</h4>
                        <p>73+ Courses</p>
                   </div>
                </div>

                <div class="cate-1 cate-bg4">
                    <div class="cate-icon">
                        <img src="../Images/Finance.png" alt="">
                    </div>
                   
                    <div class="cate-details">
                        <h4 class="cate-name">Finance</h4>
                        <p>763+ Courses</p>
                   </div>
                </div>

                <div class="cate-1 cate-bg2">
                    <div class="cate-icon ">
                        <img src="../Images/medical.png" alt="">
                    </div>
                   
                    <div class="cate-details">
                        <h4 class="cate-name">Medical</h4>
                        <p>253+ Courses</p>
                   </div>
                </div>

                <div class="cate-1 cate-bg4">
                    <div class="cate-icon">
                        <img src="../Images/Architech.png" alt="">
                    </div>
                   
                    <div class="cate-details">
                        <h4 class="cate-name">Architecture</h4>
                        <p>343+ Courses</p>
                   </div>
                </div>

                <div class="cate-1 cate-bg1">
                    <div class="cate-icon">
                        <img src="../Images/ArtDesign.png" alt="">
                    </div>
                    
                    <div class="cate-details">
                        <h4 class="cate-name">Art & Design</h4>
                        <p>913+ Courses</p>
                   </div>
                </div>

                <div class="cate-1 cate-bg3">
                    <div class="cate-icon">
                        <img src="../Images/photography.png" alt="">
                    </div>
                    <div class="cate-details">
                        <h4 class="cate-name">Photography</h4>
                        <p>333+ Courses</p>
                   </div>
                </div>
        </div>
           
        <div class="more_cate">
            <a href="Categories.php"> <button class="more-categories">View more Categories<i class="fa-solid fa-arrow-right-long"></i></button></a>
        </div>  
        
    </div>

<!-- Categories Section Ends -->

<!-- Courses Section Starts -->
    
    <div class="course-container" id="course">

            <div class="course-head">
                <h1 class="course-heading">Our Most Popular <span class="Journey" style="color:#f60 ;">Courses</span></h1>
                <p>10,000+ unique online course list designs</p>
            </div>
        
    </div>

        <div class="card-container">
            <div class="course1">
<a href="DigitalMarketing.php">
                <div class="course-img">
                    <img src="../Images/course1.png" alt="">
                </div>
            <div class="course-details">
                <div class="ratings">
                    <p>Ratings</p>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                
                    <p>4/5</p>
                </div>
                <p class="title">Advanced Certificate in Digital Marketing and Communication</p>
            </div>   

            <div class="detail2">
                <div class="lessions">
                    <i class="far fa-file-alt c-icon"></i>
                    <p>6 lessons</p>
                </div>
                <div class="lessions">
                    <i class="far fa-clock c-icon"></i>
                    <p>3h 56m</p>
                </div>
                <div class="lessions">
                    <i class="fas fa-signal c-icon"></i>
                    <p>Beginner</p>
                </div>
                
            </div>

            <div class="line"> </div>

            <div class="teacher">
        
                <p>Ritesh Sherekar</p>

                <div class="price">
                    <p class="fake-p">₹2,299</p>
                    <p class="real-p">₹499</p>

                </div>
            </div>
        </a>                
            </div>

            <div class="course1">
<a href="Marketing.php">
                <div class="course-img">
                    <img src="../Images/course2.png" alt="">
                </div>
            <div class="course-details">
                <div class="ratings">
                    <p>Ratings</p>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                    </div>
                
                    <p>4.5/5</p>
                </div>
                <p class="title">Online Marketing: SEO & Social Media Marketing Strategy</p>
            </div>   

            <div class="detail2">
                <div class="lessions">
                    <i class="far fa-file-alt c-icon"></i>
                    <p>6 lessons</p>
                </div>
                <div class="lessions">
                    <i class="far fa-clock c-icon"></i>
                    <p>3h 56m</p>
                </div>
                <div class="lessions">
                    <i class="fas fa-signal c-icon"></i>
                    <p>Beginner</p>
                </div>
                
            </div>

            <div class="line"> </div>

            <div class="teacher">
                <p>Ritesh Sherekar</p>

                <div class="price">
                    <p class="fake-p">₹2,299</p>
                    <p class="real-p">₹499</p>

                </div>
            </div>
</a>                
            </div>
  
    <div class="course1">
        <a href="Photoshop.php">
                <div class="course-img">
                    <img src="../Images/course5.png" alt="">
                </div>
            <div class="course-details">
                <div class="ratings">
                    <p>Ratings</p>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                
                    <p>4/5</p>
                </div>
                <p class="title">Photoshop Master Course: </br> Beginner to Photoshop Pro</p>
            </div>   

            <div class="detail2">
                <div class="lessions">
                    <i class="far fa-file-alt c-icon"></i>
                    <p>6 lessons</p>
                </div>
                <div class="lessions">
                    <i class="far fa-clock c-icon"></i>
                    <p>3h 56m</p>
                </div>
                <div class="lessions">
                    <i class="fas fa-signal c-icon"></i>
                    <p>Beginner</p>
                </div>
                
            </div>

            <div class="line"> </div>

            <div class="teacher">
                <p>Ritesh Sherekar</p>

                <div class="price">
                    <p class="fake-p">₹2,299</p>
                    <p class="real-p">₹499</p>

                </div>
            </div>
        </a>    
    </div>
  
            <div class="course1">
            <a href="Guitar.php">
                <div class="course-img">
                    <img src="../Images/guitar.jpg" alt="">
                </div>
            <div class="course-details">
                <div class="ratings">
                    <p>Ratings</p>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                
                    <p>4/5</p>
                </div>
                <p class="title">Complete Guitar Lessons System - Beginner to Advanced</p>
            </div>   

            <div class="detail2">
                <div class="lessions">
                    <i class="far fa-file-alt c-icon"></i>
                    <p>6 lessons</p>
                </div>
                <div class="lessions">
                    <i class="far fa-clock c-icon"></i>
                    <p>3h 56m</p>
                </div>
                <div class="lessions">
                    <i class="fas fa-signal c-icon"></i>
                    <p>Beginner</p>
                </div>
                
            </div>

            <div class="line"> </div>

            <div class="teacher">
    
                <p>Yash Wasankar</p>

                <div class="price">
                    <p class="fake-p">₹2,299</p>
                    <p class="real-p">₹499</p>

                </div>
               
            </div>
            </a>  
        </div>
            <div class="course1">
            <a href="WebDevolopment1.php">
                <div class="course-img">
                    <img src="../Images/course4.png" alt="">
                </div>
            <div class="course-details">
                <div class="ratings">
                    <p>Ratings</p>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                    </div>
                
                    <p>4.5/5</p>
                </div>
                <p class="title">The Complete Web Developer in 2023: Zero to Mastery</p>
            </div>   

            <div class="detail2">
                <div class="lessions">
                    <i class="far fa-file-alt c-icon"></i>
                    <p>6 lessons</p>
                </div>
                <div class="lessions">
                    <i class="far fa-clock c-icon"></i>
                    <p>3h 56m</p>
                </div>
                <div class="lessions">
                    <i class="fas fa-signal c-icon"></i>
                    <p>Beginner</p>
                </div>
                
            </div>

            <div class="line"> </div>

            <div class="teacher">
                <p>Ritesh Sherekar</p>

                <div class="price">
                    <p class="fake-p">₹2,299</p>
                    <p class="real-p">₹499</p>

                </div>
            </div>
            </a>   
            </div>

            <div class="course1">
                <a href="GraphicDesign.php">
                <div class="course-img">
                    <img src="../Images/graphicdesign.png" alt="">
                </div>
            <div class="course-details">
                <div class="ratings">
                    <p>Ratings</p>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                
                    <p>4/5</p>
                </div>
                <p class="title">The Complete Graphic Design Theory for Beginners Course</p>
            </div>   

            <div class="detail2">
                <div class="lessions">
                    <i class="far fa-file-alt c-icon"></i>
                    <p>6 lessons</p>
                </div>
                <div class="lessions">
                    <i class="far fa-clock c-icon"></i>
                    <p>3h 56m</p>
                </div>
                <div class="lessions">
                    <i class="fas fa-signal c-icon"></i>
                    <p>Beginner</p>
                </div>
                
            </div>

            <div class="line"> </div>

            <div class="teacher">
                <p>Saurabh Wankhade</p>

                <div class="price">
                    <p class="fake-p">₹2,299</p>
                    <p class="real-p">₹499</p>

                </div>
            </div>
            </a>  
            </div>

            <div class="course1">
            <a href="Hacking.php">
                <div class="course-img">
                    <img src="../Images/hacking.jpg" alt="">
                </div>
            <div class="course-details">
                <div class="ratings">
                    <p>Ratings</p>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                    </div>
                
                    <p>4.5/5</p>
                </div>
                <p class="title">The Complete Ethical Hacking Course: Beginner to Advanced!</p>
            </div>   

            <div class="detail2">
                <div class="lessions">
                    <i class="fas fa-book c-icon"></i>
                    <p>6 lessons</p>
                </div>
                <div class="lessions">
                    <i class="fas fa-book c-icon"> </i>
                    <p>3h 56m</p>
                </div>
                <div class="lessions">
                    <i class="fas fa-book c-icon"></i>
                    <p>Beginner</p>
                </div>
                
            </div>

            <div class="line"> </div>

            <div class="teacher">

                <p>Saurabh Wankhade</p>

                <div class="price">
                    <p class="fake-p">₹2,299</p>
                    <p class="real-p">₹499</p>

                </div>
            </div>
            </a>   
            </div>

            <div class="course1">
            <a href="Accounting.php">  
                <div class="course-img">
                    <img src="../Images/Accounting1.jpg" alt="">
                </div>
            <div class="course-details">
                <div class="ratings">
                    <p>Ratings</p>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                
                    <p>4/5</p>
                </div>
                <p class="title">Learn Accounting: From Beginner to Advanced!</p>
            </div>   

            <div class="detail2">
                <div class="lessions">
                    <i class="far fa-file-alt c-icon"></i>
                    <p>6 lessons</p>
                </div>
                <div class="lessions">
                    <i class="far fa-clock c-icon"></i>
                    <p>3h 56m</p>
                </div>
                <div class="lessions">
                    <i class="fas fa-signal c-icon"></i>
                    <p>Beginner</p>
                </div>
                
            </div>

            <div class="line"> </div>

            <div class="teacher">
                <p>Khushi Makwane</p>

                <div class="price">
                    <p class="fake-p">₹2,299</p>
                    <p class="real-p">₹499</p>

                </div>
            </div>
            </a>    
            </div>
    
           
    </div>
    <div class="more_course">
        <a href="courses.php"> <button class="view_more">View more Courses<i class="fa-solid fa-arrow-right-long btn-arrow"></i></button></a>
    </div>  

<!-- Courses Section Ends -->


<!-- Join section Starts -->

<div class="join-container">

    <div class="join_inner">

        <div class="join_left">

            <div class="join_head">
                <h1>Learn  <span>new skills</span>  when <br> and where you like.</h1>
                <p>Use the list below to bring attention to your product’s key
                    differentiator.</p>
            </div>

            <div class="join_check">
                <div class="join_tick">
                    <i class="fas fa-check  tick_icon"></i>
                    <p>Hand-picked authors</p>
                </div>

                <div class="join_tick">
                    <i class="fas fa-check tick_icon"></i>
                    <p>Easy to follow curriculum</p>
                </div>

                <div class="join_tick">
                    <i class="fas fa-check tick_icon"></i>
                    <p>Free courses</p>
                </div>

                <div class="join_tick">
                    <i class="fas fa-check tick_icon"></i>
                    <p>Money-back guarantee</p>
                </div>
            </div>

            <div class="join_btn">
                <a href="StudyLab.php"> <button class="joinbtn"> Join Now</button></a>
            </div>
    
        </div>
    
    
        <div class="join_right">
            <img src="../Images/Join_img.png" alt="">
    
        </div>

    </div>




</div>

<!-- Join section Ends -->



<!-- teacher Section Starts -->
<div class="inst_outer">
    <div class="inst_inner">
        <div class="upper">
            <div class="inst_head">
                <h1>Learn from the <span>best instructors</span> </h1>
                <p>Learn the expert skill from an expert</p>
            </div>
       
            <div class="inst_btn">
                <a href=""><button class="inst_button">View All instructors<i class="fas fa-long-arrow-alt-up tilt "></i></button></a>
            </div>
        </div>  
    </div>
    

    <div class="inst-container">
                <div class="inst-card">
                    <div class="inst-img">
                        <img src="../Images/new _inst.jpg" alt="">
                    </div>
            
                    <div class="inst-details">
                        <div class="name"><p>Dhanashri deshmukh</p></div>
                        <p>Web Devoloper</p>
                    </div>
                    
                    <div class="inst-icons">
                        <i class="fa-brands fa-facebook-messenger inst-icon"></i>
                        <i class="fa-brands fa-twitter inst-icon"></i>
                        <i class="fa-brands fa-linkedin-in inst-icon"></i>    
                        <i class="fa-solid fa-envelope inst-icon"></i>
                    </div> 
                </div>
                

                <div class="inst-card">
                    <div class="inst-img">
                        <img src="../Images/new_inst2 (2).jpg" alt="">
                    </div>
            
                    <div class="inst-details">
                        <div class="name"><p>Saurabh wankhade</p></div>
                        <p>Web Devoloper</p>
                      
                    </div>
                    <div class="inst-icons">
                        <i class="fa-brands fa-facebook-messenger inst-icon"></i>
                        <i class="fa-brands fa-twitter inst-icon"></i>
                        <i class="fa-brands fa-linkedin-in inst-icon"></i>    
                        <i class="fa-solid fa-envelope inst-icon"></i>
                    </div> 
                </div>

                <div class="inst-card">
                    <div class="inst-img">
                        <img src="../Images/new_inst3.jpg" alt="">
                    </div>
            
                    <div class="inst-details">
                        <div class="name"><p>Saurabh Wankhade</p></div>
                        <p>Web Devoloper</p>
                       
                    </div>
                    <div class="inst-icons">
                        <i class="fa-brands fa-facebook-messenger inst-icon"></i>
                        <i class="fa-brands fa-twitter inst-icon"></i>
                        <i class="fa-brands fa-linkedin-in inst-icon"></i>    
                        <i class="fa-solid fa-envelope inst-icon"></i>
                    </div> 
                </div>

                <div class="inst-card">
                    <div class="inst-img">
                        <img src="../Images/new_inst4.jpg" alt="">
                    </div>
            
                    <div class="inst-details">
                        <div class="name"><p>Saurabh Wankhade</p></div>
                        <p>Web Devoloper</p>
                      
                    </div>
                    <div class="inst-icons">
                        <i class="fa-brands fa-facebook-messenger inst-icon"></i>
                        <i class="fa-brands fa-twitter inst-icon"></i>
                        <i class="fa-brands fa-linkedin-in inst-icon"></i>    
                        <i class="fa-solid fa-envelope inst-icon"></i>
                    </div> 
                </div>
    </div>
</div>


    

<!-- teacher Section ends -->






<!-- learn any where Section starts -->

<div class="anywhere_container">

    <div class="anywhere_left">
        <img src="../Images/anywhere_image.png" alt="">
    </div>

    <div class="anywhere_right">
        <div class="anywhere_text">
            <h1> Learn From
               <span style="color: #f60;">Anywhere</span> 
            </h1>
            <p>Take classes on the go with the educrat app. Stream or download to watch on the plane, the subway, or wherever you learn best.</p> 
        </div>

        <div class="download_btn">
            <a href="">
                <div class="apple_dload">
                    <button>
                        <i class="fab fa-apple"></i>
                        <div class="download_name">
                            <p>Download on </p>
                            <p>Apple Store </p>
                        </div>
                    </button>
                </div>
            </a>
            <a href="">
                <div class="play_dload">
                    <button>
                        <i class="fab fa-google-play"></i>
                        <div class="download_name">
                            <p>Download on </p>
                            <p>Apple Store </p>
                        </div>
                    </button>
                </div>
            </a>
           
        </div>
    </div>


</div>
<!-- learn any where Section Ends -->

<!-- reviews section starts -->
<div class="review_section">
    <h1 class="review_head">What do Our <span style="color: #f60;">Students</span>  Says?</h1>

<div class="wrapper">
    
    <div class="box first_review">
      <i class="fas fa-quote-left quote"></i>
      <p>Yes, it is good, while it’s not a perfect platform to get in-depth knowledge about the subject with which you wish to build your career. StudyLab offers a wide variety of courses, both as a hobby and to hone your real-life skills which further helps to enhance your career..</p>
      <div class="content">
        <div class="info">
          <div class="name">Saurabh Wankhade</div>
          <div class="job">Designer | Developer</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="box">
      <i class="fas fa-quote-left quote"></i>
      <p>It's a great platform, although it's not ideal for getting in-depth knowledge about the subject that you are looking to improve your career. StudyLab offers many courses for both hobbyists and professionals who want to further their careers.</p>
      <div class="content">
        <div class="info">
          <div class="name">Yash Wasankar</div>
          <div class="job">YouTuber | Blogger</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="box">
      <i class="fas fa-quote-left  quote"></i>
      <p>StudyLab is a good platform for taking a different type of training or course here. In this platform, you get the different benefits of leaning and here you find the professional trainer who gives you the best guidance. I think Studylab gives you discounted courses at affordable prices.</p>
      <div class="content">
        <div class="info">
          <div class="name">Khushi Makwane</div>
          <div class="job">Freelancer | Advertiser</div>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
    
      </div>
    </div>

    
  </div>
</div>
<!-- reviews section ends -->

<!-- Footer Section Starts -->
<?php
    include("footer.php");
?>

<!-- Footer Section Ends -->










































<script>
//For typing effect on main section 
var typed=new Typed (".typing",
{
    strings:["Career.","Life.","Future."],
    typeSpeed:200,
    backSpeed:200,
    backDelay: 900,
    loop:true
}
)
   
</script>
</body>
    
</html>







