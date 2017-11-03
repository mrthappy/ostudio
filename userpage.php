<?php
session_start();

include "../config/connection.php";

// get the navigation 

$navi_category="SELECT *FROM userpagenav";
$sent_query=$database->query($navi_category);




?>


<!DOCTYPE html>
<html lang="en"ng-app="myApp">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta decsription="a simple user portals where info and comments can be shared by the user">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,400" rel="stylesheet">
    <link rel="stylesheet" href="../stylesheet/userstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,400" rel="stylesheet">
   <link rel ="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../slider/dist/css/unslider.css" >
   <link rel="stylesheet" href="../slider/dist/css/unslider-dots.css" >
   <script src="../javascript/jquery.js"></script>
   <script src="https://code.angularjs.org/1.6.4/angular.min.js"></script>
   <script src="../javascript/userpage.js"></script>
  <script src="https://code.angularjs.org/1.6.4/angular-route.min.js"></script>
   <title>userpage</title>
</head>
<style>

</style>

<body>
  
      
   <?php
   include("headeruser.php");
   ?>
	
  
   
 
    <div id ="images_wrapper">
        <!--here is wher the switch effect comes in place-->
        <ul class="images_container">
              <li class="images row1">
                <a href="user.php?link=1"><img src="../images/beauty.jpg"></a>
                    <div class="images_content">
                        
                  <p class="image_description">What is Lorem Ipsum</p>
                  <p class="image_description1">Magazine Cover</p>
                  <p class="image_description2">Photograph by Ipsum</p>
                
                </div>
            
            
            
            
            </li>
            <li class="images row1">
                <img src="../images/beauty.jpg">
                    <div class="images_content">
                  <p class="image_description">What is Lorem Ipsum</p>
                  <p class="image_description1">Magazine Cover</p>
                  <p class="image_description2">Photograph by Ipsum</p>
                
                </div>
            
            
            
            
            </li>
                 <li class="images row1">
                <img src="../images/victoria7.jpg">
                <div class="images_content">
                  <p class="image_description">What is Lorem Ipsum</p>
                  <p class="image_description1">Magazine Cover</p>
                  <p class="image_description2">Photograph by Ipsum</p>
                
                </div>
              
                
  
            
            
            
            
            </li>
                 <li class="images row1">
                <img src="../images/beautiful-model.jpg"class="tall">
                <div class="images_content">
                  <p class="image_description">What is Lorem Ipsum</p>
                  <p class="image_description1">Magazine Cover</p>
                  <p class="image_description2">Photograph by Ipsum</p>
                
                </div>
              
                
                   
            
            
            
            </li>
                <li class="images row1">
                <img src="../images/beautiful-model.jpg">
                <div class="images_content">
                  <p class="image_description">What is Lorem Ipsum</p>
                  <p class="image_description1">Magazine Cover</p>
                  <p class="image_description2">Photograph by Ipsum</p>
                
                </div>
              
                
            
            
            
            
            
            </li>
                <li class="images row1">
                <img src="../images/beautiful-model.jpg">
                <div class="images_content">
                  <p class="image_description">What is Lorem Ipsum</p>
                  <p class="image_description1">Magazine Cover</p>
                  <p class="image_description2">Photograph by Ipsum</p>
                
                </div>
              
                
          
            
            
            
            
            </li>
             <li class="images row1">
                <img src="../images/beautiful-model.jpg">
                <div class="images_content">
                  <p class="image_description">What is Lorem Ipsum</p>
                  <p class="image_description1">Magazine Cover</p>
                  <p class="image_description2">Photograph by Ipsum</p>
                
                </div>
              
                
                   
            
            
            
            </li>
             <li class="images row1">
                <img src="../images/beautiful-model.jpg">
                <div class="images_content">
                  <p class="image_description">What is Lorem Ipsum</p>
                  <p class="image_description1">Magazine Cover</p>
                  <p class="image_description2">Photograph by Ipsum</p>
                
                </div>
              
                
                   
            
            
            
            </li>
            <li class="images row1">
                <img src="../images/beautiful-model.jpg">
                <div class="images_content">
                  <p class="image_description">What is Lorem Ipsum</p>
                  <p class="image_description1">Magazine Cover</p>
                  <p class="image_description2">Photograph by Ipsum</p>
                
                </div>
              
                
                   
            
            
            
            </li>
            <li class="images row1">
                <img src="../images/beautiful-model.jpg">
                <div class="images_content">
                  <p class="image_description">What is Lorem Ipsum</p>
                  <p class="image_description1">Magazine Cover</p>
                  <p class="image_description2">Photograph by Ipsum</p>
                
                </div>
              
                
                   
            
            
            
            </li>
                <li class="images row1">
                <img src="../images/girl.jpeg">
                <div class="images_content">
                  <p class="image_description">What is Lorem Ipsum</p>
                  <p class="image_description1">Magazine Cover</p>
                  <p class="image_description2">Photograph by Ipsum</p>
                
                </div>
              
                
                   
            
            
            
            </li>
             <li class="images row1">
                <img src="../images/girl.jpeg">
                <div class="images_content">
                  <p class="image_description">What is Lorem Ipsum</p>
                  <p class="image_description1">Magazine Cover</p>
                  <p class="image_description2">Photograph by Ipsum</p>
                
                </div>
              
                
                   
            
            
            
            </li>
             <li class="images ">
                <img src="../images/girl.jpeg">
                <div class="images_content">
                  <p class="image_description">What is Lorem Ipsum</p>
                  <p class="image_description1">Magazine Cover</p>
                  <p class="image_description2">Photograph by Ipsum</p>
                
                </div>
              
                
                   
            
            
            
            </li>
            <div></div>
            
            
            
        
        
        
        
        </ul>
        
    
    
    </div>


    
   
     
    
    
    
    

 
        
  
   

	 <footer id="footer"><p style="font-size:1.4em;color:white;">&copy;<span style="display:inline-block; margin-left:10px;">from Mrthappy</span></p></footer>
 
	
	
		
</body>
</html>


  