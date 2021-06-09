$(document).ready(function() {
    var NavY = $('.navi').offset().top;

    var stickyNav = function(){
        var ScrollY = $(window).scrollTop();

        if (ScrollY > NavY) {
            $('.navi').addClass('sticky');
        } else {
            $('.navi').removeClass('sticky');
        }
    };

    stickyNav();

    $(window).scroll(function() {
        stickyNav();
    });

});
jQuery(function ($)
{ $.scrollTo(0);
    $('#pytanian').click(function(){ $.scrollTo($('#pytania'),500);});
    $('#podzialn').click(function(){ $.scrollTo($('#podzial'),500);});
    $('#mobilnan').click(function(){ $.scrollTo($('#mobilna'),500);});
    $('#chaosn').click(function(){ $.scrollTo($('#chaos'),500);});
    $('#konwencjen').click(function(){ $.scrollTo($('#konwencje'),500);});
    $('#przegladanien').click(function(){ $.scrollTo($('#przegladanie'),500);});
    $('#formularzen').click(function(){ $.scrollTo($('#formularze'),500);});
    $('#nawigacjan').click(function(){ $.scrollTo($('#nawigacja'),500);});
    $('#podstronyn').click(function(){ $.scrollTo($('#podstrony'),500);});
    $('#wytycznen').click(function(){ $.scrollTo($('#wytyczne'),500);});
    $('#testyn').click(function(){ $.scrollTo($('#testy'),500);});


});

