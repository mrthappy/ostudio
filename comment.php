<?php
session_start();
include("../config/connection.php");
 if(isset($_SESSION["logged"])):
  $image=$_SESSION["logged"]["image"];
    endif;
$comment=(isset($_GET["comment"]))?$_GET["comment"]:1;
$comments="SELECT * FROM  comments LEFT JOIN register ON comments.user=register.id";
$comment_query=$database->query($comments);



$error_message="there is no comment found";
if($comment_query->num_rows===0):
echo $error_message;
else:

// start to loop the  results returned
 $output=' ';
while($rows=$comment_result=$comment_query->fetch_assoc()){
    $output.='<div id="user"> ';
    $output.='<div class="avatar"> ';
       if(isset($rows['image'])):
        $output.= '<div id="image_avatar"><img  src="../upload/'.$rows['image'].' " ></div> ';
         else:
        $output.= '<div id="image_avatar"><img src="../images/defaultfoto.jpg"></div> ';
         endif;
    $output.='</div> ';
  
    $output.='<div><div id="text">'.$rows["comment_message"].'</div></div> ';
   
 $output.='</div>';
}
   
echo $output;



endif;



/*

*/

// start query here 

    /*
    if($row["user"]){
    $output='<div id="image_div">';
        if(isset($userDetails['id'])):
           $output.= '<img src="../upload/'.$userDetails['image'].' " >';
            else:
                $output.= '<img src="../images/defaultfoto.jpg">';
                
            
        
            endif;
    $output.='</div>';
 $output.='<div id="text_area">';

    $output.= '<h1>.'$row["comment_message"]'.</h1>';

$output.='</div>';
   
    echo $output;

}
*/

    
    



?>
<?php 
/*

if(isset($_GET["comment"])):

$comments="SELECT * FROM  comments LEFT JOIN register ON comments.user=register.id";
$results=$database->query($comments);
echo'<div id="image_div">';;

while($rows=$resultsRows=$results->fetch_assoc()){
    echo '<div id="user">';
    echo '   <div class="avatar">';
    
       if(isset($rows['image'])):
        echo '<img src="../upload/'.$rows['image'].' " >';
         else:
                  echo '<div id="image_avatar"><img src="../images/defaultfoto.jpg"></div>';
         endif;
             
         
            echo'</div>';
    echo '<div><div id="text">'.$rows["comment_message"].'</div></div>';
            
        
        
       echo '</div>';

 
    
    
}
echo'</div>';
    



else:
echo "there is no page found";
endif;



*/

?>
       








