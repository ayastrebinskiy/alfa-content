$(document).ready(function () {
    var $forms = $('form.order-form-wapr');
    var $btn = $('button', $forms);
    var $sliderTop = $('#sliderTop');
    var $sliderTopControls = $('#sliderTopControls');
    var $sliderStep = $('#sliderStep');
    var $sliderTariff = $('#tariffSlider');
    var $sliderLbTariff = $('#lbTariffSlider');
    var $popup = $('#ac-popup-order');
    var resizeListener;
    var sliderStepInit;

    function init() {
        //mask
        $('[name="Client[phone]"]').mask("+7 (999) 999-9999", {autoclear: false});

        $('#tariff').val($('.some-tariff__block.selected .some-tariff__head').text());

        var resize = function () {
            $sliderTopControls.css('left', ($(document).width() - $('.container-slider:first', $sliderTop).width()) / 2 + 95);
            $sliderStep.trigger('destroy.owl.carousel');
            $sliderStep.off('changed.owl.carousel');
            sliderStepInit();
        };

        resize();

        $(window).on('resize', function (e) {
            clearTimeout(resizeListener);
            resizeListener = setTimeout(resize, 500);
        });
    }


    function showError(id, errorText) {
        $('#' + id).addClass('error');
    }

    function checkForm($form) {
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

    $('input', $forms).on('focus', function (e) {
        $(this).removeClass('error');
    });

    $btn.on('click', function (e) {
        var data;
        var $form = $(this).closest('form');
        var url = $form.attr('action');
        e.preventDefault();
        data = $form.serializeArray();console.log(data);
        if (checkForm($form) === true) {
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
        autoplaySpeed: 1000,
        smartSpeed: 1000,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true
    });



    $sliderTopControls.on('click', '.slider-pagination__item', function (e) {
        var index = $(this).index();
        var owlSliderTop = $sliderTop.data('owl.carousel');
        e.preventDefault();
        $sliderTop.trigger('stop.owl.autoplay');
        $sliderTop.trigger('to.owl.carousel', index);
    });
    $sliderTop.on('next.owl.carousel', function () {
        $sliderTop.trigger('stop.owl.autoplay');
    });
    $sliderTop.on('prev.owl.carousel', function () {
        $sliderTop.trigger('stop.owl.autoplay');
    });
    $sliderTop.on('changed.owl.carousel', function (event) {
        var index = $sliderTop.data('owl.carousel').relative(event.item.index);
        $('.slider-pagination__item', $sliderTopControls).removeClass('slider-pagination__item-active');
        $('.slider-pagination__item:eq(' + index + ')', $sliderTopControls).addClass('slider-pagination__item-active');
    });




    //slider step
    sliderStepInit = function () {
        /*var stPadding = function () {
            var w = $(document).width();
            if (w < 1400)
                return 240;
            else if (w >= 1400 && w < 1920)
                return 500;
            else
                return 600;
        }*/
        $sliderStep.owlCarousel({
            items: $(document).width() > 1500?2:1,
            center: true,
            loop: false,
            dots: false,
            smartSpeed: 800,
            stagePadding: 200,
            //autoWidth: true
        });

        $('.step-indicator__bubble', '.step-indicator').on('click', function (e) {
            var index = $('.step-indicator__bubble').index($(this));
            $sliderStep.trigger('to.owl.carousel', index);
        });

        $sliderStep.on('changed.owl.carousel', function (event) {
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
    };

    //slider tariff

    var stPaddingT = function () {
        var w = $(document).width();
        if (w < 1300)
            return 200;
        else
            return 300;
    }
    $sliderTariff.owlCarousel({
        items: 1,
        //loop: true,
        dots: false,
        stagePadding: stPaddingT(),
        smartSpeed: 800,
    });

    $('body').on('click', '#tariffSlider [href="#ac-popup-mini"]', function (e) {
        var tariff = $(this).closest('[data-tariff]').data('tariff');
        $('#ac-popup-mini #tariff').val(tariff);
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
        $('#tariff').val($(this).data('tariff'));
    });


    //wait popup
    $('.whatformats-block .ac-more-link,.whatformats-block:has(.ac-more-link)').on('click', function (e) {
        var block = $(this).hasClass('whatformats-block') ? $(this) : $(this).closest('.whatformats-block');
        var clone = block.clone();
        var hide = function (e) {
            console.log(e);
            $(this).remove();
        };

        e.preventDefault();

        clone.removeClass('wow').css({width: block.outerWidth()});

        $('.whatformats-block.expand').remove();
        clone.addClass('expand');
        block.append(clone);


        clone.on('mouseleave', hide);
        clone.on('touchend', hide);
    });


    init();

});
