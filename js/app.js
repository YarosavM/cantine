//jQuery(document).foundation()

jQuery.noConflict();

window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sectionsMenu = document.getElementById("sections-menu");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
    sectionsMenu.classList.add("sticky-menu");
  } else {
    navbar.classList.remove("sticky");
    sectionsMenu.classList.remove("sticky-menu");
  }
}