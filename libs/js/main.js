$(function () {
    $('.menu-btn').on('click', function () {
        $('.menu-side').toggleClass('ham-active');
        $('.overlay').toggleClass('overlay-active');
    });
    $('menu-btn, .overlay, .back').on('click', function () {
        $('.menu-side').removeClass('ham-active');
        $('.overlay').removeClass('overlay-active');
        $(this).removeClass('menu-open');
    });
});