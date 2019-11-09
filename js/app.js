"use strict";
//document.addEventListener('DOMContentLoaded', () => {
//  {
    //jQuery(document).foundation()
    jQuery.noConflict();

    //window.addEventListener("scroll", stickyNavbar()); Alternative but not working option
    window.onscroll = function() { stickyNavbar() };

    const navbar = document.getElementById("navbar");
    const stickyN = navbar.offsetTop;

    function stickyNavbar() {
      if (window.pageYOffset > stickyN) {
        //navbar.classList.add("sticky");
      } else {
        //navbar.classList.remove("sticky");
      }
    }
//  }
//});