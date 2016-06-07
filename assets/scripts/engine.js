$(document).ready(function () {
    var $form = $('#ac-order-form');
    var $btn = $('button', $form);
    var $sliderTop = $('#sliderTop');
    var $sliderStep = $('#sliderStep');
    var $sliderTariff = $('#tariffSlider');
    var $sliderLbTariff = $('#lbTariffSlider');
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
            data.push({name: "csrf", value: $('meta[name="csrf"]').attr('content')});
            $.post(url, data, function (result) {
                if (result.error === false) {
                    $.magnificPopup.open({
                        items: {
                            src: '#ac-popup-ok',
                            type: 'inline'
                        }
                    });
                } else {
                    if (result.field) {
                        showError(result.field, result.text);
                    }
                }
            }, 'json');
        }
    });

    //slider top
    $sliderTop.owlCarousel({
        items: 1,
        loop: true,
        dots: false,
        autoplaySpeed: 800,
        smartSpeed: 800,
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
        center: true,
        loop: false,
        dots: false,
        smartSpeed: 800,
    });

    $('.step-indicator__bubble', '.step-indicator').on('click', function (e) {
        var index = $('.step-indicator__bubble').index($(this));
        $sliderStep.trigger('to.owl.carousel', index);
    });

    $sliderStep.on('changed.owl.carousel', function (event) {
        console.log(event);
        var index = $sliderStep.data('owl.carousel').relative(event.item.index);
        var $rocket = $('.step-indicator__rocket');
        var $next = $('[data-slidernav="#sliderStep"] [data-route="next"]');
        var $prev = $('[data-slidernav="#sliderStep"] [data-route="prev"]');

        $('.step-indicator__rocket-item', $rocket).text(index + 1);
        $('.step-indicator__item.step-indicator__item-completed').removeClass('step-indicator__item-completed');
        $('.step-indicator__item:eq(' + index + ')', '.step-indicator').addClass('step-indicator__item-completed')
                .append($rocket.clone());
        $rocket.remove();

        if (index === 0) {
            $prev.addClass('hide');
            $next.removeClass('hide');
        } else if (index === event.item.count - 1) {
            $next.addClass('hide');
            $prev.removeClass('hide');
        } else {
            $next.removeClass('hide');
            $prev.removeClass('hide');
        }
    });

    //slider tariff
    $sliderTariff.owlCarousel({
        items: 1,
        //loop: true,
        dots: false,
        stagePadding: 300,
        smartSpeed: 800,
    });

    $('body').on('click', '#tariffSlider .popup-modal__order-link', function (e) {
        var tariff = $(this).closest('[data-tariff]').data('tariff');
        var $tariffBlock = $('[data-tariff="' + tariff + '"]', $popup);
        var index = $tariffBlock.index('#ac-popup-order [data-tariff]');
        $tariffBlock.click();
        setTimeout(function () {
            $sliderLbTariff.trigger('to.owl.carousel', index);
        }, 200);
    });

    //slider light box tariff
    $sliderLbTariff.owlCarousel({
        items: 3,
        loop: false,
        dots: false,
        smartSpeed: 800,
    });


    //slider nav
    $('[data-slidernav] [data-route]').on('click', function (e) {
        var $slider = $($(this).parent().data('slidernav'));
        var route = $(this).data('route');
        $slider.trigger(route + '.owl.carousel');
        e.preventDefault();
    });

    //popup
    $('.some-tariff__block', $popup).on('click', function (e) {
        $('.some-tariff__block.selected', $popup).removeClass('selected');
        $(this).addClass('selected');
        $('#tariff').val($('.some-tariff__head', $(this)).text());
    });


    //wait popup
    $('.whatformats-block .ac-more-link,.whatformats-block:has(.ac-more-link)').on('click', function (e) {
        var block = $(this).hasClass('whatformats-block') ? $(this) : $(this).closest('.whatformats-block');
        var clone = block.clone();
        var hide = function () {
            block.removeClass('no-border');
            $(this).remove();
        };

        e.preventDefault();
        clone.addClass('expand');
        block.addClass('no-border');
        block.append(clone);
        clone.find('.ac-more-link').remove();

        clone.focus();

        clone.on('mouseout', hide);
        clone.on('touchend', hide);
        clone.on('blur', hide);
    });


    init();

});
