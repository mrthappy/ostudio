<?php
session_start();
?>
<?php

  
// update function 
function update ($sql){
	global $database;
	$update=$database->query($sql);
	return $update;
	
}

?>
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
if(isset($_GET["edit"])){
include("userheader.php");

require_once ("../config/connection.php");


}

$userSession=$_SESSION["logged"]["id"];

$sql="SELECT * FROM register WHERE id=$userSession LIMIT 1";
$result=$database->query($sql);


?>
<!-- the header ends here -->  

<?php

if(isset($_POST["submit"])){

require_once ("../config/connection.php");

// gather the required post
$id=$database->cleaner($_POST["id"]);
  $filename=basename($_FILES["user_photo"]["name"]);
  $tmpLoc=$_FILES["user_photo"]["tmp_name"]; 
  $error=$_FILES["user_photo"]["error"]; 	 	
   $email=$database->cleaner($_POST["email"]);
    $size=$database->cleaner($_FILES["user_photo"]["size"]);
	if(isset($filename) && isset($email)){
		// start the first query here
    $query="SELECT image ,email FROM register Where id='$id' ";
	 $result=$database->query($query);
	 //  getting the required fields to be updated in the database 
	  while($row=$result->fetch_assoc()){
			  $image=$row["image"];
			  $emailrow=$row["email"];
			  
		  }
		  
		  if($image!==null  && $emailrow!==null && isset($filename) && isset($email)):
		  
		  // update the database with the new image from user 
		
		            // get the image folder
					 $folder="../upload/";
		            $exp=explode(".",$filename);
					// allowed extensions on the image
					$allowed=["jpg","png","jpeg","gif"];
		            $ext=strtolower(end($exp));
					if(in_array($ext,$allowed)){
						  $Newfile="profile". $id."." . $ext;
						  
						  // start the delete the image from the folder
						     unlink($folder.$image);
						  	 move_uploaded_file($tmpLoc,$folder.$Newfile);
						  // make another query to start to update the image on the database
						    $updatequery="UPDATE register SET image='$Newfile' ,email='$email' WHERE id='$id'";
							// update the database here 
							 $updaterecords=update($updatequery);
							header("location:edit.php");
					
				   
					}else {
						   echo  " use the right extensions";
					}
		         
		  else:
		 			$folder="../upload/";
		            $exp=explode(".",$filename);
					// allowed extensions on the image
					$allowed=["jpg","png","jpeg","gif"];
		            $ext=strtolower(end($exp));
					if(in_array($ext,$allowed)){
						// begin to upload the imaage on the databasse 
						$name="profile".$id.".".$ext;
						move_uploaded_file($tmpLoc,$folder.$name);
						$updatequery="UPDATE register SET image='$name' ,email='$email' WHERE id='$id'";
						$updaterecords=update($updatequery);
						header("location:edit.php?updated.$id");
						
						
					}
					endif;
	
	

	}

}	
?>



	 


<div id ="logininfo">
<?php 
while($row=$records=$result->fetch_assoc()){?>
        <div id ="loginline">
            <h3 class="h3">Login Information</h3>
        
        </div>
		
       <form id ="contact_form" method="POST"  enctype="multipart/form-data" action="#">
         
                
              <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
           <input type="hidden" name="id" value="<?php echo $row["id"];?>">
     
             <div class ="pictureuser">
                   <label for="user_foto">Your Photo</label>
             <input type="file" name="user_photo" id="user_foto"> 
           
           </div>
           <div id="input_data_user">       
 <label for="input_data">Your Firstname</label>
   
	<input type="text" name="firstname" placeholder="name*" id="input_data" value="<?php echo   $row["firstname"];?>"readonly="readonly">
           </div>
            <div id="input_data_user">       
           <label for="input_data">Your Lastname</label>
	      <input type="text" name="lastname" placeholder="lastnname*" id="input_data" value="<?php  echo $records["lastname"];?>" readonly="readonly">
           </div>
          <div id="input_data_user">       
         <label for="email_data">Your Email</label>
	    <input type ="email" name="email" id="input_data"value="<?php  echo $row["email"];?>" >
        </div>
	<input type="submit" name="submit" id="submit" value=" update" style="display:block;">
	</form>

    </div>
	<?php
}
?>

    </body>
</html>