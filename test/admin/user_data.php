<?php
include('database.php');
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
<body><?php
    $sql="SELECT * FROM userdata";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);?>

    <form action="" method="POST" enctype="multipart/form-data">
        select logo type:
        <select id="logoType">
            <option class="select" value="select" <?php if($row['logoType']=="select") echo "selected" ?>>select</option>
            <option class="text" value="text" <?php if($row['logoType']=="text") echo "selected" ?>>text</option>
            <option class="image" value="image" <?php if($row['logoType']=="image") echo "selected" ?>>image</option>
</select><br>
<input type="text" class="logoText"  value="<?php echo $row['logoText'] ?>"><br>
<input type="file" class="logoFile" name="logoFile"><br>

nav1:
<input type="text" class="navitem1" value="<?php echo $row['navitem1'] ?>"><br>
nav2:
<input type="text" class="navitem2" value="<?php echo $row['navitem2'] ?>"><br>
nav3:
<input type="text" class="navitem3" value="<?php echo $row['navitem3'] ?>"><br>
nav4:
<input type="text" class="navitem4" value="<?php echo $row['navitem4'] ?>"><br>
nav5:
<input type="text" class="navitem5" value="<?php echo $row['navitem5'] ?>"><br>
hedaer button text:
<input type="text" class="btn1" value="<?php echo $row['btn1'] ?>"><br>
banner image:
<input type="file" class="bannerImage" name="bannerImage"><br>

banner heading:
<input type="text" class="bannerHeading" value="<?php echo $row['bannerHeading'] ?>"><br>
banner button1:
<input type="text" class="btn2" value="<?php echo $row['btn2'] ?>"><br>
banner button2:
<input type="text" class="btn3" value="<?php echo $row['btn2'] ?>"><br>
<a href="" class="submitData">SUBMIT</a><br>
<a href="logout.php">logout</a>
</form>
</body>
</html>