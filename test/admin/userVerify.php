<?php
include('database.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $newPassword=$_POST['newPassword'];
    $confirmPassword=$_POST['confirmPassword'];
  

    if($newPassword !='' && $firstname !="" && $lastname !=""){
       
        if( $newPassword== $confirmPassword){
           
           $sql="SELECT * from test where firstname='$firstname'and lastname='$lastname' and password='$newPassword'";
           $result=mysqli_query($conn,$sql);
           if(mysqli_num_rows($result)>0){
            
              echo "username already exists";
           }
           else{
$sql="INSERT INTO test (firstname,lastname,password) values ('$firstname','$lastname','$newPassword')";
mysqli_query($conn,$sql);
echo "inserted";
           }
       
    }
    else{
        echo "enter correct details";
    }
    }
    else{
        echo"kindly enter complete information";
    }
}
?>