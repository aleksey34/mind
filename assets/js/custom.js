// form reg and login block
jQuery(document).on("ready", function () {
    let blockLogReg =jQuery(".block-login-register");
    let blockLogRegIcon = jQuery(".icon-reg-login-enter");
   if(blockLogReg.length < 1 || blockLogRegIcon.length < 1 ){
       return false;
   }


   blockLogRegIcon.on("click , dbclick , mouseup " , function (event) {
       blockLogReg.addClass("show");
       blockLogRegIcon.addClass("icon-reg-login-hidden");
   });

    jQuery(document).mouseup(function (e){ // событие клика по веб-документу
       // var div = $("#popup"); // тут указываем ID элемента
        if (!blockLogReg.is(e.target) // если клик был не по нашему блоку
            && blockLogReg.has(e.target).length === 0) { // и не по его дочерним элементам
            blockLogReg.removeClass("show"); // скрываем его
            blockLogRegIcon.removeClass("icon-reg-login-hidden");
        }
    });



});
// end block form reg and login

// scroll -- menu top position and form -reg -login margin top 30-40px
// and position cart icon -- set
let topNavBar = document.querySelector(".header-nav");
let isAdminBar = jQuery(".admin-bar").length > 0 ? true : false;


jQuery(document).on("scroll" , function ($) {
    let distance = topNavBar.getBoundingClientRect();

    if(distance.top <= 33 && isAdminBar){
        topNavBar.classList.add("top-navbar-scroll-fixed");

        jQuery(".header-nav").css("height" , "50px");
    }
    if(distance.top <=8 && !isAdminBar){
        topNavBar.classList.add("top-navbar-scroll-fixed");

        jQuery(".header-nav").css("height" , "50px");
    }

    let bodyDistance = document.querySelector("body").getBoundingClientRect();
//console.log(bodyDistance.top);
    if( (!isAdminBar  && bodyDistance.top > -15) || (isAdminBar && bodyDistance.top > 5)) {
        topNavBar.classList.remove("top-navbar-scroll-fixed");

        jQuery(".header-nav").css("height" , "");

    }


});


// end scroll

// close form result search  click out of form
jQuery(document).on("ready" , function ($) {

var searchForm = jQuery("#searchform");

    jQuery(document).mouseup(function (e){ // событие клика по веб-документу
        // var div = $("#popup"); // тут указываем ID элемента
        if (!searchForm.is(e.target) // если клик был не по нашему блоку
            && searchForm.has(e.target).length === 0) { // и не по его дочерним элементам
            jQuery(".search-result-list").remove(); // скрываем его
        }
    });


});

// end close form result search

