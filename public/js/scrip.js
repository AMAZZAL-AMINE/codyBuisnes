$('document').ready(function() {

    var button_one = $('.show_drop_one');
    var button_two = $('.show_drop_two');
  
             
            button_one.click(function() {
                $('.pages').slideToggle(100);
                $('.categ').slideUp(100);
                $('#rotat_two').css( 'transform', 'rotate(0)')
                $('#rotat_one').css( 'transform', 'rotate(900deg)')

            });

            

            button_two.click(function() {
                $('.pages').slideUp(100);
                $('.categ').slideToggle(100);
                $('.categ').css('display', 'flex');
                $('#rotat_two').css( 'transform', 'rotate(900deg)')
                $('#rotat_one').css( 'transform', 'rotate(0)')
            });
     
 
        //nav bar responsive on click the icon navbar

        var nav = $('.fa-navicon');
        var navbar = $('.nav_bar');
        var closnav = $('.close_nav');


            nav.click(function() {
                navbar.show();
            });

            closnav.click(function() {
                navbar.hide();
            })

});


//se images change in home page
