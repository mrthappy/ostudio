<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
	 <style>
	 p{
		 margin-bottom:2em;
		 
	 }
	 </style>
 
</head>
    <div id="ctr" ng-controller="mainCtrl">
        <a href="#book">book</a>
		<p>What is Lorem Ipsum?op publishing software like Aldus PageMaker including versions of Lorem</p> 
		<p>What is Lorem Ipsum?op publishing software like Aldus PageMaker including versions of Lorem</p> 
		<p>What is Lorem Ipsum?op publishing software like Aldus PageMaker including versions of Lorem</p> 
		<p>What is Lorem Ipsum?op publishing software like Aldus PageMaker including versions of Lorem</p> 
		<p>What is Lorem Ipsum?op publishing software like Aldus PageMaker including versions of Lorem</p> 
		<p>What is Lorem Ipsum?op publishing software like Aldus PageMaker including versions of Lorem</p> 
		<p>What is Lorem Ipsum?op publishing software like Aldus PageMaker including versions of Lorem</p> 
		<p>What is Lorem Ipsum?op publishing software like Aldus PageMaker including versions of Lorem</p> 
		<p>What is Lorem Ipsum?op publishing software like Aldus PageMaker including versions of Lorem</p> 
		<p>What is Lorem Ipsum?op publishing software like Aldus PageMaker including versions of Lorem</p> 
		<p id="book">What is Lorem Ipsum?op publishing software like Aldus PageMaker including versions of Lorem</p> 
	
         
 
  </div>
  
  <!-- always us js minifier for codes 
 to seee the value of a hash ..we use $(window).location.hash;
  
  -->
    

<body>
    
       <script src="https://code.angularjs.org/1.6.0-rc.1/angular.min.js"></script>
	   <script src="https://code.angularjs.org/1.3.15/angular-messages.min.js"></script>
    <script>
        var myApp=angular.module("myApp",["ngMessages"]);
        myApp.controller("mainCtrl",['$scope','$log','$filter' ,"$timeout","$location",function ($scope,$log,$filter,$timeout,$location){
			
			
			$log.info($location.path());
			
				
			
			               
						
			
			
	
        }]);
        
    
    
    
    </script>
    
</body>
</html>




