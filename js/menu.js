// JavaScript Document


$(document).ready(function(){
	//
	  $(".flip").click(function(){
		  var drop = "#p".concat(this.id);
    $(drop).slideToggle("slow");
    });
});

function collapseall(){
	$(".panel").slideUp("slow");
}

function openall(){
	$(".panel").slideDown("slow");
}

//$(".panel").css({'height':($(".items").height())});