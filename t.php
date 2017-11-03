
<?php

/*
include("../config/connection.php");
if(isset($_POST["submit"])):
$set_update="";


$size=10000000;
$error=[];
$filesize=$_FILES["img"]["size"];
$img_folder="../upload/";
$tmp_file=$_FILES["img"]["tmp_name"];
$file=$database->cleaner($_FILES["img"]["name"]);
$firstname=$database->cleaner($_POST["firstname"]);
$lastname=$database->cleaner($_POST["lastname"]);
$email=$database->cleaner($_POST["email"]);
$password=$database->cleaner($_POST["password"]);
if(empty($firstname)|| empty($lastname) || empty($email)|| empty($password)|| empty($file)){
	$error[]="please fill it up ";
}

$file_ext=explode(".",$file);
$file_actual=strtolower(end($file_ext));
$allowed=array("jpg","pdf","gif",);
if(!in_array($file_actual,$allowed)):
$error[]="only jpg,pdf,gif, files are allowed";


else:
$new_filename=uniqid(" ",true);

$mover=move_uploaded_file($tmp_file,$img_folder.$new_filename);
	$update="insert into foto(firstname,lastname,email,password,img) values('$firstname','$lastname','$email','$password' ,'$new_filename')";
   $set_update=$database->query($update);


endif
// checking for informations from the file array
// load the  database



?>

*/


/*
include("../config/connection.php");
if(isset($_POST["submit"])){
	$firstname=$_POST["firstname"];
	$lastname=$_POST["lastname"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$img=basename($_FILES["img"]["name"]);
	$upload_folder="../upload/";
	$tmp=$_FILES["img"]["tmp_name"];
	$ext=explode(".",$img);
	$allowed=array("jpg","pdf");
	$file_actual=strtolower(end($ext));
	if(!in_array($file_actual,$allowed)){
		echo "not there";
	}else{
		
		$mover=move_uploaded_file($tmp,$upload_folder.$img);
			$update="INSERT INTO foto(firstname,lastname,email,password,img) VALUES('$firstname','$lastname','$email','$password' ,'$img')";
			$query=$database->query($update);
	        echo $result=$query->num_rows()?"yes":"no";
		 
	
	
	
	
}
}
 */
 try{
	  $dbn="mysql:host=localhost;dbname=kardystudio";
      $connection =new PDO($dbn,"root","");
	  $count=$connection->query("select count(*)from foto");
	  $numrows=$count->fetchColumn();
	  $sql="select firstname ,lastname from foto  where id >5 ";
	  $result=$connection->query($sql);
	  $all=$result->rowCount();
	  
 }catch(EXCEPTION $e){
	 $connection_error=$e->getMessage();
 }

 if($connection):
 echo "yes there is";
 else:echo "no there wasnt";
 endif;
 class Database{
	 private $connection;
	 private $dbn;
	 private $root;
	 private $pwd;
	 
	 public function Connection (){
		 $connection =$this->$connection ;
		 $dbn=$this->$root;
		 
	 }
 }
?>

<!doctype html>
<head>

<style>

</style>
</head>
<body>

<div id ="header">
    <img src="../images/defaultfoto.jpg">
</div>

<div class="nav_menu">
         
     <form action="" method="post" enctype="multipart/form-data" class="form">
         <INPUT TYPE="FILE" name ="img">
         <input type ="text" name="firstname">
         <input type ="text" name="lastname">
         <input type ="email" name="email">
         <input type ="password" name="password">
         <input type="submit"name="submit">
    </form>
    
        <form method="post" >
		<input type="text" name="firstname">
		<input type="text" name="firstname">
		<input type="submit" name="submit">
      
      <!--
	  
	  WHERE CustomerName LIKE 'a%'	Finds any values that starts with "a"
WHERE CustomerName LIKE '%a'	Finds any values that ends with "a"
WHERE CustomerName LIKE '%or%'	Finds any values that have "or" in any position
WHERE CustomerName LIKE '_r%'	Finds any values that have "r" in the second position
WHERE CustomerName LIKE 'a_%_%'	Finds any values that starts with "a" and are at least 3 characters in length
WHERE ContactName LIKE 'a%o'	Finds any values that starts with "a" and ends with "o"

-->
      </div>
	  <?php 
	  while($row=$result->fetch(PDO::FETCH_ASSOC)){
		  ?>
	  
	  <ul>
	  
	  <li><?php echo $row["firstname"];?> </li>
	  <li><?php echo $row["lastname"];?></li>
	  </ul>
	  <?php
	  }
	  ?>
	  <PRE>
	  <?php print_r($numrows);?>
	  </PRE>
	  </body>
	  </html>