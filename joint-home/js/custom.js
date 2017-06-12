(function() {jQuery.fatNav(); }());
jQuery(window).resize(function() {
    var win_width = jQuery(window).width();
    if (win_width > 640) {
        jQuery('.fat-nav').removeClass('active').css("display", "none");
        jQuery('.hamburger').removeClass('active');  
    }
});
jQuery(document).ready(function() {
    var fatContent = jQuery( '#header-menu').html(); 
    var fatNav = '<div class="fat-nav__wrapper" id="fatmenu"><ul>' + fatContent + '</ul></div>';
    jQuery( '.fat-nav' ).html( fatNav );
    jQuery('#fatmenu ul li.menu-item-has-children').append("<span class='toggle_button'><small></small></span>");
    jQuery('#fatmenu ul ul').hide(); 
    jQuery('ul li.menu-item-has-children > .toggle_button').click(function(event) { 
        if(jQuery(this).parent().children('ul').hasClass('submenu') ) {
            jQuery(this).parent().children('ul').removeClass("submenu").slideUp(400);
            jQuery(this).removeClass( 'active_item' );
        }
        else{
            jQuery(this).parent().children('ul').addClass("submenu").slideDown(400);
            jQuery(this).addClass( 'active_item' );
        }
    });
});
jQuery(window).resize(function(event) {
    if (jQuery(this).innerWidth() > 640) {
        jQuery('body').removeClass('no-scroll');
        jQuery('body').css('overflow', 'visible');
    }
});
