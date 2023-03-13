<!--Css After User Login Sucessfully -->

<style>
body::-webkit-scrollbar {
    width: 15px;
}
body::-webkit-scrollbar-thumb {
    background-color:#a5d8ff;
    
}

.Firstname{
font-size: 18px;
font-weight: 500;
}
.cart
{
    font-size: 22px;
    margin-right: 15px;
    padding: 8px 8px;
    background-color: #f7f7f7;
    border-radius: 5px;
    color: black;
    /* border: 2px solid black; */
    transition: all .3s ease ;
    cursor: pointer; 
    padding-top: 10px; 
}
.cart:hover
{
    color: #fff;
    background-color: #00B0FF;
    
   
}
.profile
{
    font-size: 22px;
    /* margin-right: 15px; */
    padding: 8px 10px;
    background-color: #f60;
    border-radius: 5px;
    color: #fff;
    border: 2px solid #f60;
    transition: all .3s ease ;
    cursor: pointer; 
    /* padding-top: 10px;  */

}
.profile:hover{
    border: 2px solid #f60; 
    color: #f60;
    background-color: #fff;
}
.submenu_wrap
{
    position: absolute;
    top: 100%;
    right: 2%;
    width: 350px;
    max-height:0px;
    overflow: hidden;
    transition:  max-height .6s;
}
.submenu_wrap.open_menu
{
    max-height:450px;
}
.submenu
{
    background-color: #fff;
    padding: 20px 20px 2px 20px;
    margin: 5px;
    border-radius: 10px;
}
.user_info
{
    display: flex;
    align-items: center;
    justify-content: center;
    
}
.Email
{
    font-size: 16px;
    font-weight: 500;
}
.submenu hr
{
    border: 0;
    height: 1px;
    width: 100%;
    background:#6440FB;
    margin: 5px 0px;
}
.submenu_link
{
    display: flex;
    align-items: center;
    text-decoration: none;
    /* color: #21225f; */
    margin: 15px 0px;

}
.submenu_link i
{
    background-color: #F5F7FE;
    padding: 10px;
    border-radius: 50%;
    color: #21225f;
}
.submenu_link p
{
   color: #000;
   font-weight: 500;
   width: 100%;
   transition: all ease .1s;
}
.submenu_link span
{
   color: #000;
   font-weight: 500;
   font-size: 20px;
   transition: all .1s;
}
.submenu_link:hover span
{
    transform: translateX(5px);
}
.submenu_link:hover p
{
   font-size: 17px;
}

/* For Search Icon in search field */
.search_logo
{
    color: #140342;    
}
.searchbtn
{
    border: none;
    background: none;
    cursor: pointer;
}
</style>
<?php 
if (isset($_SESSION["Fname"])){ ?>
       <div class="navbar">
            <div class="container1 flex">
                    <div class="logo flex">
                        <i class="fa-solid fa-code logo_icon"></i>
                        <a href="StudyLab.php">
                            <P class="logo_name"><Span class="skill">Study</Span>Lab</P>
                        </a>
                    </div>

                    <div class="links">
                        <a  href="Studylab.php" class="active">Home</a>
                        <a href="Categories.php">Categories</a>
                        <a href="courses.php">Courses</a>
                        <a href="contactUs.php">Contact</a>
                        <a href="AboutUs.php">About</a>
                       
                    </div>
                <form action="search.php" method="POST">
                    <div class="search flex">
                    <div class="">
                            <input type="text" class="Search_input" placeholder="What you want to learn?" required name="search_input" value="<?php if(isset($input)){echo $input;} ?>" >
                    </div>

                    <div class="">
                            <button class="searchbtn" name="search"> <i class="fa-solid fa-magnifying-glass search_logo"></i></button>
                           
                    </div>
                    
                    </div>
                </form>
                    <div class="buttons flex">
                        <!-- <a class="btn2" href="StudyLab_login.php" > <div >Login</div></a> -->
                        <?php
                            echo'<p class="Firstname"> Hello, '.$_SESSION['Fname'];'</p>';
                        ?>   
                    </div>
                    <div class="user_profile">
                        <a href="CourseCart.php">
                        <i class="fas fa-shopping-cart cart"></i>
                        </a>
                        <i class="far fa-user profile" onclick="toggleMenu()"></i>

                            <div class="submenu_wrap" id="sub_Menu">
                                <div class="submenu">
                                    <div class="user_info">
                                        <p> <?php
                                                 echo'<p class="Email"> User Email: '.$_SESSION['Umail'];'</p>';
                                            ?>  </p>
                                    </div>
                                    
                                    <hr>

                                    <a href="Profile.php" class="submenu_link">
                                        <i class="fas fa-user-alt"></i>
                                        <p>Edit profile</p>
                                        <span> > </span>
                                    </a>

                                    <a href="" class="submenu_link">
                                        <i class="fas fa-cog"></i>
                                        <p>Setting & Privacy</p>
                                        <span> > </span>
                                    </a>

                                    <a href="contactUs.php" class="submenu_link">
                                        <i class="fas fa-phone"></i>
                                        <p>Help & Support</p>
                                        <span> > </span>
                                    </a>

                                    <a href="Logout.php" class="submenu_link">
                                        <i class="fas fa-sign-out-alt"></i>
                                        <p>Logout</p>
                                        <span> > </span>
                                    </a>

                                </div>

                            </div>
                    </div>
                    <!-- <a href="Logout.php"><div class="btn1">Logout</div> </a> -->
            </div>    

    </div>

<?php } else { ?>
    <div class="navbar">
            <div class="container1 flex">
                    <div class="logo flex">
                        <i class="fa-solid fa-code logo_icon"></i>
                        <a href="StudyLab.php">
                            <P class="logo_name"><Span class="skill">Study</Span>Lab</P>
                        </a>
                    </div>

                    <div class="links">
                        <a  href="Studylab.php" class="active">Home</a>
                        <a href="Categories.php">Categories</a>
                        <a href="courses.php">Courses</a>
                        <a href="contactUs.php">Contact</a>
                        <a href="AboutUs.php">About</a>
                       
                    </div>

                <form action="search.php" method="POST">
                    <div class="search flex">
                       

                    <div class="">
                            <input type="text" class="Search_input" placeholder="What you want to learn? " required name="search_input">
                    </div>

                        <div class="">
                            <button class="searchbtn" name="search"> <i class="fa-solid fa-magnifying-glass search_logo"></i></button>
                           
                        </div>
                    
                    </div>

                </form>
                    
                    
                
                    <div class="buttons flex">
                        <a class="btn2" href="StudyLab_login.php" > <div >Login</div></a>
                        <a href="StudyLab_Signup.php"><div class="btn1">Sign up</div> </a>
                    </div>
            </div>    

    </div>
<?php }
?>



<script>
    let sub_Menu =document.getElementById("sub_Menu");

    function toggleMenu(){
        sub_Menu.classList.toggle("open_menu")
    }
</script>

