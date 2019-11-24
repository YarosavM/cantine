// #TODO: optimise lines 70-85; make beautiful sticky navbar
//
//
//
  //      ________¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶ 
  //      ________¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶ 
  //      ___¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶ 
  //      _¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶ 
  //      ¶¶¶¶______¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶_______¶¶¶¶ 
  //      ¶¶¶_______¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶________¶¶¶ 
  //      ¶¶________¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶________¶¶¶ 
  //      ¶¶¶_____¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶______¶¶¶ 
  //      ¶¶¶____¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶____¶¶¶¶ 
  //      _¶¶¶___¶¶¶_¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶_¶¶¶____¶¶¶ 
  //      _¶¶¶¶___¶¶¶_¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶_¶¶¶¶__¶¶¶¶ 
  //      ___¶¶¶¶__¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶_¶¶¶¶¶ 
  //      ____¶¶¶¶¶¶¶¶_¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶_¶¶¶¶¶¶¶¶¶ 
  //      ______¶¶¶¶¶¶__¶¶¶¶¶¶¶¶¶¶¶¶¶¶___¶¶¶¶¶¶ 
  //      _______________¶¶¶¶¶¶¶¶¶¶¶¶ 
  //      _________________¶¶¶¶¶¶¶¶ 
  //      ___________________¶¶¶¶ 
  //      ___________________¶¶¶¶ 
  //      ___________________¶¶¶¶ 
  //      ___________________¶¶¶¶ 
  //      _______________¶¶¶¶¶¶¶¶¶¶¶¶ 
  //      ____________¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶ 
  //      ____________¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶ 
  //      ____________¶¶¶____________¶¶¶ 
  //      ____________¶¶¶____________¶¶¶ 
  //      ____________¶¶¶____________¶¶¶ 
  //      ____________¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶ 
  //      ____________¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶ 
  //      __________¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶ 
  //      _________¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶
  //

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

    const blogPostItem = document.querySelectorAll(".blog-item");

    for(let i = 0; i < blogPostItem.length; i++){
      let blogPostCurrItem = blogPostItem[i];
      
      let blogPostCurrSelectors = blogPostCurrItem.querySelectorAll(".wp-post-image, .item-content");

      for (let j = 0; j < blogPostCurrSelectors.length; j++) {
        blogPostCurrSelectors[j].addEventListener('mouseover', () => {
          blogPostCurrItem.querySelectorAll(".item-content")[0].classList.add("item-content-active");
        });

        blogPostCurrSelectors[j].addEventListener('mouseout', ()=> {
          blogPostCurrItem.querySelectorAll(".item-content")[0].classList.remove("item-content-active");
        });
      }
    }
  }
});