$(document).ready(function () {
    var $form = $('#ac-order-form');
    var $btn = $('button', $form);
    var $sliderTop = $('#sliderTop');
    var $sliderStep = $('#sliderStep');

    $btn.on('click', function (e) {
        var data;
        var url = $form.attr('action');
        e.preventDefault();
        data = $form.serializeArray();

        $.post(url, data, function (result) {

        }, 'json');
    });

    //slider top
    $sliderTop.owlCarousel({
        items: 1,
        loop: true,
        dots: false,
        //nav: true,
        //autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true
    });

    $sliderTop.on('click', '.slider-pagination__item', function (e) {
        var index = $(this).index();
        e.preventDefault();        
        $sliderTop.trigger('to.owl.carousel', index);
    });
    
    $sliderTop.on('changed.owl.carousel', function(event){
        var index = $sliderTop.data('owl.carousel').relative(event.item.index);
        $('.slider-pagination__item', $sliderTop).removeClass('slider-pagination__item-active');
        $('.slider-pagination', $sliderTop).each(function(){
            $('.slider-pagination__item:eq('+index+')', this).addClass('slider-pagination__item-active');
        }); 
    });
    
    //slider step
    $sliderStep.owlCarousel({
        items: 1,
        loop: true,
        dots: false,
        //margin: 200,
        //autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true
    });
    
    $('.step-indicator__bubble', '.step-indicator').on('click', function(e){
        var index = $('.step-indicator__bubble').index($(this));
        $sliderStep.trigger('to.owl.carousel', index);
    });
    
    $sliderStep.on('changed.owl.carousel', function(event){
        var index = $sliderStep.data('owl.carousel').relative(event.item.index);
        var $rocket = $('.step-indicator__rocket');
        $('.step-indicator__rocket-item', $rocket).text(index + 1);
        $('.step-indicator__item.step-indicator__item-completed').removeClass('step-indicator__item-completed');
        $('.step-indicator__item:eq('+index+')', '.step-indicator').addClass('step-indicator__item-completed')
                .append($rocket.clone());
        $rocket.remove();
    });
    
});