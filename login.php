<?php
session_start();
include("../config/connection.php");
if(isset($_POST["submit"])){
    $email=$database->cleaner($_POST["email"]);
    $password=$database->cleaner($_POST["password"]);
    if(empty($email)){
        $error[]="email please";
    }
    if(empty($password)){
        $error[]="password please";
    }
    if(empty($error)){
        
        $admin_login_query="select * from  register  where email='$email' ";
        $admin_login_result=$database->query($admin_login_query);
        $result=$admin_login_result->fetch_assoc();
        if(count($result)> 0 && password_verify($password,$result["password"])===true){
            $_SESSION["logged"]=array("id"=>$result["id"],"firstname"=>$result["firstname"],"email"=>$result["email"],"lastname"=>$result["lastname"],"image"=>$result["image"]);
            $_SESSION["userlogged"]=true;
              header("location:userpage.php");
        
            
        }else{
			$error[]= "the given information could not be found";
		}
        
    }
    
}
    
    
 


?>



<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel ="stylesheet" href="../stylesheet/login.css">
    <link rel="stylesheet" href=" ../stylesheet/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,400" rel="stylesheet">
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
</head>

<body>
<?php
    include("login_page_user.php");
    
    ?>
</body>
</html>

