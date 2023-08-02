/*
* 
* Title: Step Form focus to header on next step
* Author: Amimul Ihsan Mahdi @aimahdi
* Date: 02/08/2023
*
* Sometimes step form focus goes to bottom if you have more field's on the next step
* This code will update the focus of step to headers
*/

jQuery(function() {
    jQuery(window).scroll(function() {
        if(jQuery(this).scrollTop() === 0) {
            jQuery('.entry-header').fadeIn("slow");
        } else {
            jQuery('.entry-header').fadeOut();
        }
    });
    jQuery('.ff-btn-secondary').click(function() {
        setTimeout((function() {
            jQuery('body,html').animate({scrollTop:50},800);
        }),1000);
    });
});