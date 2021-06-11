$(function() {
	$("form").attr('novalidate', 'novalidate');
    $('.panel__link, .form__retrieve-pass').on('click', function(e) {

        e.preventDefault();

        if ($(this).attr('href') === '#password-form') {
            $('.panel__header').removeClass('active');
        } else {
            $(this).parent().addClass('active');
            $(this).parent().siblings().removeClass('active');
        }
        target = $(this).attr('href');
        $('.panel__forms > form').not(target).hide();
        $(target).fadeIn(500);
    });  
});

$(document).ready(function() {
    $('navbar-toggler').on('click', function() {
        $('.navbar').toggleClass('showing');
        $('.navbar-nav').toggleClass('showing');
    });
    $('.post-wrapper').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
  });
});


$('.panel__prev-btn').on('click', function(e) {
    $('.panel, .panel_blur').fadeOut(300);
});


$.validate({
	modules : 'security',
	errorMessageClass: 'form__error',
	validationErrorMsgAttribute: 'data-error'

});



