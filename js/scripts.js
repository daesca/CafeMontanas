$(document).ready(function(){
	$(".attractions-section__box-text").hover(function(){
		$(this).find("p").animate({height: "auto"}, 1000, function(){}) 
	}, function(){
		$(this).find("p").animate({height: "0"}, 1000, function(){})
	});
});