$(document).ready(function () {
    var $form = $('#ac-order-form');
    var $btn = $('button', $form);
    var $carouselTop = $('#sliderTop');
    var $sliderTop = $('#sliderTop');

    $btn.on('click', function (e) {
        var data;
        var url = $form.attr('action');
        e.preventDefault();
        data = $form.serializeArray();

        $.post(url, data, function (result) {

        }, 'json');
    });

    //slider top
    $carouselTop.owlCarousel({
        items: 1,
        loop: true,
        dots: false,
        //nav: true,
        //autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true
    });

    $($sliderTop).on('click', '.slider-pagination__item', function (e) {
        var index = $(this).index();
        e.preventDefault();        
        $carouselTop.trigger('to.owl.carousel', index);
    });
    
    $carouselTop.on('changed.owl.carousel', function(event){
        var index = $carouselTop.data('owl.carousel').relative(event.item.index);
        $('.slider-pagination__item', $sliderTop).removeClass('slider-pagination__item-active');
        $('.slider-pagination', $sliderTop).each(function(){
            $('.slider-pagination__item:eq('+index+')', this).addClass('slider-pagination__item-active');
        }); 
    });
});