window.onscroll = function() {myFunction()};

var navbar = document.getElementById("menu");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

 if ($(window).width() < 768){
	$(".nav-footer  h5").click(function(){
		//$(".nav-footer  ul").hide();
	    $(this).parent().find("ul").toggle();
	});
}