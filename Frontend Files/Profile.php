
<?php
    session_start();
    require("config.php");
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Section</title>

    <script src="https://kit.fontawesome.com/e8e9c02a1b.js" crossorigin="anonymous"></script>

  
    <link rel="stylesheet" href="StudyLab.css">
    <link rel="stylesheet" href="Profile.css">

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
<?php 

//Query To select all from Database
//$sql="SELECT * FROM user_profile";

//Query Fire To database
//$res=mysqli_query($connect,$sql);

// data strored in associated mannner
//$data=mysqli_fetch_assoc($res);


$selectQuery="SELECT * FROM `user_profile` WHERE `Email`='$_SESSION[Umail]'";	 
$selectdata=mysqli_query($connect,$selectQuery);
$data=mysqli_fetch_assoc($selectdata);

//Sessions Varibles to show data in input feilds
$_SESSION['UTmail']=$data['Email'];
$_SESSION['Phoneno']=$data['PhoneNo'];
$_SESSION['country']=$data['Country'];
$_SESSION['Gender']=$data['Gender'];
$_SESSION['Date']=$data['Date'];
$_SESSION['Address']=$data['Address'];
$_SESSION['City']=$data['City'];
$_SESSION['State']=$data['State'];
$_SESSION['PostalCode']=$data['PostalCode'];
$_SESSION['AboutMe']=$data['AboutMe'];
$_SESSION['Education']=$data['Education'];
$_SESSION['Skill']=$data['Skill'];


// echo"$_SESSION[UTmail]";
// echo"$_SESSION[Phoneno]";
// echo"$_SESSION[country]";
// echo"$_SESSION[Gender]";
// echo"$_SESSION[Date]";
// echo"$_SESSION[Address]";
// echo"$_SESSION[City]";
// echo"$_SESSION[State]";
// echo"$_SESSION[PostalCode]";
// echo"$_SESSION[AboutMe]";
// echo"$_SESSION[Education]";
// echo"$_SESSION[Skill]";




if(isset($_POST['savechanges']))
{

    extract($_POST);
    $PhoneNo=$_POST['phone'];
    $country=$_POST['country'];
    $gender=$_POST['gender'];
    $dateofbirth=date('Y-m-d',strtotime($_POST['dateofbirth']));
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $postcode=$_POST['postcode'];
    $aboutme=$_POST['aboutme'];
    $education=$_POST['education'];
    $skill=$_POST['skill'];
 
    $insertQuery="UPDATE `user_profile` SET `PhoneNo`='$PhoneNo',`Country`='$country',`Gender`='$gender',`Date`='$dateofbirth',`Address`='$address',`City`='$city',`State`='$state',`PostalCode`='$postcode',`AboutMe`='$aboutme',`Education`='$education',`Skill`='$skill' WHERE Email='$_SESSION[UTmail]'" ;

    $nameupdate="UPDATE `register` SET `User_id`='',`FirstName`='[value-2]',`LastName`='[value-3]',`Email`='[value-4]',`UserName`='[value-5]',`Password`='[value-6]',`Date`='[value-7]' WHERE `Email`='$_SESSION[Umail]'";
    $fetchresult=mysqli_query($connect,$insertQuery);

    if($fetchresult)
    {
        $updatesuccsess=1;
    }
   

    echo "<meta http-equiv='refresh'>";
}
 if(isset($_POST['upload']))
{   
    $image=$_FILES['image']['name']; 
    $upload="UPDATE `user_profile` SET  `image`='$image' WHERE Email='$_SESSION[UTmail]'";
    $upquery=mysqli_query($connect,$upload);
    $temp_name=$_FILES['image']['temp_name'];
    $UploadDir="Profile Photos";
    if($upquery)
    {
        move_uploaded_file($temp_name,$UploadDir.$image);
        echo"Image Uploaded Sucessfully";
    }
    else{
        echo"Image not Uploaded";
    }

    
} 

if(isset($_POST['delete']))
{
    $deleteuser="DELETE FROM `user_profile` WHERE Email='$_SESSION[UTmail]'";
    $regdelete="DELETE FROM `register` WHERE `Email`='$_SESSION[Umail]'";
    $Query=mysqli_query($connect,$regdelete);
    $queryrun=mysqli_query($connect,$deleteuser);
    session_unset();
    session_destroy();
    echo'<script>window.location.replace("StudyLab.php");</script>';
    
}


?>
    <!-- main form profile section started -->

    <section class="main_form common_c">
        <div class="UserProfile_section">

            <form action="" enctype="multipart/form-data" method="POST">
                    <div class="profile_bg">
                        <div class="userprofile">
                           <img src="../Images/User Profile.png" alt="" >
                        </div>  
                        <div class="profile_img">
                            <i class="far fa-images"></i>
                            <input type="file" id="file"  class="Choose File" accept="image/png, image/jpeg" name="image">
                            <label for="file" class="change" name="upload" >Change Profile</label>
                        </div>
                       
                          
                    </div>
            </form>
                    <div class="user_details">
                            <div class="Username">
                                <?php
                                     echo'<p class="Firstname"> Name :  '.$_SESSION['Fname'] .' '.$_SESSION['Lname'];'</p>';
                                ?>   
                            </div>
                            <!-- <div class="Username">
                                <p>Username: Saurabh1122</p>
                            </div> -->
                            <div class="Username">
                                <?php
                                     echo'<p class="Firstname"> Email Address :  '.$_SESSION['Umail'];'</p>';
                                ?>  
                            </div>   
                    </div>
                <form action="" method="POST">
                    <div class="buttons">

                            <a href="Logout.php"><button class="logout">Logout</button></a>
                            </a><button class="delete" name="delete">Delete Account</button>
                    </div>

                </form>
            </div>

            <div class="right_form_pm">

                <div class="head_edit_r">
                    <div><h2> User Account Details</h2></div>
                 

                    <div class="updatemsg">
                        <p>
                    <?php
                         if(isset($updatesuccsess))
                        {
                            
                            echo'<p class="successmsg" id="err_msg"><i class="fas fa-check-circle"></i>'."Profile Updated Successfully".' </p>'; 
                    
                        } 
                    ?> 
                    </p>
                    </div>         
                </div>

                <div class="user_info">
                        <p class="user_information">USER INFORMATION</p> 
                </div>
                <br>
                <br>
                <div class="form_p">
                    <p class="full_name_head_r">Full name</p>
                    <div class="input_div">
                        <input class="input_name_class inputfeild" type="text" value="<?PHP if(isset($_SESSION['Fname'])){echo $_SESSION['Fname'] ;}?>"disabled>
                        <input class="input_name_class inputfeild" type="text" value="<?PHP if(isset($_SESSION['Lname'])){echo $_SESSION['Lname'] ;}?>" disabled>
                    </div>
                    <div class="user_email_r">

                        <div class="user_r">
                            <p class="full_name_head_r">Username</p>
                            <input class="inputfeild" type="text" 
                              value="<?PHP if(isset($_SESSION['Uname'])){echo $_SESSION['Uname'];}?>" disabled>

                        </div>

                        <div class="email_r">
                            <p class="full_name_head_r">Email id (Email can not be changed)</p>
                            <input disabled class="inputfeild inputfeild" type="text" value="<?PHP if(isset($_SESSION['Umail'])){echo $_SESSION['Umail'];}?>"> 

                        </div>


                    </div>
<form action="" method="POST">
                    <div class="phone_loc_r">

                        <div class="phone_r">
                            <p class="full_name_head_r">Phone number</p>
                            <input class="input_name_class inputfeild" type="text" 
                                placeholder="eg.7085785549" required name="phone" autocomplete="off" value="<?php echo"$data[PhoneNo]"; ?>">

                        </div>

                        <div class="loction_r">
                            <p class="full_name_head_r">Country</p>
                            <input class="input_name_class inputfeild" type="text" placeholder="eg.Amravati" required name="country" autocomplete="off" value="<?php echo"$data[Country]"; ?>">
                        </div>

                    </div>

                    <div class="phone_loc_r">

                            <div class="phone_r">
                                <p class="full_name_head_r">Gender</p>
                                <select name="gender" id="gender" class="inputfeild">
                                    <option>Select Gender</option>
                                    <option value="Male" class="gender_opt">Male</option>
                                    <option value="Female" class="gender_opt">Female</option>
                                    <option value="Other" class="gender_opt">Other</option>
                                </select>

                            </div>

                            <div class="loction_r">
                                <p class="full_name_head_r">Date of Birth</p>
                                <input class="input_name_class inputfeild" type="date" required name="dateofbirth" value="<?php echo"$_SESSION[Date]"; ?>" > 
                            </div>
                     
                    </div>
                    <div class="line_horizontal"></div>

            <div class="add_section">
                <p class="add_head">CONTACT INFORMATION</p>
                <div class="loction_r">
                        <p class="full_name_head_r">Address</p>
                        <input class="add_inputfeild" type="text" placeholder="Enter Your address here" required name="address" autocomplete="off" value="<?php echo"$data[Address]"; ?>">
                </div>

                <div class="add_detail">
                    <div class="loction_r">
                            <p class="details_sub">City</p>
                            <input class="add_details" type="text" placeholder="New York" required name="city" autocomplete="off"  value="<?php echo"$_SESSION[City]"; ?>">
                    </div>
                    <div class="loction_r">
                            <p class="details_sub">State</p>
                            <input class="add_details" type="text" placeholder="United States" required name="state" autocomplete="off"  value="<?php echo"$_SESSION[State]"; ?>">
                    </div>
                    <div class="loction_r">
                            <p class="details_sub">Postal code</p>
                            <input class="add_details" type="number" placeholder="Postal code" maxlength="6" required name="postcode" autocomplete="off"  value="<?php echo"$_SESSION[PostalCode]"; ?>">
                    </div>
                </div>

            </div>

            <div class="line_horizontal"></div>

                    <div class="about_me_r">
                    <p class="about_feild">ABOUT ME </p>  
                        <p class="full_name_head_r">About me (Brief description for your profile.)</p>
                        <input class="textarea_r" placeholder="Write About Yourself" name="aboutme" autocomplete="off" value="<?php echo"$_SESSION[AboutMe]"; ?>">

                        <p class="brief_r"></p>

                    </div>

            <div class="line_horizontal"></div>
                    <div class="education_r">
                    <p class="about_feild">EDUCATION & SKILLS</p>  
                        <p class="full_name_head_r"> Education </p>

                        <input class="input_educ_r" type="text" placeholder="About Your Education" name="education" autocomplete="off" value="<?php echo"$_SESSION[Education]"; ?>">

                        <p class="full_name_head_r"> Skills </p>
                        <input class="input_educ_r" type="text" placeholder="Skills that you have." name="skill" autocomplete="off" value="<?php echo"$_SESSION[Skill]"; ?>">
                    </div>
                </div>

                <input type="submit" class="save_change_btn" name="savechanges" value="Save Changes"> 

            </div>

</form>           

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