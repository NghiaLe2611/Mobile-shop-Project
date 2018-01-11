$(document).ready(function(){
    
    //Main slider
    $(".owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        items: 1,
        autoplay: true
    });

    
    var left = $(window).width() - $('#main-slider .owl-dots').width();
    $('#main-slider .owl-dots').css('left', left/2);

    $(window).on('load resize', function(){
        var left = $(window).width() - $('#main-slider .owl-dots').width();
        $('#main-slider .owl-dots').css('left', left/2); 
    });
    

    //Side nav 
    $(document).on('click', function(e){
        var target = e.target;
        if($(target).hasClass('toggle-btn')){
            $('#side-nav').addClass('active');
        } else{
            $('#side-nav').removeClass('active');
        }
        
    });

    //Focus placeholder
    var placeholder = $('.search-input').attr('placeholder');
    $('.search-input').on('focus', function(){
        $(this).attr('placeholder', '');
    }).on('blur', function(){
        $(this).attr('placeholder', placeholder);
    });

    //Footer menu
    $('.footer-menu .dropdown').click(function(){
        $('.footer-dropdown').toggleClass('open');
    });
})