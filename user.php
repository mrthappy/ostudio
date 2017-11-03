

<!DOCTYPE html>
<html lang="en"ng-app="myApp">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta decsription="a simple user portals where info and comments can be shared by the user">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,400" rel="stylesheet">
    <link rel="stylesheet" href="../stylesheet/userstyle.css">
    <link rel="stylesheet" href="../stylesheet/user.css">
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
<style>
.list{
	background:grey;
	color:white;
}
    img{
        max-width:100%;
        display:block;
    }
.foto{
	background:yellow;
	padding:20px;
}
    
    #weather{
       margin-top:50px;
        
    }
    .loader_img{
        position:absolute;
 transition:translate(-50%,-50%);
    top:50%;
    left:50%;
        width:80px;
        height:80px;
        
    }
#loader{
	position:relative;
    display:none;
}
    .anchor{
        transition:all .3s ease-in-out;
        display:block;width:30%;padding:10px;margin:10px auto;background:black;text-align:center;
        
    }
    .hideBtn{
        display:none;
    }
    .anchor:hover{
        background:#0a7cc4;
        color:#fff;
    }
    textarea{display:block;width:40em; height:70px;outline:none;border:1px solid #bdc7d8;border-radius:5px;margin-left:20px;margin-top:20px;text-align:left;padding-top:10px;}
    #image_div{
        width:42px;
        height:42px;
        
  
      
    }
    #text_area{
        display:flex;
      
    }
    #loadMore{
        align-self:flex-end;
        position:absolute;
        margin-top:50px;
        outline:none;
        border:1px solid transparent;
        background:green;
        padding:.9em 1em;
        border-radius:5px;
        color:white;
          text-transform:uppercase;
        display:none;
        
    }
    .post_comment{
           background:#0a7cc4;
           color:white;
           display:block;
           width:100px;
           text-transform:uppercase;
           padding:.6em;
           border:1px solid transparent;
           border-radius:3px;
           align-self:flex-end;
           cursor:pointer;
        margin-left:1em;
        
    }
 
    #comment_panel{
        
        display:flex;
        max-width:100%;
        margin:0 auto;
        justify-content:center;
        align-items:center;
        position:relative;
       
  
        
    }
    #c{background:#f7f8f8;height:auto;}
   #user{
      display:flex;
       justify-content:center;
      padding-left:300px;
       align-items:center;
       margin:1.5em auto;
       flex-wrap:wrap;
       position:relative;

    

 
 
}
    #text{
        
        border-bottom:1px solid #bdc7d8;;
       width:40em;
       margin-left:29px;
        height:auto;
        padding:.3em 20px;
   

}
    #image_avatar{
        width:45px;
        height:45px;
        
    
    }
    span a{color:black;}
 
  
   
    }
    .image_avatar img{
        display:block;
        max-width:100%;
    }
    
</style>
</head>
<body>
<!-- header area -->
<?php
session_start();
include("../config/connection.php");
$navi_category="SELECT *FROM userpagenav";
$sent_query=$database->query($navi_category);
 
  if(isset($_SESSION["logged"])):
    $userDetails=$_SESSION["logged"]["image"];
    endif;
if(isset($_GET["link"])):
$link=$database->cleaner($_GET["link"]);
$query="SELECT * FROM article  LEFT JOIN article_content on article.article_id=article_content.article_id WHERE article.article_id=$link";
$tmt= $database->query($query);
  
    endif;



?>
<header id="page_header" >
	<div id="logo_holder"></div>
          <div id ="span_wrapper">
              <span id="toggle_open">MENU</span>
          </div>
     
		

		
		  
      <div class="nav_menu">
          <nav class="nav_wrapper">
               <?php
                  while ($nav_listings=$sent_query->fetch_assoc()){
                      
                  ?>
              <ul class="menu">
                 
                 <li><a href="index.php" class="menu_links"><?php echo $nav_listings["nav_first"];?></a></li>
                <li><a href="#project"class="menu_links"><?php echo $nav_listings["nav_sec"];?></a></li>
                <li><a href="#project"class="menu_links"><?php echo $nav_listings["nav_third"];?></a></li>
            
   
                  
      
      
              </ul>
              
                <?php
                      
                  }
                  ?>
              <?php
              mysqli_free_result($sent_query);
              ?>
          </nav>
        
      
      
      </div>
	     <div id="user_avatar">
           <?php
           if(isset($_SESSION["logged"])):
              $session=$_SESSION["logged"];
           endif;
           ?>
		 <h5 class="inline_element">Welcome <?php echo strtoupper($session["firstname"]);?></h5>
           
    
		<a href="#" class="default_anchor">
        <?php
        if(isset($session["image"])):
        echo '<img src="../upload/'.$session["image"].'" class="image">';
        else:echo '<img src="../images/defaultfoto.jpg" class="image">';
        endif;
        ?>
       
       
        
       </a>
           <?php
           $navi_category="SELECT *FROM userpagenav";
          $sent_query=$database->query($navi_category);
          $result=$sent_query->fetch_assoc();

           ?>
           
		<ul class="drop_down_info">
        
		<li><a href="edito.php?edit" class="drop"><?php echo $result["nav_fourth"];?></a>
		<li><a href="hellp.php" class="drop"><?php echo $result["nav_fifth"];?></a>
		</ul>
		
	
		 </div>
  
	</header>
		
	
	 <div class="responsive_cover">
          <nav class="responsive_wrapper">
              
              <ul class="responsive_menu">
                 <li><a href="index.php" class="menu_links">Home</a></li>
                <li><a href="#project"class="menu_links">Latest News</a></li>
                <li><a href="#project"class="menu_links">Latest Activity</a></li>
      
      
              </ul>
              
          
          </nav>
        
      
      
      </div>

<div class="wrapper">
<div class ="social_icons">
<li class="facebook holder"><i class="fa fa-facebook-square" aria-hidden="true"></i>
<li class="twitter holder"><i class="fa fa-twitter-square" aria-hidden="true"></i></li>
<li class="comments holder"><i class="fa fa-comment-o" aria-hidden="true"></i></li>
</div>

<ul class="articles">
<img src="../images/beauty.jpg" class="user_image">
<?php while($row=$result=$tmt->fetch_assoc()){?>
                                     
 

<li class="page1"><?php echo strtoupper($row["article_heading"]);?></li>
<div id="author_info"><h6 class="flow">author:</h6><li  class="page4"><?php echo  strtoupper($row["article_author"]);?></li></div>

<li class="page2"><?php echo $row["article_text"];?></li>
<li class="page3"><?php echo $row["article_date"];?></li>


<?php
}
?>
</ul>
</div>
   
   
 
<a href="comment.php?comment" class="anchor"><p><?php echo strtoupper("comments") ;?></p></a>
      <?php $d="select * from comments";$d=$database->query($d); echo "comments" . "(" .$database->comments($d).")";?>
       <div id="weather">
        <div id="loader"><img src="../images/loader.gif" class="loader_img"></div></div>


  
   

    <div id="c">
    <div id="comment_panel">
    
        <div id="image_div">
            <?php
            if(isset($userDetails)):
            echo '<img src="../upload/'.$userDetails.' " >';
            else:
                 echo '<img src="../images/defaultfoto.jpg">';
                
            
        
            endif;
            ?>
     
            </div>
      
  
        <form id="form"action=""method="POST">
            <?php
            if(isset($_POST["post"])):
            echo "fff";
            endif;
            ?>
        
              <div id="text_area">
            <textarea class="comments_box" placeholder="Add a Comment..."name="comments"></textarea>
            <input type="submit" class="post_comment" value="POST" name="post">
        
        
        
        </div>
        
        </form>
  
       
        <button id="loadMore" name="loadmore">LoadMore</button>
    
    
    
    
    
        </div>
    </div>

   <button  name="loadmore">LoadMore</button>

<script>


	let button =$(".anchor");
   var weather=$("#c");
   

	let loader= $("#loader");
	
	button.click(function (event){
         var self=$(this);
      
	  button.disabled=true;
		event.preventDefault();
      HideBtn();
		loader.css("display","block");
		$.ajax({
			DataType:"GET",
			data:"json",
			url:"comment.php",
		
			success:function(data){
				setTimeout(function(){
						if(data.hasOwnProperty("result")){
             loader.css("display","none");
			       weather.append(data[result]);
				}
        else{
        	loader.css("display","none");
			    weather.append(data);
        }
			
				},1000);
			
			
			
			}
			
		},"json");
	button.disabled=true;
	});
    
    function HideBtn(){
 setTimeout(function(){
  button.addClass("hideBtn");
    },500);
   
    }
    var btn=$('button[name="location"]');
    btn.click(function(){
e.preventDefault();
  
alert("hdhhd");

});

/* 
(function (){
	let anchor = $(".anchor");
	let anchorKey=$(".anchor").html();
	let weather=$("#weather");
	anchor.click(function (event){
	 event.preventDefault();
	 anchor.disabled=true;
	 
	  anchor.html("<p>"+ "LOADIN DATA...."+"</p>");
	 setTimeout(function (){
	 
		 $("#weather").load("comment.php",function (data){
			 let result=data;
			 if(result){
				 anchor.html("<p>"+ anchorKey+"</p>");
			 }
			 
		 });
		 
	 },1500);
	 

	anchor.disabled=false;
	});
})(); */

/*

(function (){

	var url="http://api.openweathermap.org/data/2.5/weather?q=London,uk&APPID=4ea84231f87122ad341389efba39e0b3";
	var ApiKey="4ea84231f87122ad341389efba39e0b3";
	var xhr;
	makeRequest();
	function makeRequest(){
		 xhr= new XMLHttpRequest();
		 xhr.onreadystatechange=responsmethod;
		 xhr.open("GET",url+'&appid='+ ApiKey);
		 
		 xhr.send();
	}
	// handle xhr response
	
	function responsmethod(){
		
		if(xhr.readyState===4 && xhr.status===200){
			update(xhr.responseText);
			
		}else{
			updateError();
		}
	}
	function update (responseText){
		var response=JSON.parse(responseText);
		var condition=response.weather[0].main;
		var degC=response.main.temp-273.15;
		var degP=response.main.humidity;
		var degCint= Math.floor(degC);
		var degF=degC *1.8 +32;
		var degFint=Math.floor(degF);
		var WeatherBox=document.getElementById("weather");
		WeatherBox.innerHTML='<p>' + degCint + '&#176; C /' +degFint+'&#176; F</p></p>' + condition + "/"+degP + '</p>';
	}
	function updateError(){
		var WeatherBox=document.getElementById("weather");
		WeatherBox.className="hidden";
	}
	
	
})();
*/


</script>
</body>
</html>
