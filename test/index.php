<?php
include('admin/database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="practice static webpage" />
    <meta name="keywords" content="HTML, CSS" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" type="text/css" href="admin/assets/css/style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="admin/assets/js/index.js"></script>
    <title>Document</title>
</head>
<body>
    <header class="headerSection">
        <div class="container">
            <div class="headerWrapper">
                <?php
                $sql="SELECT logoImage,logoText from userdata";
                $result=mysqli_query($conn,$sql);
                $row=mysqli_fetch_assoc($result);
                $logoImage=$row['logoImage'];
                $logoText=$row['logoText'];
                if(!empty($logoImage)){
               echo "<div class='headerImg'><img src='admin/assets/uploads/$logoImage' alt='img'></div>";
                }
                else{
                    echo "<h3>$logoText</h3>";
                }
                ?>
                <div class="navList"> 
                    <ul>
                        <?php
                        $sql="SELECT navitem1,navitem2,navitem3,navitem4,navitem5 FROM userdata";
                        $result=mysqli_query($conn,$sql);
                        $row=mysqli_fetch_assoc($result);
                       $navitem1=$row['navitem1'];
                       $navitem2=$row['navitem2'];
                       $navitem3=$row['navitem3'];
                       $navitem4=$row['navitem4'];
                       $navitem5=$row['navitem5'];
                       echo " <li><a href=''>$navitem1</a></li>";
                       echo " <li><a href=''>$navitem2</a></li>";
                       echo " <li><a href=''>$navitem3</a></li>";
                       echo " <li><a href=''>$navitem4</a></li>";
                       echo " <li><a href=''>$navitem5</a></li>";
                        ?>
                    </ul>
                </div>
                <div class="primary">
                <?php
                        $sql="SELECT btn1 FROM userdata";
                        $result=mysqli_query($conn,$sql);
                        $row=mysqli_fetch_assoc($result);
                        $btn1=$row['btn1'];
                   echo "<a href=''>$btn1</a>";
                   ?>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="bannerSection">
            <?php
        $sql="SELECT bannerImage from userdata";
                $result=mysqli_query($conn,$sql);
                $row=mysqli_fetch_assoc($result);
                $bannerImage=$row['bannerImage'];
           echo "<img src='admin/assets/uploads/$bannerImage' alt='img' class='bannerImg'>";
           ?>
            <div class="container">
                <div class="middleContentBanner">
                <div class="bannerContent">
                    <?php  
                    $sql="SELECT bannerHeading from userdata";
                $result=mysqli_query($conn,$sql);
                $row=mysqli_fetch_assoc($result);
                $bannerHeading=$row['bannerHeading'];
                echo "<h1>$bannerHeading</h1>";
                ?>
                 <div class="bannerButtons">
                 <?php  
                    $sql="SELECT btn2,btn3 from userdata";
                $result=mysqli_query($conn,$sql);
                $row=mysqli_fetch_assoc($result);
                $btn2=$row['btn2'];
                $btn3=$row['btn3'];
                echo " <a href='' class='secondary btn1'>$btn2</a><a href='' class='primary btn2'>$btn3</a>";
                ?>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>

</body>
</html>