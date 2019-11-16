"use strict";
document.addEventListener('DOMContentLoaded', () => {
  {
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


    let smallBlogPostsAll = document.querySelectorAll(".blog-post-item");

    for(let i = 0; i < smallBlogPostsAll.length; i++){
      let smallBlogPost = smallBlogPostsAll[i];
      smallBlogPost.addEventListener('mouseover', () => {
        smallBlogPost.querySelectorAll(".blog-post-image")[0].classList.add('blog-post-image-action');
      })
      smallBlogPost.addEventListener('mouseout', () => {
        smallBlogPost.querySelectorAll(".blog-post-image")[0].classList.remove('blog-post-image-action');
      })
    }
  }
});