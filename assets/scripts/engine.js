$(document).ready(function () {
    var $form = $('#ac-order-form');
    var $btn = $('button', $form);
    var $sliderTop = $('#sliderTop');
    var $sliderStep = $('#sliderStep');
    var $sliderTariff = $('#tariffSlider');
    var $popup = $('#ac-popup-order');

    function init() {
        //mask
        $('[name="Client[phone]"]').mask("+7 (999) 999-9999", {autoclear: false});

        $('#tariff').val($('.some-tariff__block.selected .some-tariff__head').text());
    }
    ;

    function showError(id, errorText) {
        $('#' + id).addClass('error');
    }

    function checkForm() {
        var success = true;
        var errorText = '';
        var name;
        $form.find('input').each(function () {
            var value = $(this).val();

            name = $(this).attr('id');

            if (name === 'name') {
                if (value.trim() === '') {
                    success = false;
                    return false;
                }
            } else if (name === 'email') {
                if (!/^[a-z0-9._+-]+@(?:[^.-]?[a-z0-9-]+[^-]?\.)+(?:[A-Z]{2,6})$/i.test(value)) {
                    success = false;
                    return false;
                }
            } else if (name === 'phone') {
                if (!/\+7 \(\d{3}\) \d{3}-\d{4}/.test(value)) {
                    success = false;
                    return false;//+7 (999) 999-9999
                }
            }
        });

        if (!success) {
            showError(name, errorText);
        }

        return success;
    }
    ;

    $('input', $form).on('focus', function (e) {
        $(this).removeClass('error');
    });

    $btn.on('click', function (e) {
        var data;
        var url = $form.attr('action');
        e.preventDefault();
        data = $form.serializeArray();
        if (checkForm() === true) {
            $.post(url, data, function (result) {
                $.magnificPopup.open({
                    items: {
                        src: '#ac-popup-ok',
                        type: 'inline'
                    }
                });
            }, 'json');
        }
    });

    //slider top
    $sliderTop.owlCarousel({
        items: 1,
        loop: true,
        dots: false,
        //nav: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true
    });

    $sliderTop.on('click', '.slider-pagination__item', function (e) {
        var index = $(this).index();
        e.preventDefault();
        $sliderTop.trigger('to.owl.carousel', index);
    });

    $sliderTop.on('changed.owl.carousel', function (event) {
        var index = $sliderTop.data('owl.carousel').relative(event.item.index);
        $('.slider-pagination__item', $sliderTop).removeClass('slider-pagination__item-active');
        $('.slider-pagination', $sliderTop).each(function () {
            $('.slider-pagination__item:eq(' + index + ')', this).addClass('slider-pagination__item-active');
        });
    });

    //slider step
    $sliderStep.owlCarousel({
        items: 1,
        loop: true,
        dots: false,
    });

    $('.step-indicator__bubble', '.step-indicator').on('click', function (e) {
        var index = $('.step-indicator__bubble').index($(this));
        $sliderStep.trigger('to.owl.carousel', index);
    });

    $sliderStep.on('changed.owl.carousel', function (event) {
        var index = $sliderStep.data('owl.carousel').relative(event.item.index);
        var $rocket = $('.step-indicator__rocket');
        $('.step-indicator__rocket-item', $rocket).text(index + 1);
        $('.step-indicator__item.step-indicator__item-completed').removeClass('step-indicator__item-completed');
        $('.step-indicator__item:eq(' + index + ')', '.step-indicator').addClass('step-indicator__item-completed')
                .append($rocket.clone());
        $rocket.remove();
    });
    
    //slider tariff
    $sliderTariff.owlCarousel({
        items: 1,
        loop: true,
        dots: false,
        stagePadding:300
    });
    
    $('.tariff-navigator__item.next_tariff').on('click', function(e){
        $sliderTariff.trigger('next.owl.carousel');
    });
    
    $('.tariff-navigator__item.previous_tariff').on('click', function(e){
        $sliderTariff.trigger('prev.owl.carousel');
    });

    //popup
    $('.some-tariff__block', $popup).on('click', function (e) {
        $('.some-tariff__block.selected', $popup).removeClass('selected');
        $(this).addClass('selected');
        $('#tariff').val($('.some-tariff__head', $(this)).text());
    });
    
    
    //wait popup
    $('.whatformats-block .ac-more-link').on('click', function(e){
        var block = $(this).closest('.whatformats-block');
        var clone = block.clone();
        
        e.preventDefault();
        clone.addClass('expand');
        block.addClass('no-border');
        block.append(clone);
        
        clone.on('mouseout', function(e){            
            block.removeClass('no-border');
            $(this).remove();
        });
    });


    init();

});