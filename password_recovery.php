<?php
include(  "../config/connection.php" );
if(isset($_POST["submit"])){
    $password=$_POST["old_password"];
    $new_password=$_POST["new_password"];
    $confirm_password=$_POST["confirm_password"];
    $query="select * from admin_list  ";
    $result=$database->query($query);
    $records=$result->fetch_assoc();
  
    
    
    
    
    
}



?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" ../stylesheet/style.css">
    <title></title>
</head>

<body>
    <?php
     include("header.php");
    ?>
    <form id="password_form"method="post">
    <label for="password">old-password</label>
        <input type="password" name="old_password" id="password">
        <label for="new_password">new password</label>
        <input type="password" name="new_password"id="new_password">
          <label for="confirm_password">confirm password</label>
        <input type="password" name="confirm_password" id="confirm_password">
        <input type="submit" name="submit" value="submit">
        
    
    </form>
    
</body>
</html>