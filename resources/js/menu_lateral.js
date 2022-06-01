$(document).ready(function () {
    $('.nav-cadastro').click(function () {
        $(this).find('.dropdown').toggleClass('rotate')
    });
    $('.nav-config').click(function () {
        $(this).find('.dropdown').toggleClass('rotate')
    });

    $('#navbarSupportedContent').click(function (){
        $(this).find('.nav-sm').removeClass('bg-item_color')
    });
});
