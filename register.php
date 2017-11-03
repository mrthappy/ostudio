<?php

require_once("../config/connection.php");



?>
    



                    


<?php





    


$error=array();
$success="";

if(isset($_POST["submit"])){
   global $database;
  
    $firstname=htmlspecialchars(trim($_POST["firstname"]));
    $lastname=htmlspecialchars(trim($_POST["lastname"]));
    $password=htmlspecialchars(trim(password_hash($_POST["password"],PASSWORD_BCRYPT)));
    $email=htmlspecialchars(trim(filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)));
    
    //  validation begins 
   
 if(empty($firstname)){
     $error[]="please fill up your firstname";
     
 }
    if(empty($lastname)){
     $error[]="please write your lastname";
     
     
      }
    if(empty($password)){
        $error[]="please choosse a password";
    }
    
    
    if(empty($email)) {
        $error[]="please write an email address ";
    }
    
    if(!empty($email)){
        $sql="SELECT email from register WHERE email ='$email'";
        $stmt=$database->query($sql);
        if(mysqli_num_rows($stmt)>0){
            $error[]="the user already exists";
        }
        
    }
	 if(empty($error)){
        $query="insert into register(firstname,lastname,password,email,date,image)values('$firstname','$lastname','$password','$email',NOW(),NULL)";
        $stmt=$database->query($query);
        if($stmt){
			
             echo $success='<p class="success">' .'you have been successfully registered' . '</p>';
			      
			
        }else{
			
		}
    }
	
	
   
    
}
   
        

    
    



?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css"  href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../stylesheet/registration.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="javascript/jquery.js"></script>
    
   
    <title>A website in the making </title>
    <style>
        #pager{
            width:40%;
            height:100vh;
            background:black;
            position:fixed;
            top:100px;
            left:0;
            right:0;
            bottom:0;
            display:none;
         
            
        }
        img{
            max-width:100%;
            display:block;
        }
        .red{
            color:blue;
        }
        #blue{
            color:red;
        }
        .orange{
            color:black;
        }
		.success{
		text-align:center;
		color:white;
		font-size:1.3em;
		
		}
    
    </style>

    
</head>

<body>
<header id="user_page">
<div id="logo">
</div>
  

<span id ="toggle_bar"><i class="fa fa-bars" aria-hidden="true" "2x"></i></span>


</header>
  <ul class ="little_nav">
      <li><a href="daniel.php"id="header_link">Home</a></li>
      <li><a href="userlogin.php"id="header_link">Login</a></li>
      <li><a href="">Register</a></li>
      <span>X</span>
    
    </ul>
        <section class="registration_section">
		<div id="divider">
		<h1>LET’S START SOMETHING GREAT TOGETHER</h1>
		
        
		</div>
		
                    


	<div id="form_wrapper">
    <form id ="overlay"method="post" action="">
           <?php if(!empty($error)) {
    echo "<ul class=\"error\">";
      foreach($error as $error){
       
          echo "<li>";
          echo $error;
          echo "</li>";
          
      }
    
   echo "</ul>";
    
    
}
        
            
  ?>
	     <h2 id="overlayh2">Get Started Now</h2>
        
        <input type="text" name ="firstname" placeholder="firstname"id="firstname"class="focus">
        
        <input type="text" name ="lastname" placeholder="lastname"id="lastname"class="focus">
        
        <input type="password" name ="password" placeholder="Password"id="password"class="focus">
	
        <input type="email" name ="email" placeholder="Email"id="email"class="focus">
        
       
		
        <input type="submit" name ="submit" value="SUBMIT" id="submit_btn">
        </form>
		</div>

    
    </section>
    
   <script>
        $(document).ready(function(){
           $('#toggle_bar').click(function(){
               $('.little_nav').animate({marginLeft:0},'swing');
              
               
           });
            
            $('.little_nav span').click(function(){
                $('.little_nav').animate({marginLeft:'-' + '50%'},'swing');
            });
        
            $('.focus').focus(function(){
                $(this).css('background','white');
            });
            $('.focus').blur(function(){
                $(this).css('background','#cecccc');
            });
            $('#overlay img').click(function(){
                var src=$(this).attr("src");
                $("#pager").css("display","block");
                $('#pager img').delay(1500).attr('src',src);
                
                
                
                
            });
			$(".success").delay(400).fadeOut(1200);
            
        });
 
    </script>
</body>
</html>