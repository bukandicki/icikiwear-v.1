$(document).ready(function(){
    $(document).on('mouseover', '.slide', function () {
        $(this).find(".btn-addtocart").css('visibility','visible');
    }).on('mouseleave', '.slide', function () {
        $(this).find(".btn-addtocart").css('visibility', 'hidden');
    });
    
    // $("#login").on('click', function(){
    //     $("#login-form").addClass('hide-form');
    //     $("#login-form").removeClass('d-flex');
    //     $("#sign-up-form").addClass('d-flex');
    //     $("#sign-up-form").removeClass('hide-form');
    // });
    // $("#sign-up").on('click', function(){
    //     $("#sign-up-form").addClass('hide-form');
    //     $("#sign-up-form").removeClass('d-flex');
    //     $("#login-form").removeClass('hide-form');
    //     $("#login-form").addClass('d-flex');
    // });
    $('#cart').click(function(){
        event.preventDefault();
        $('#cart-basket').toggle("show");
    });
    $('.close-cart').click(function(e){
        e.preventDefault();
        $('#cart-basket').toggle("show");
    });
});