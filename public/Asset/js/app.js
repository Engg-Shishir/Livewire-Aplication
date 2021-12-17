
$(document).ready(function() {

    // Banner Slick Slider
    $('.content').slick({
        dots: false,
        infinite: true,
        fade: true,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 7000,
        prevArrow:'.prev',
        nextArrow:'.next'
        
    });

    // Toggle Navigation
    $('.toggles').click(function(){
        $('.navigation').slideToggle();
        $(".toggles .line").toggleClass("active");
    });



    // Togggle Dropdown & Mega Menu
    $('input[type="checkbox"]').change(function(){
        if($(this).prop("checked") == true){
            $(this.nextElementSibling).addClass('active');
            $(this.parentElement.lastElementChild).slideDown();
        }
        else if($(this).prop("checked") == false){
            $(this.nextElementSibling).removeClass('active');
            $(this.parentElement.lastElementChild).slideUp();
        }
    });


});