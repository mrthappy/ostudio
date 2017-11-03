	$(document).ready(function (){

		
	 $("#span_wrapper").click(function (){
		$(".responsive_menu").delay(100).toggle(700);
	 });
    var images=$(".images");
    images.hover(function (){
    var self=$(this);
    self.find("img").toggleClass("showImages");

});
$(".images_content").hover(function (){
	var self=$(this);
	if(!self.hasClass("increase")){
		self.addClass("increase");
	}else{
		self.removeClass("increase");
	}
});
	});
	
	// angular coding
/*
	var app=angular.module("myApp",[]);
	app.controller("mainCtrl",["$scope","$filter",function ($scope,$filter){
		$scope.name=null;
		$scope.cancel=function (){
        if(!$scope.name.val()==""){
            $scope.name.val("");
        }
    }
	}]);
*/