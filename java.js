	 $(document).ready(function(){
	
         var init=$('.paragraph_loader');
		

        
			 
		      var counter=0;
			  setTimeout(function(){
			  init.addClass("animated bounceInRight");
			  var text=$("#l").append('<p class="welcome_note"><strong> OSTUDIO . WELCOME</strong></p>');
			  text;
			  $("#loader").fadeOut(1200);
		 },2000);
	
		
		
		  
		 
		
		 $(".span_toggle").click(function(){
			 
		 });
    $("#text_message p").addClass("animated bounce");
	$("#text_button").click(function(e){
		
	   $.getJSON("text.json",function(data){
		
		   var html="";
		   for(var i=0;i<=data.length;i++){
			   for(key in data[i]){
				    counter++;
					if(counter<=3){
					 html+="<li>" + data[i][key] + "</li>";
			   
			     $("#text_message p").append(html);
				 }
				  
				
				 
			   }
			   
			   
		   }
         
		   });
		   
		      
	
		   
	   });
    $('.menu_links ').click(function(e){
					 e.preventDefault();

					 var Href=$(this).attr('href');
				$('body','html').animate({
						scrollTop:$(Href).offset().top
				},1200);
			 });
   
	
$("#submit_btn").on("click",function(event){
    event.preventDefault();
 $(this).prop("disabled",true);
    var form=$("form");
    var formData=form.serialize();
  $.post("server.php",formData,function(data){
          if(data.hasOwnProperty("error")){
              $(".gif_wrapper").css("display","none");
               var results='<ul class="contact_errors">';
             for(key in data){
             results+='<li>';
             results+=data[key];
             results+='</li>'; 
            
        }
            
            results+='</ul>';  
           $("#out").css("display","block").append(results);
              
          }else{
              
              for(key in data){
                  $("out").css("display","block").append(data[key]);
              }
              
              
          }
     
       

      
     
         
       
      
  },'json');
 
});
       
    $('.output_div').on("click",function(){
       
       $('#out').css("display","none");
      
    });
       
         
    $(".span_toggle").click(function(){
           
      $("#nav_menu_mobile").toggle().addClass("animated slideInUp");
         $("#nav_menu_mobile").removeClass("controll");
    });
    
 $(".menu_links").click(function(){
  
       $("#nav_menu_mobile").addClass("controll");
     
         
         
         
         
     
 });
       
  
       
     


});

	
	
	


	
				
		
		
		

	
		

	  
