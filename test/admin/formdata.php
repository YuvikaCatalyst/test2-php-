<?php
include('database.php');

$extensions=array('png','svg','jpg','jpeg','gif');

if($_SERVER['REQUEST_METHOD']=='POST'){
    $logoType=$_POST['logoType'];
    $logoText=$_POST['logoText'];
    $navitem1=$_POST['navitem1'];
    $navitem2=$_POST['navitem2'];
    $navitem3=$_POST['navitem3'];
    $navitem4=$_POST['navitem4'];
    $navitem5=$_POST['navitem5'];
   $btn1=$_POST['btn1'];
   $bannerHeading=$_POST['bannerHeading'];
   $btn2=$_POST['btn2'];
   $btn3=$_POST['btn3'];

 
    if(isset($_FILES['logoFile'])){
        $logoFile=$_FILES['logoFile']['name'];
        $logoFileTemp=$_FILES['logoFile']['tmp_name'];
        $file_ext=strtolower(pathinfo($logoFile,PATHINFO_EXTENSION));
        if(!in_array($file_ext,$extensions)){
            echo "file type not supported";
            exit();
        }
        move_uploaded_file($logoFileTemp,'assets/uploads/'.$logoFile);
    }

    $bannerImage="";
    if(isset($_FILES['bannerImage'])){
        $bannerImage=$_FILES['bannerImage']['name'];
        $bannerImageTemp=$_FILES['bannerImage']['tmp_name'];
       $file_ext=strtolower(pathinfo($bannerImage,PATHINFO_EXTENSION));
        if(!in_array($file_ext,$extensions)){
            echo "file type not supported";
            exit();
        }
        move_uploaded_file($bannerImageTemp,'assets/uploads/'.$bannerImage);   
    }

   


$sql="SELECT * FROM userdata";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    if(empty($logoText) && empty($logoFile) && $row['logoText'] && $row['logoImage']){
        echo "kindly add image or data";

    }
    else if(empty($logoFile) && empty($logoText) && !empty($row['logoImage'])){
        $logoFile=$row['logoImage'];
        $sql="UPDATE userdata set 
        logoImage=$logoFile,
        logoText='',
        logoType='image'";
        mysqli_query($conn,$sql);

        if(!empty($navitem1)){
            $sql="UPDATE userdata SET navitem1='$navitem1'";
            mysqli_query($conn, $sql);     
        }
        if(!empty($navitem2)){
            $sql="UPDATE userdata SET navitem2='$navitem2'";
            mysqli_query($conn,$sql);
        }
        if(!empty($navitem3)){
            $sql="UPDATE userdata SET navitem3='$navitem3'";
            mysqli_query($conn,$sql);
        }
        if(!empty($navitem4)){
            $sql="UPDATE userdata SET navitem4='$navitem4'";
            mysqli_query($conn,$sql);
        }
       if(!empty($navitem5)){
            $sql="UPDATE userdata SET navitem5='$navitem5'";
            mysqli_query($conn,$sql);
        }
        if(!empty($btn1)){
            $sql="UPDATE userdata SET btn1='$btn1'";
            mysqli_query($conn,$sql);
        }
        if(!empty($bannerHeading)){
            $sql="UPDATE userdata SET bannerHeading='$bannerHeading'";
            mysqli_query($conn,$sql);
        }
        if(!empty($btn2)){
            $sql="UPDATE userdata SET btn2='$btn2'";
            mysqli_query($conn,$sql);
        }
        if(!empty($btn3)){
            $sql="UPDATE userdata SET btn3='$btn3'";
            mysqli_query($conn,$sql);
        }
        if(!empty($bannerImage)){
            $sql="UPDATE userdata SET bannerImage='$bannerImage'";
            mysqli_query($conn,$sql);
        }

    }
    else if(!empty($logoFile)){
        $sql="UPDATE userdata set 
        logoImage='$logoFile',
        logoText='',
        logoType='image'";
        mysqli_query($conn,$sql);
        
        if(!empty($navitem1)){
            $sql="UPDATE userdata SET navitem1='$navitem1'";
            mysqli_query($conn, $sql);     
        }
        if(!empty($navitem2)){
            $sql="UPDATE userdata SET navitem2='$navitem2'";
            mysqli_query($conn,$sql);
        }
        if(!empty($navitem3)){
            $sql="UPDATE userdata SET navitem3='$navitem3'";
            mysqli_query($conn,$sql);
        }
        if(!empty($navitem4)){
            $sql="UPDATE userdata SET navitem4='$navitem4'";
            mysqli_query($conn,$sql);
        }
       if(!empty($navitem5)){
            $sql="UPDATE userdata SET navitem5='$navitem5'";
            mysqli_query($conn,$sql);
        }
        if(!empty($btn1)){
            $sql="UPDATE userdata SET btn1='$btn1'";
            mysqli_query($conn,$sql);
        }
        if(!empty($bannerHeading)){
            $sql="UPDATE userdata SET bannerHeading='$bannerHeading'";
            mysqli_query($conn,$sql);
        }
        if(!empty($btn2)){
            $sql="UPDATE userdata SET btn2='$btn2'";
            mysqli_query($conn,$sql);
        }
        if(!empty($btn3)){
            $sql="UPDATE userdata SET btn3='$btn3'";
            mysqli_query($conn,$sql);
        }
        if(!empty($bannerImage)){
            $sql="UPDATE userdata SET bannerImage='$bannerImage'";
            mysqli_query($conn,$sql);
        }

    }
    else if(!empty($logoText)){
        $sql="UPDATE userdata set 
        logoImage='',
        logoText='$logoText',
        logoType='text'";
        mysqli_query($conn,$sql);
        
        if(!empty($navitem1)){
            $sql="UPDATE userdata SET navitem1='$navitem1'";
            mysqli_query($conn, $sql);     
        }
        if(!empty($navitem2)){
            $sql="UPDATE userdata SET navitem2='$navitem2'";
            mysqli_query($conn,$sql);
        }
        if(!empty($navitem3)){
            $sql="UPDATE userdata SET navitem3='$navitem3'";
            mysqli_query($conn,$sql);
        }
        if(!empty($navitem4)){
            $sql="UPDATE userdata SET navitem4='$navitem4'";
            mysqli_query($conn,$sql);
        }
       if(!empty($navitem5)){
            $sql="UPDATE userdata SET navitem5='$navitem5'";
            mysqli_query($conn,$sql);
        }
        if(!empty($btn1)){
            $sql="UPDATE userdata SET btn1='$btn1'";
            mysqli_query($conn,$sql);
        }
        if(!empty($bannerHeading)){
            $sql="UPDATE userdata SET bannerHeading='$bannerHeading'";
            mysqli_query($conn,$sql);
        }
        if(!empty($btn2)){
            $sql="UPDATE userdata SET btn2='$btn2'";
            mysqli_query($conn,$sql);
        }
        if(!empty($btn3)){
            $sql="UPDATE userdata SET btn3='$btn3'";
            mysqli_query($conn,$sql);
        }
        if(!empty($bannerImage)){
            $sql="UPDATE userdata SET bannerImage='$bannerImage'";
            mysqli_query($conn,$sql);
        }
    }

}
else{
   
    $sql="INSERT INTO userdata(logoType,logoImage,logoText,navitem1,navitem2,navitem3,navitem4,navitem5,btn1,bannerImage,bannerHeading,btn2,btn3) VALUES('$logoType','$logoFile','$logoText','$navitem1','$navitem2','$navitem3','$navitem4','$navitem5','$btn1','$bannerImage','$bannerHeading','$btn2','$btn3')";
mysqli_query($conn,$sql);
echo "inserted";
}



}
?>