/**
 * Listen to scroll to change header opacity class
 */
jQuery( document ).ready(function() {

    








    function checkScroll(){
        var startY = jQuery('.s-shadow').height() * 2; //The point where the navbar changes in px

        if(jQuery(window).scrollTop() > startY){
            jQuery('.s-shadow').addClass("scrolled shadow");
            jQuery('.nav-front-page').addClass("bg-primary");
        }else{
            jQuery('.s-shadow').removeClass("scrolled shadow");
            jQuery('.nav-front-page').removeClass("bg-primary");
        }
    }

    if(jQuery('.s-shadow').length > 0){
        jQuery(window).on("scroll load resize", function(){
            checkScroll();
        });
    }


    // search bar
    jQuery('#blog-search-m').click(function () {
        jQuery('#blog-search-toggle').removeClass('d-none');
        jQuery('#close-blog-search').removeClass('d-none');
        jQuery('.navbar-collapse').removeClass('show');
        jQuery('.navbar').addClass('bg-white');
        jQuery(":input:first").focus();
    });
    jQuery('#close-blog-search').click(function () {
        jQuery('#blog-search-toggle').addClass('d-none')
        jQuery('#close-blog-search').addClass('d-none');
        jQuery('.navbar').removeClass('bg-white');
    });


    //hide footernav mobile on focus
    jQuery(function(){
        jQuery('input, textarea').focus(function(){
            jQuery('.hide-if-focus').addClass('d-none');
        }).blur(function(){
            jQuery('.hide-if-focus').removeClass('d-none');
        });
    });
    
    
    jQuery( "#nav-target" ).click(function() {
        jQuery('.sidenav').addClass('w-m-85');
        jQuery('.overlay').addClass('w-m-100');
        jQuery('.content-sidenav').removeClass('d-none');
    });
    jQuery( ".overlay" ).click(function() {
        jQuery('.sidenav').removeClass('w-m-85');
        jQuery('.overlay').removeClass('w-m-100');
        jQuery('.content-sidenav').addClass('d-none');
    });


    














});


const currentlocation = location.href;
const menuItem = document.querySelectorAll('a.list-group-item');
const menuLength = menuItem.length

for (let i = 0; i<menuLength; i++){
    if ( menuItem[i].href === currentlocation ){
        menuItem[i].className = "bg-dark list-group-item list-group-item-action list-group-item-light fw-bold"
        console.log('got it')
    }
    else{
        menuItem[i].className = "bg-primary list-group-item list-group-item-action list-group-item-light"
        console.log('i have no live')
    }
}
