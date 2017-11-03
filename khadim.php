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
<?php
//  the session  has been set already here with the inforamtion of the user !!
session_start();  

include("userheader.php");
if(isset($_POST["submit"])){
	echo "it has been clicked";
}
/*
if(isset($_POST["submit"])){
	   $id=$database->cleaner($_POST["id"]);
	   $filename=basename($_FILES["user_photo"]["name"]);
	   $tmpLoc=$_FILES["user_photo"]["tmp_name"]; 
        $error=$_FILES["user_photo"]["error"]; 	 	
        $email=$database->cleaner($_POST["email"]);
        $size=$database->cleaner($_FILES["user_photo"]["size"]);
        // the folder for the images on the local 
        $folder="../upload/";
		if($filename  && $size> 0 ){
	      // call a query on the server 
		  $query="SELECT image FROM register Where id='$id'  ";
		  $result=$database->query($query);
		  while($row=$result->fetch_assoc()){
			  $image=$row["image"];
			  
		  }
		  
          $exp=explode(".",$filename);
		 $ext=strtolower(end($exp));
		 $Newfile="profile". $id."." . $ext;
		 if($image!==NULL){
			 unlink($folder.$image);
			 move_uploaded_file($tmpLoc,$folder.$Newfile);
			  $update="UPDATE register set image='$Newfile'WHERE id=$id";
			 $updaterecords=$database->query($update);
			 header("location:edit.php?success");
			 
			
			 
			 
		 }else{
			 $mover= move_uploaded_file($tmpLoc,$folder.$Newfile);
			 $update="UPDATE  register set image='$Newfile' WHERE id=$id";
             $updaterecords=$database->query($update);			 
			 header("location:edit.php?photuploaded");
// start to upload the file 

    //  $update="INSERT INTO  register set image='$Newfile' WHERE id=$id";
        
			 
		 }
			
			
			
		}
		
	
    		

	
	
	
	
	
}
*/

?>

     
<div id ="logininfo">
        <div id ="loginline">
            <h3 class="h3">Login Information</h3>
        
        </div>
       <form id ="contact_form" method="POST"  enctype="multipart/form-data" action="#">
         
                
              <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
           <input type="hidden" name="id" value=<?php echo $_SESSION["logged"]["id"];?>>
     
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
