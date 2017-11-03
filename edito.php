<!DOCTYPE html>
<html lang="en"ng-app="myApp">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta decsription="a simple user portals where info and comments can be shared by the user">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,400" rel="stylesheet">
    <link rel="stylesheet" href="../stylesheet/userstyle.css">
    <link rel="stylesheet" href="../stylesheet/user.css">
        <link rel="stylesheet" type="text/css" href="../stylesheet/newstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,400" rel="stylesheet">
   <link rel ="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../slider/dist/css/unslider.css" >
   <link rel="stylesheet" href="../slider/dist/css/unslider-dots.css" >
   <script src="../javascript/jquery.js"></script>
   <script src="https://code.angularjs.org/1.6.4/angular.min.js"></script>
   <script src="../javascript/userpage.js"></script>
  <script src="https://code.angularjs.org/1.6.4/angular-route.min.js"></script>
   <title>editpage</title>
    <style>
    
        #logininfo{
    
    background:#fff;
    box-shadow: 0 2px 0 0 rgba(0,0,0,0.1);
    border-radius: 4px;
    width:50%;
    margin:20px  auto;
    padding:10px 20px;
    
}
        #submit{
        border-color: #3ac162;
    background-color: #3ac162;
    color:white;
    padding: 15px 15px;
    
    display:block;
       outline:0;
       border: none;
      float:right;
     margin-right:99px;
}
        label,input{
    display:block;
}
        #input_data_user input{
    background: #e8ebed;
    margin-bottom: 2em;
    font-size: 14px;
    color: #576366;
    width:70%;
   
    padding: 12px 15px;
    outline: 0;
    border: 2px solid #e8ebed;
    -webkit-appearance: none;
    border-radius: 5px;
}
        #input_data_user label{
    float:left;
    margin-right:2em;
}
        
    </style>
    </head>
    <body>
        <!-- the header starts here -->
<?php
session_start();  

include("userheader.php"); 
if(isset($_POST["submit"])):
         $success=true;
        $filename=isset($_FILES["user_photo"]["name"])?basename($_FILES["user_photo"]["name"]):null;
        $tmpLoc=$_FILES["user_photo"]["tmp_name"];      
	    	$error=$_FILES["user_photo"]["error"];
		    $fileErr=$_FILES["user_photo"]["error"];
        $id=isset($_POST["id"])?intval($_POST["id"]):null; // getting user id 
        $email=$database->cleaner($_POST["email"]);
        $size=$database->cleaner($_FILES["user_photo"]["size"]);
       
          $folder="../upload/";
    
      
        // trying to get the value for the file 
         if($filename && $size> 0):
		 $exp=explode(".",$filename);
		 $ext=strtolower(end($exp));
		 $Newfile=uniqid("",true). "." . $ext;
		 $query="SELECT image,email FROM register WHERE id=$id LIMIT 1";  
          $results=$database->query($query);
		 
        while($row=$results->fetch_assoc()){
            $image=$row["image"];
            $email=$row["email"];
        }
if($image==null){
$mover= move_uploaded_file($tmpLoc,$folder.$filename);
// start to upload the file 
$update="UPDATE register set image='$filename'";
$updaterecords=$database->query($update);
if($update){
echo "it is done";

}else{echo "no";}

}else{
	
	

	
	unlink($folder.$image);
	$mover= move_uploaded_file($tmpLoc,$folder.$filename);
	$update="UPDATE register set image='$filename' ";
   $updaterecords=$database->query($update);


   
}
        
		  // deleting the file from the folder tot set it up for the new image 
			
		
     
          endif;
endif;
      
       
       /*
       
       
		  $filename=$_FILES["user_photo"]["name"];
	  $tmpLoc=$_FILES["user_photo"]["tmp_name"];
	  $folder="../upload/";
	  echo $check=is_writeable($folder)?"YES":false;
	 $move= move_uploaded_file($tmpLoc,$folder.$filename);
       // try to upload a new image for the user 
	   if($move){
		  echo "yes";  
	   }
	  
	   else{
		  echo "no";
	   }
	
        
  
        endif;



       */







?>
<!-- the header ends here -->  
       
     
<div id ="logininfo">
        <div id ="loginline">
            <h3 class="h3">Login Information</h3>
        
        </div>
       <form id ="contact_form" method="POST"  enctype="multipart/form-data" action="#">
         
                
              <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
           <input type="hidden" name="id" value="<?php echo $_SESSION["logged"]["id"];?>">
              <input type="hidden" name="user_id" value="<?php echo  $_SESSION["logged"]["id"];?>">
             <div class ="pictureuser">
                   <label for="user_foto">Your Photo</label>
             <input type="file" name="user_photo" id="user_foto"> 
           
           </div>
           <div id="input_data_user">       
 <label for="input_data">Your Firstname</label>
   
	<input type="text" name="firstname" placeholder="name*" id="input_data" value="<?php echo $_SESSION["logged"]["firstname"];?>"readonly="readonly">
           </div>
            <div id="input_data_user">       
           <label for="input_data">Your Lastname</label>
	      <input type="text" name="lastname" placeholder="lastnname*" id="input_data" value="<?php echo $_SESSION["logged"]["lastname"];?>" readonly="readonly">
           </div>
          <div id="input_data_user">       
         <label for="email_data">Your Email</label>
	    <input type ="email" name="email" placeholder="email*" id="input_data"value="<?php echo $_SESSION["logged"]["email"];?>" >
        </div>
	<input type="submit" name="submit" id="submit" value=" update" style="display:block;">
	</form>
    </div>

    </body>
    </html>