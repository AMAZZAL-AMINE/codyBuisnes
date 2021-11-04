$(document).ready(function() {
    /**
     * nav links hsow and hide is page resposive
     */
    $('.nav_humberger').click(function() {
        $('.nav__links').show();
    });

    $('.close_nav').click(function() {
        $('.nav__links').hide();
    });

    /**
     * create event for show and hide search box 
     */
    $('.search__icon').click(function() {
        
        $('.jhdg_jkgh_dsjfulgh_dkogf').show();
        $('.searching_box_show_and_gead').css('display','flex');
    });
    $('.jhdg_jkgh_dsjfulgh_dkogf').click(function() {
        $('.jhdg_jkgh_dsjfulgh_dkogf').hide();
        $('.searching_box_show_and_gead').css('display','none');
    })


    $('.showMessageDarkNighrIfMessageSesionShowed').click(function() {
        $('.popupMesesageCart').hide();
        $('.showMessageDarkNighrIfMessageSesionShowed').hide();
         
    });

    $('.popUpClose').click(function() {
        $('.popupMesesageCart').hide();
        $('.showMessageDarkNighrIfMessageSesionShowed').hide();
    });
});

