<?php
 require('connection.php');

    if(isset($_POST ['register'])); 
    {
        $user_exist_query="SELECT * FROM `register_user` WHERE `user_name`='$_POST[username]' OR `user_email`='$_POST[email]'";
        $result=mysqli_query($con,$user_exist_query); 

        if($result)
        {
                if(mysqli_num_rows($result)>0)
                {
                        $result_fetch=mysqli_fetch_assoc($result);

                        if($result_fetch['username']==$_POST['username'])
                        {
                            # error for username already register
                            echo "<script>
                                alert('$result_fetch[username] -Username already taken');
                                window.login.href='login_register.php';
                            </script>";
                        }
                        else
                        {
                        echo "<script>
                                alert('$result_fetch[email] -email already register');
                                window.login.href='register.php';
                            </script>";
                        }
                }
                else #it will execute if username is not taken
                {
                    $query="INSERT INTO `register_user`(`full_name`, `user_name`, `user_email`, `user_password`) VALUES ('$_POST[fullname]','$_POST[username]','$_POST[email]','$_POST[password]')";
                    if(mysqli_query($con,$query))
                    {
                      #if data inserted sucessfully  
                      echo "<script>
                        alert('Registeration Sucessfull');
                        window.login.href='login_register.php';
                        </script>";

                    }
                    else
                    {
                        #query not fire
                        echo "<script>
                        alert('Connot Run Query');
                        window.login.href='login_register.php';
                        </script>";
                    }
                }
            
           
        }
        else
        {
            echo "<script>
            alert('Connot Run Query');
            window.login.href='login_register.php';
            </script>";

        }
    }
?>




$user_exist_query="SELECT * FROM `register` WHERE `UserName`='$_POST[Username]' OR `Email`='$_POST[Email]'";
    $result=mysqli_query($connect,$user_exist_query);
    if(mysqli_num_rows($result)>0)
    {
        $row=mysqli_fetch_assoc($result);
        if($Username==$row['UserName'])
        {
            $error[]='Username Already Exits.';
        }
        if($Email==$row['Email'])
        {
            $error[]='Email already Registered.';
        }
        if(!isset($error))
        {
            $date=date('Y-m-d');
            $option=array("cost"=>4);
            $Password=password_hash($Password,PASSWORD_BCRYPT,$option);
            $res=mysqli_query($connect,"INSERT INTO `register`(`User_id`, `FirstName`, `LastName`, `Email`, `UserName`, `Password`, `Date`) VALUES ('','FirstName','LastName','Email','Password','Password','$date')");
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