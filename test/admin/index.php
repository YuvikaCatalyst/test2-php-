<?php
session_start();
    if(isset($_SESSION['User']))
    {
        header("location:user_data.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="assets/js/index.js"></script>
    <title>Document</title>
</head>
<body>
    <h1>login page</h1>
    username:<br>
    <input type="text" class="username"><br>
    password:<br>
    <input type="password" class=login_password><br>
    <a href="" class="login">login</a><br>
    <a href="create_user.php">create account</a><br>
</body>
</html>