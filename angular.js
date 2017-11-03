 var myApp=angular.module("myApp",["ngRoute"]);
  myApp.controller("mainCtrl",['$scope','$log','$filter' ,"$timeout","$location",function ($scope,$log,$filter,$timeout,$location){
            
          
        }]);
    myApp.config(['$routeProvider','$locationProvider',function ($routeProvider,$locationProvider){
       
	     $locationProvider.hashPrefix('');
        $routeProvider
        .when ('/',{
             templateUrl:"angular.html",
            controller:"mainCtrl"
            
            
        })
        .when ('/second,{
               
                templateUrl:"second.html",
            controller:"mainCtrl"
               
               })
        
    }]);
       
		
		
		(document).ready(function (){
  let  anchor=$(".a");
  anchor.on("click",function (){
    var newHeight=null;
    var content=$(".first");
    var parent=content.closest(".expandable_panel");
    parent.toggleClass("open")
    if(parent.hasClass("open")){
      newHeight=$(".second").outerHeight(true);
    }else{
      newHeight=0;
      
    }
    content.animate({height:newHeight+ "px"},1000);
    return false;
  });
  
});

<div class ="expandable_panel">
  <p>jdjdjdjdjdj</p>
  <div class="first">
    <div class="second">
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including version</p>
  </div>
  </div>
</div>
<a href="#" class="a">expand</a>