<?php
    require('config.php');
    session_start();
    // error_reporting(0);

    $input=$_POST['search_input'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>

    <script src="https://kit.fontawesome.com/e8e9c02a1b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="MainCourses.css">
    <link rel="stylesheet" href="StudyLab.css">    

    <link
        href="https://fonts.googleapis.com/css2?family=Festive&family=Merriweather:ital,wght@0,300;0,900;1,300;1,900&family=Poppins:wght@400;500;600&family=Roboto+Slab:wght@700&family=Roboto:ital,wght@0,100;0,300;0,400;0,700;1,100;1,300;1,500&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="search.css">

    <style>
        .price1
        {
            display: flex;   
        }
        .no_found
        {
            color: red;
            margin-left: 80px;
            font-size: 20px;
        }
        .card-container1{
        
            display:flex;
            /* grid-template-rows:390px; */
            /* grid-template-columns: 300px 300px 300px 300px ; */
            /* gap: 35px; */
            margin-top:50px;
            flex-wrap: wrap;
          
            /* flex-direction: column; */
            /* row-gap: 50px; */
            /* padding: 20px 20px 20px 20px ; */
            /* justify-content: center; */
            /* background-color: #08da4e; */
            margin-left: 60px;
        
        }
        .course1{
            height:390px;
            width: 300px;
            margin-left: 50px;
            margin-bottom: 50px;
        }
    </style>
</head>

<body>
<!-- Navbar Starts -->
    <?php
        include("header.php")
    ?>
<!-- Navbar Ends -->

<div class="user_search_input">
    <h1 class="result_show"> Showing results for ' <?php echo $input ?>'</h1>
</div>
<div class="search_line"></div>



<?php 



$sql="SELECT * FROM `courses_details` WHERE `course_title` LIKE '%$input%' OR `course_category`LIKE '%$input%'";
$searchres=mysqli_query($connect,$sql);
$coursefound=mysqli_num_rows($searchres)>0;


if($coursefound)
{

    echo '<div class="card-container1">';
    while($data=mysqli_fetch_assoc($searchres))
    {
        ?>
        
                
            <div class="inner">
            <div class="course1">
                <a href=" <?php echo $data['links'] ?>" target="_blank">
                    <div class="course-img">
                        <img src="<?php echo "../Images/". $data['course_img'] ?>" alt="">
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
                   
                    <?php echo '<p class="title">'. $data['course_title']; '<p>'?>
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

                <div>
                        <?php echo '<p>'. $data['instructor_name']; '<p>'?>
                </div>
                

                <div class="price1">
                    <?php echo '<p class="fake-p">'. $data['fake_price']; '<p>'?>
                    <?php echo '<p class="real-p">'. $data['course_price']; '<p>'?>
                </div>
            </div>
      
    </div>
    </div>
    </a>                

        

        <?php
    }

echo'</div>';
}
else
{
    echo' <p class="no_found"> No Courses Found</p> ';
}

// if($searchres)
// {
//     echo'Query Run';
// }

?>















</body>
</html>