<?php
    require('config.php');
    session_start();
    // if(!isset($_SESSION['Fname']))
    // {
    //     echo'You Are logged out';
    //     header('location:StudyLab_login.php');
    // }
    if(isset($_POST['login']))
    {
        $Email=$_POST['UserORemail'];
        $Password=$_POST['LogPassword'];
        $search="select * from register where (UserName='$Email' or Email='$Email')";
        $Query=mysqli_query($connect,$search);

        $search_count=mysqli_num_rows($Query);
        if($search_count)
        {
            $Email_pass=mysqli_fetch_assoc($Query);

            $db_pass=$Email_pass['Password'];

           
            
            $pass_decode=password_verify($Password,$db_pass);

            
            
            if($pass_decode)
            {
                $error[]='Login Sucessfully.';
                ?>
                <script>
                    location.replace("StudyLab.php");
                </script>
                
                <?php
                // To get Username with the help of session
                $_SESSION['Fname']=$Email_pass['FirstName'];
                $_SESSION['Lname']=$Email_pass['LastName'];
                $_SESSION['Umail']=$Email_pass['Email'];
                $_SESSION['Uname']=$Email_pass['UserName'];
                
               
            }
            else{
                $error[]='Wrong Password';
            }
        }
        else{
            $error[]='Incurrect Email or Password.';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn to StudyLab</title>
    <!-- Costum Css Link -->
    <link rel="stylesheet" href="Login-page.css">
    <!-- Font Awesomr CDN link -->
    <script src="https://kit.fontawesome.com/e8e9c02a1b.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../Images/Favicon (2).png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Festive&family=Merriweather:ital,wght@0,300;0,900;1,300;1,900&family=Poppins:wght@400;500;600&family=Roboto+Slab:wght@700&family=Roboto:ital,wght@0,100;0,300;0,400;0,700;1,100;1,300;1,500&display=swap" rel="stylesheet">

</head>
<body>
<!-- Navbar Starts -->
    <?php
        include("header.php")
    ?>
<!-- Navbar Ends -->

<!-- login Section Starts -->

<div class="outer">
<div class="login_left">
    <img src="../Images/Login_img.png" alt="">
</div>

<div class="login_right">
        <div class="inner">
                <div class="login-info">
                    <h1 class="log">Welcome</h1>
                </div>

<?php
    if(isset($error))
    {
        foreach($error as $error)
        {
            echo'<p class="errmsg" id="err_msg"><i class="fa-solid fa-triangle-exclamation"></i>'.$error.' </p>'; 
        }
    } 
?>     
        <form action="" method="POST">
                <div class="user-details">
                        <p class="User-mail"> Username Or Email</p>
                        <input type="text" class="user user1" placeholder="Enter Username Or Email" required name="UserORemail" value="<?php if(isset($error)){echo $Email;} ?>" >
                        <div class="password_div">
                            <p class="User-mail">Password</p>
                            <input type="password" class="user user2" placeholder="Password" required name="LogPassword" id="passhide"> 
                            <i class="fas fa-eye-slash" id="close_eye"></i>
                        </div>
                       
                </div>
                <div class="button">
                    <a href=""><button class="loginbtn" name="login">Login</button></a>
                </div>
                
        </form>
            <div class="dont_acc">
                    <div class="info-link">
                        <p>Don't have an account yet?</p>
                        <a href="StudyLab_Signup.php">Create Account</a>
                    </div>
            </div>

            </div>

        </div>

</div>
    

<!-- login Section Ends -->


<!-- Footer Section Starts -->

<?php
    include("footer.php");
?>

<!-- Footer Section Ends -->


<script>

    // To Hide and Show password
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