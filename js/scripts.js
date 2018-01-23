
$( document ).ready(function(){
	console.log($(".wwa-section").offset());
	$(".main-menu nav ul li a").click(function(){
		var element = "." + $(this).attr("data-dir");
		var dir = $(element).offset();
		console.log(dir);
		$('html, body').animate({scrollTop:dir.top}, 'slow');
	});

});
document.getElementById("defaultOpen").click();

function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("wwa-section__tabs-content");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("wwa-section__tabs");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "flex";
    evt.currentTarget.className += " active";
}