<?php
session_start();
include('database.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
    $username=$_POST['username'];
    $login_password=$_POST['login_password'];
    $user=0;
    $sql="SELECT * FROM test";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){  
while($row=mysqli_fetch_assoc($result)){
    if($username==$row['firstname'].$row['lastname'] && $login_password==$row['password']){ 
        $user=1;
        $_SESSION['User']=true;
        echo $user;
        break;
    }
}
if($user==0){
echo "wrong data";
}
    }
    else{
        echo "no user exists currently in the table.kindly create an account firstly.";
    }
}
?>