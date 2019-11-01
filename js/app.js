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


// Woocommerce enqueue styles
jQuery(document).ready(function(){
  jQuery('.woof_reset_search_form').addClass('button black-button filter-action-button');
  jQuery('.woof_submit_search_form').addClass('button black-button filter-action-button');
  jQuery('.button').addClass('black-button');
  jQuery('#woof_widget-2').addClass('filter-section');
  jQuery('.woof_list_checkbox').addClass('filter-section-options-zone');
  jQuery('.widgettitle').addClass('sidebar-filter-caption');

  jQuery('.single_add_to_cart_button').removeClass('alt');
});


jQuery(document).ready(function(){ 
	jQuery(".product-item").mouseover(function() {
		jQuery(this).find(".product-image").addClass("product-image-colored");
	});

	jQuery(".product-item").mouseout(function() {
		jQuery(this).find(".product-image").removeClass("product-image-colored");
	});
});


// Add custom classes for default woocommerce styling classes
jQuery(document).ready(function(){
  jQuery(".attachment-woocommerce_thumbnail").addClass("product-image");
  jQuery(".woocommerce-LoopProduct-link").addClass("cell small-8 medium-8 large-8 prod-item-image");
});


// * Clearing button action in filter zone (left)
jQuery(document).ready(function(){ 
  // add multiple select / deselect functionality
  jQuery("#clear-gender").click(function () {
    jQuery('.checkbox-gender').prop("checked", false);
  });

  jQuery("#clear-origin").click(function () {
    jQuery('.checkbox-origin').prop("checked", false);
  });    
});
//  ----------  //


filterSelection("all")
function filterSelection(c) {
  var objectProductBlock, i;
  objectProductBlock = document.getElementsByClassName("filterObjectBlock");
  if (c == "all") c = "";
  for (i = 0; i < objectProductBlock.length; i++) {
    w3RemoveClass(objectProductBlock[i], "show");
    if (objectProductBlock[i].className.indexOf(c) > -1) w3AddClass(objectProductBlock[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}
//  ----------  //





// * Make active size and color onclick(options)
jQuery(document).ready(function(){
  // Size section active element
  jQuery("#size-section").find(".size-option-element").click(function(){
    jQuery("#size-section").find(".size-option-element").removeClass("active-option");
    jQuery(this).addClass("active-option");
  });
  // Color section active element
  jQuery("#color-section").find(".size-option-element").click(function(){
    jQuery("#color-section").find(".size-option-element").removeClass("active-option");
    jQuery(this).addClass("active-option");
  });
});
//  ----------  //

// * Sub images scrolling on buttons click (under main image horizontal bar scrolling)
var button = document.getElementById('slide');
button.onclick = function () {
  var subImageContainer = document.getElementById('subImageContainer');
  sideScroll(subImageContainer,'right',25,100,10);
};

var back = document.getElementById('slideBack');
back.onclick = function () {
  var subImageContainer = document.getElementById('subImageContainer');
  sideScroll(subImageContainer,'left',25,100,10);
};

function sideScroll(element,direction,speed,distance,step){
  scrollAmount = 0;
  var slideTimer = setInterval(function(){
    if(direction == 'left'){
      element.scrollLeft -= step;
    } else {
      element.scrollLeft += step;
    }
    scrollAmount += step;
    if(scrollAmount >= distance){
      window.clearInterval(slideTimer);
    }
  }, speed);
};
//  ----------  //


// * Gallery. Onclick make from .product-sub-image the .product-full-image
const activeImage = document.querySelector(".product-image .product-full-image");
const productImages = document.querySelectorAll(".images-list .product-sub-image");

var zoomToImg = document.getElementById("zoom");

function changeImage(e) {
  activeImage.src = e.target.src;
  zoomToImg.setAttribute("style", "background-image:url(" + e.target.src + ")!important;");
}

function toggleNavigation(){
  this.nextElementSibling.classList.toggle('product-full-image');
}


productImages.forEach(image => image.addEventListener("click", changeImage));
//  ----------  //

/*
 * Image zoom
 */
function zoom(e){
  var zoomer = e.currentTarget;
  e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
  e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
  x = offsetX/zoomer.offsetWidth*100
  y = offsetY/zoomer.offsetHeight*100
  zoomer.style.backgroundPosition = x + '% ' + y + '%';
}
/******************/