<?php
    require("config.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn to StudyLab</title>
    <!-- Costum Css Link -->
    <link rel="stylesheet" href="Signup.css">
    <!-- Font Awesomr CDN link -->
    <script src="https://kit.fontawesome.com/e8e9c02a1b.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../Images/Favicon (2).png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Festive&family=Merriweather:ital,wght@0,300;0,900;1,300;1,900&family=Poppins:wght@400;500;600&family=Roboto+Slab:wght@700&family=Roboto:ital,wght@0,100;0,300;0,400;0,700;1,100;1,300;1,500&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>
<body>
<!-- Navbar Starts -->
    <?php
        include("header.php")
    ?>
<!-- Navbar Ends -->

<?php
if(isset($_POST['Signup']))
{
    extract($_POST);
    // Both passwords should be matched
    if($Password!=$ConformPassword) {
        $error[]=' Oops !Password Do not matched';
    }
    // Passwords Should not be empty.
    if($Password=='' || $ConformPassword=='')
    {
        $error[]=' Password can not be Empty';
    }
    //Variables (later used in data insertion query)
    $FName = $_POST['Firstname'];
    $LName = $_POST['Lastname'];
    $Email =  $_POST['email'];
    $Username= $_POST['Username'];
    $Password=$_POST['Password'];
    //For password encruption;
    $pwd=password_hash($Password,PASSWORD_DEFAULT);

    //To check if username or email exist in database already.
    $sql="select * from `register` where (UserName='$_POST[Username]' OR Email='$_POST[email]');";
    $result=mysqli_query($connect,$sql);
    if(mysqli_num_rows($result)>0)
    {
        $row=mysqli_fetch_assoc($result);
        //Username already exist in database
        if($Username==$row['UserName'])
        {
            $error[]='Username Already Exits.';
        }
        //Email already exist in database
        if($Email==$row['Email'])
        {
            $error[]='Email already Registered.';
        }
       
    }

    if(!isset($error))
    {
        $date=date('Y-m-d');
        $option=array("cost"=>4);
    
        // Code For Value insertion in Database
        $res=mysqli_query($connect,"INSERT INTO `register`(`User_id`, `FirstName`, `LastName`, `Email`, `UserName`, `Password`, `Date`) VALUES ('','$FName','$LName','$Email','$Username','$pwd','$date')");
        $usertblem=mysqli_query($connect,"INSERT INTO `user_profile` (`Email`) VALUES ('$Email')");
        if($res)
        {
            $done=1;
        }
        else
        {
            $error[]='Failed :Something Went Wrong';
        }
    }
}

?>
<!-- Signup Section Starts -->
<?php
if(isset($done))
{ ?>
<div class="success_msg_container">
    <div class="successmsg">
        <div class="ani_icon">
            <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_vzhtcqsd.json"  background="transparent"  speed="1.5"  style="width: 150px; height: 150px;" loop autoplay></lottie-player>
        </div>
       
        <br>
        <h2>Registration Sucessfull</h2> 
        <p>Thanks for Registration</p>
        <a href="StudyLab_login.php" class="continue_btn">Continue to Login</a>
    </div>
</div>
   
<?php } else { ?>

<div class="outerbox">
    <div class="innerbox">
        <div class="signup_img">
            <img src="../Images/signin-img.png" alt="">
        </div>



<div class="signup_right">
            <div class="signup">
                <h1 class="signup-name">Welcome to StudyLab</h1>
            
            </div>



<!-- PHP CODE FOR SIGNUP STARTS -->
<?php
    if(isset($error))
    {
        foreach($error as $error)
        {
            echo'<p class="errmsg" id="err_msg"><i class="fa-solid fa-triangle-exclamation"></i>'.$error.' </p>'; 
        }
    } 
?>
<!-- PHP CODE FOR SIGNUP ENDS --> 

<form action="" method="POST" >
      <div class="signup-form">
        <div class="user_name gap_error">
            <div class="div " >
                <p class="User-mail feild "> First Name </p>
                <input type="text" class="user user1" placeholder=" Enter Your First Name" name="Firstname" required minlength="3" maxlength="20" autocomplete="off"
                value="<?php if(isset($error)){echo $FName;} ?>" >

            </div>

            <div class="div">
                <p class="User-mail feild"> Last Name </p>
                <input type="text" class="user user1" placeholder=" Enter Your Last Name" name="Lastname" required minlength="3" maxlength="20" autocomplete="off"
                value="<?php if(isset($error)){echo $LName;}?>" >

            </div>
        </div>
        
        <div class="user_name">

        <div class="div">
                <p class="User-mail feild"> Email </p>
                <input type="email" class="user user1" placeholder="Exampl@gmail.com" name="email" required  autocomplete="off" value="<?php if(isset($error)){echo $Email;}?>" >

            </div>
            
            <div class="div">
                <p class="User-mail feild"> Username</p>
                <input type="text" class="user user1" placeholder="Enter Username" name="Username" required autocomplete="off" value="<?php if(isset($error)){echo $Username;}?>">

            </div>
        </div>
        <div class="user_name">

             <div class="password_div"">
                <p class="User-mail feild">Password </p>
                <input type="password" class="user user1" placeholder=" Enter Password" name="Password" minlength="8" maxlength="20" id="passhide">
                <i class="fas fa-eye-slash" id="close_eye"></i>
            </div>
            <div class="div">
                <p class="User-mail feild"> Conform Password </p>
                <input type="password" class="user user1" placeholder=" Enter Password" name="ConformPassword" minlength="8" maxlength="20">

            </div>
        </div>   
           
      

            <div class="button">
                <a href=""><button class="signup-btn" name="Signup">Signup</button></a>
             </div>
        </div>
</form>


            <div class="login-details">
                <p class="login">Already have an account?</p>
                <a href="StudyLab_login.php">Login</a>
            </div>
 </div>
  
        
    

    </div>
</div>
<?php } ?>
<!-- Signup Section Ends -->



<!-- Footer Section Starts -->

<?php
    include("footer.php");
?>

<!-- Footer Section Ends -->

<script>
    let passhide=document.getElementById("passhide");
    let close_eye=document.getElementById("close_eye");

    close_eye.onclick=function(){
        if(passhide.type=="password")
        {
            passhide.type="text";
            this.classList.add("fa-eye");
            this.classList.remove("fa-eye-slash");

        }
        else
        {
            passhide.type="password";
            this.classList.add("fa-eye-slash");
            this.classList.remove("fa-eye");
        }
    }
   
</script>
</body>
</html>