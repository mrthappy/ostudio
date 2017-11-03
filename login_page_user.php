<div id="headers_login">
    
      
       
       <h1>Login</h1>
          <form id="admin_form" method="post">
               <li class="links">
               <?php  if(isset($error)):
                 
                 foreach($error as $key){
                     
                 echo $key=  $key;
                    
              }endif;?>
              </li>
            <input type="text" name="email" placeholder="firstname">
            <input type="password" name="password" placeholder="password" id="password">
           
            <input type="submit" name="submit" value="Login">
              <div id="directions_link">
               <a href="password_recovery.php"class="firstspan"><span class="form_span">Lost Passwort</span></a>
              <a href="register.php?password=pass"class="firstspan"><span class="form_span">register</span></a>
              
              </div>
             
   
       
        
        </form>
        
        </div>