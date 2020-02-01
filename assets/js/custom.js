// form reg and login block
jQuery(document).on("ready", function () {
    let blockLogReg =jQuery(".block-login-register");
    let blockLogRegIcon = jQuery(".icon-reg-login-enter");
   if(blockLogReg.length < 1 || blockLogRegIcon.length < 1 ){
       return false;
   }


   blockLogRegIcon.on(" mouseup click" , function (event) {
       blockLogReg.addClass("show");console.log('test');
       blockLogRegIcon.addClass("icon-reg-login-hidden");
   });

    jQuery(document).on('mouseup  touchstart' , function (e){ // событие клика по веб-документу
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
let isAdminBar = jQuery(".admin-bar").length > 0 ;


jQuery(document).on("scroll" , function ($) {
    let distance = topNavBar.getBoundingClientRect();

    if(distance.top <= 33 && isAdminBar){
        topNavBar.classList.add("top-navbar-scroll-fixed");

        jQuery(".header-nav").css({"height": "50px", "transition": "all 0.5s"});
    }
    if(distance.top <=8 && !isAdminBar){
        topNavBar.classList.add("top-navbar-scroll-fixed");

        jQuery(".header-nav").css({"height": "50px", "transition": "all 1s"});
    }

    let bodyDistance = document.querySelector("body").getBoundingClientRect();
//console.log(bodyDistance.top);
    if( (!isAdminBar  && bodyDistance.top > -15) || (isAdminBar && bodyDistance.top > 5)) {
        topNavBar.classList.remove("top-navbar-scroll-fixed");

        jQuery(".header-nav").css({"height": "", "transition": "all 1s"});

    }


});


// end scroll


jQuery(document).on("ready" , function ($) {

// search form show onclick in icon and close onclick out
let iconSeaarch = jQuery('.header-search-form >i');
if(iconSeaarch.length < 1 ) return false;

// show on click;
iconSeaarch.on("mouseup click " , function (event) {
    event.preventDefault();

    iconSeaarch.parent()
        .addClass('header-search-form-show');

});

// end

// close form result search  click out of form

//var searchForm = jQuery("#searchform");
let headerSearchForm = jQuery(".header-search-form");

    jQuery(document).on( 'mouseup click touchstart' , function (e){ // событие клика по веб-документу
        // var div = $("#popup"); // тут указываем ID элемента
        if (!headerSearchForm.is(e.target) // если клик был не по нашему блоку
            && headerSearchForm.has(e.target).length === 0) { // и не по его дочерним элементам
            jQuery(".search-result-list").remove(); // скрываем его

            // hide search for if it is opend with onckick
            headerSearchForm.removeClass('header-search-form-show');

        }
    });

});

// end close form result search

// btn scroll to top
jQuery(document).on('ready' , function (event) {

    let topHeaderAnchorForScroll = 'topHeaderAnchorForScroll';

     let btnTopForScroll= jQuery(`a[href=#${topHeaderAnchorForScroll}]`);
     if(btnTopForScroll.length === 0) {
         return false;
     }

     btnTopForScroll.on( 'mouseup', function(){
        let el = jQuery(this);
        let dest = el.attr('href'); // получаем направление
        if(dest !== undefined && dest !== '') { // проверяем существование
            jQuery('html').animate({
                    scrollTop: jQuery(dest).offset().top // прокручиваем страницу к требуемому элементу
                }, 500 // скорость прокрутки
            );
        }
        return false;
    });

    jQuery(document).on('scroll' , function (event) {

        let topOffset = btnTopForScroll.offset().top;
        if(topOffset > 900){
            btnTopForScroll.addClass('btnForTopShow');
        }else{
            btnTopForScroll.removeClass('btnForTopShow');
        }

    })

});

// front page animation section books
jQuery(document).on("ready" , function (event) {

    //get section
    let booksSection = jQuery('#frontPageBooks');
    if(booksSection.length === 0) {return false;}

    // get blocks
    let booksBlockCount = jQuery("#booksCount");
    let booksBlockCirculation = jQuery("#booksCirculation");
    let booksBlockCities = jQuery("#booksCities");
    if(booksBlockCount.length === 0 ||
        booksBlockCirculation.length === 0 ||
        booksBlockCities.length === 0 ){ alert('test');
        return false;
    }

    // get result data
    let booksCount = booksBlockCount.text();
    let booksCirculation = booksBlockCirculation.text();
    let booksCities = booksBlockCities.text();

    // set start animate data
    let startData = 0;
     booksBlockCount.text(startData);
     booksBlockCirculation.text(startData);
     booksBlockCities.text(startData);

     // get step animation change
    let booksCountStep = parseInt( booksCount / 100) < 1 ? 1 : parseInt( booksCount / 100) ;
    let booksCirculationStep = parseInt( booksCirculation / 100) < 1 ? 1 : parseInt( booksCirculation / 100) ;
    let booksCitiesStep = parseInt( booksCities / 100) < 1 ? 1 : parseInt( booksCities / 100) ;



    // custom event for show on scroll
    booksSection.one('customEventBooksAnimateShow', function (event) {

        let countDone = false;
        let circulationDone = false;
        let citiesDone = false;

        let currentAddCountData = 0;
        let  currentAddCirculationData =0;
        let currentAddCitiesData = 0;

        // count interval
        let intervalCountId = setInterval(()=>{
            // count
            if(!countDone){
                currentAddCountData = currentAddCountData + booksCountStep;

                booksBlockCount.text(currentAddCountData);
                if(currentAddCountData >= booksCount){
                    booksBlockCount.text(booksCount);
                    countDone = true;
                }

            }

            if(countDone){
                clearInterval(intervalCountId);
            }

        }, 220);

        let intervalCirculationId = setInterval(()=>{

            // circulation
            if(!circulationDone){
                currentAddCirculationData = currentAddCirculationData + booksCirculationStep;

                booksBlockCirculation.text(currentAddCirculationData);
                if(currentAddCirculationData >= booksCirculation){
                    booksBlockCirculation.text(booksCirculation);
                    circulationDone = true;
                }

            }

            if( circulationDone){
                clearInterval(intervalCirculationId);
            }


        } , 15);

        let intervalCitiesId = setInterval(()=>{
            //cities
            if(!citiesDone){
                currentAddCitiesData = currentAddCitiesData + booksCitiesStep;

                booksBlockCities.text(currentAddCitiesData);
                if(currentAddCitiesData >= booksCities){
                    booksBlockCities.text(booksCities);
                    citiesDone = true;
                }

            }

            if(citiesDone){
                clearInterval(intervalCitiesId);
            }


        } , 100);



    }) ;

    // start for scroll
    jQuery(document).on('scroll' , function (event) {

        let booksSectionPosition =  booksSection.offset().top - jQuery(window).scrollTop();

        if(booksSectionPosition < 400){
          booksSection.trigger('customEventBooksAnimateShow');
        }

    });

    // check if it already is on position
    let originalSectionPosition = booksSection.offset().top - jQuery(window).scrollTop();
    if(originalSectionPosition < 400 && originalSectionPosition > 0 ){
        booksSection.trigger('customEventBooksAnimateShow');
    }

});

// front page -- menu pointer  anchor for scrolling
jQuery(document).on('ready' , function (event) {

    let listMenuItems = jQuery(".front-page-top-menu ul .nav-link");
    if(listMenuItems.length < 1) {return false;}

    let listAnchorSections = jQuery(".page-template-front-page section.page-section");
    if(listAnchorSections.length < 1) {return false;}

    let topMenuHeight = listMenuItems.outerHeight();

    // onclick - go to target
    listMenuItems.click(function(event){
let href = jQuery(this).attr('href');
let offsetTop = jQuery(href).offset().top;

// scroll to target animate
        jQuery('html, body').stop().animate({
            scrollTop: offsetTop - topMenuHeight +1
        }, 700);

        event.preventDefault();
    });

    // on scroll - pointer
jQuery(window).on('scroll' , function (event) {

let scrollTopOffset =  jQuery(this).scrollTop() + topMenuHeight;

listAnchorSections.each(function (index, element) {
    let currentOffsetSection =  jQuery(element).offset().top;
    let currentHeightSectin  =  jQuery(element).outerHeight();

    let currentId = jQuery(element).attr('id');
    let href = '#'+currentId;
   let currentMenuItem = listMenuItems.parent().find(`[href=${href}]`);
   
    if(currentOffsetSection - topMenuHeight < scrollTopOffset &&
    currentOffsetSection + currentHeightSectin -topMenuHeight > scrollTopOffset
    ){

        currentMenuItem
            .parent()
            .addClass('current-menu-item-scroll');

    }else{

        if(currentMenuItem.parent().hasClass('current-menu-item-scroll')){
            currentMenuItem.parent().removeClass('current-menu-item-scroll');
        }
    }
});

})

});
