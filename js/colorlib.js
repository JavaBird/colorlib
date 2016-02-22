
$(document).ready(function () {
    $('#left-menu').click(function(){
        $("#sidr").css("display","block");
    }).sidr({
        timing: 'ease-in-out',
        speed: 500
    });


});

jQuery(function($) {
    $(document).ready( function() {
        //enabling stickUp on the '.navbar-wrapper' class
        $('header').stickUp();
    });
});

$( window ).resize(function () {
    $.sidr('close', 'sidr');
});

$('#close-menu').click(function () {

    $.sidr('close', 'sidr');
});
