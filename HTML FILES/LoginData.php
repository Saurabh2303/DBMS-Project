<?php
    require_once("config.php");
        if(isset($_POST['login']))
        {
            $login=$_POST['UserORemail'];
            $Password=$_POST['LogPassword'];
            $query="select * from register where (UserName='$login' or Email='$login')";
            $res=mysqli_query($connect,$query);
            $numRows=mysqli_num_rows($res);

            if($numRows==1)
            {
                $row=mysqli_fetch_assoc($res);
                if(password_verify($Password,$row['Email']))
                {
                    $_SESSION["login_sess"]="1";
                    $_SESSION["login_email"]=$row['Email'];
                    header("location:StudyLab.php");
                }
                else{
                    header("location:StudyLab_login.php?loginerror".$login);
                }
            }
            else{
                header("location:StudyLab_login.php?loginerror".$login);
            }
        }
?>