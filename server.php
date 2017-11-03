<?php
include("../config/connection.php");
include("../includes/functions.php");
$error=[];
$output=[];


    
 $firstname=$database->cleaner(isset($_POST["firstname"]))?$_POST["firstname"]:false;
 $lastname=$database->cleaner(isset($_POST["lastname"]))?$_POST["lastname"]:false;
 $email_address=$database->cleaner(isset($_POST["email_address"]))?$_POST["email_address"]:false;
 $message=$database->cleaner(isset($_POST["message"]))?$_POST["message"]:false;
         // validation begins here 
 if(empty($firstname)):
 $error[].="please write in a name";
 endif;

if(empty($lastname)):
 $error[].="please write in a lastname";
 endif;

if(empty( $email_address)):
 $error[].="please write in a Email address";
 endif;

if(empty($message)):
    $error[].="please type in  a message";
    endif;

if(!empty($error)):
    // dumpt in the function here 
  $output=array("error"=>$error);
     echo json_encode($output); 
     else:
    $sql="insert into contact_form(firstname,lastname,email,message) values('$firstname','$lastname','$email_address','$message' )";
    $sql_sender=$database->query($sql);
    if($sql_sender){
        $output=array("success"=>"Thanks for the message");
        echo json_encode($output);
    }
    endif;

 


?>