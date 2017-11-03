
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
		
        else:
		echo '<img src="../images/defaultfoto.jpg" class="image">';
        endif;
        ?>
       
       
        
       </a>
           <?php
           $navi_category="SELECT *FROM userpagenav";
          $sent_query=$database->query($navi_category);
          $result=$sent_query->fetch_assoc();

           ?>
           
		<ul class="drop_down_info">
        
		<li><a href="edit.php?edit=<?php echo $id;?>"class="drop"><?php echo $result["nav_fourth"];?></a>
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