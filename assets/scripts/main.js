$(document).ready(function () {

    var screens = $('[data-block]');
    var menuHeight = $('.ac-header-warp__bg:first').outerHeight();
    var topMenu = $("#ac-topmenu");
    var topMenuHeight = topMenu.outerHeight() + 15;
    // All list items
    var menuItems = topMenu.find("a");
    var scrollerStart = false;

    $(window).scroll(function () {
        var scrollTop = $(this).scrollTop();
        if ($(this).scrollTop() > 100) {
            $('._ac-header-warp').addClass("sticky");
        }
        else {
            $('._ac-header-warp').removeClass("sticky");
        }

        if (scrollerStart === false) {
            if (menuHeight + scrollTop < $(screens[0]).position().top) {
                menuItems.filter('.active').removeClass('active');
            }
            screens.each(function () {
                var top = $(this).position().top, el;
                if (menuHeight + scrollTop >= top) {
                    el = menuItems.filter('[href="#' + $(this).attr('id') + '"]');
                    if (!el.hasClass('active')) {
                        menuItems.removeClass('active');
                        el.addClass('active');
                    }
                }
            });
        }
    });

    // когда очень нужно скролить вверх
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('#scroller').fadeIn();
        } else {
            $('#scroller').fadeOut();
        }
    });
    $('#scroller').click(function () {
        scrollerStart = true;
        $('body,html').animate({scrollTop: 0}, 400, function () {
            menuItems.removeClass('active');
            scrollerStart = false;
        });
        return false;
    });

    //

    // Anchors corresponding to menu items
    menuItems.click(function (e) {
        var href = $(this).attr("href");
        if (href.substring(0, 1) !== '#') {
            return true;
        }
        var offsetTop = href === "#" ? 0 : $(href).offset().top - topMenuHeight + 1;
        switch (href) {
            case '#ac-i-whatformats':
            case '#ac-i-youadv':
            case '#ac-i-getresult':
                offsetTop -= 100;
                break;
            case '#ac-i-work':
                offsetTop += 100;
                break;
        }
        scrollerStart = true;
        location.hash = href.substring(6);
        window.history.pushState({src: location.hash}, '', location.hash);
        $('html, body').stop().animate({
            scrollTop: offsetTop
        }, 900, function () {
            scrollerStart = false;
        });
        menuItems.removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });



    /* Попап для попапа о_О */
    $('.popup-modal__order-link').magnificPopup({
        type: 'inline',
        preloader: false,
        focus: '#ac-who',
        closeOnBgClick: true
    });

    /* Мини попап >_< */
    $('.popup-modal__mini-link, [href="#ac-popup-mini"]').magnificPopup({
        type: 'inline',
        preloader: false,
        closeOnBgClick: true
    });

    /* Показываем попап с кейсом */
    var optionsLbScrollerCb = {
        ajaxContentAdded: function () {
            var clone = $('<div class="b-top b-top-clone">');
            var elem = $('.mfp-content [data-case]');
            clone.append($('#scroller').html());
            clone.click(function () {
                $('.mfp-ready').animate({scrollTop: 0}, 400);
                return false;
            });

            clone.css({"zIndex": 9999, "display": "none"});
            $('body').append(clone);
            $('.mfp-wrap').scroll(function () {
                if ($(this).scrollTop() > 0) {
                    clone.fadeIn();
                } else {
                    clone.fadeOut();
                }
            });

            elem.on('click', function (e) {
                if (!$(e.target).hasClass('mfp-close')) {
                    e.stopPropagation();
                }
            });



            this.defClose = this.close;
            window.history.pushState({src: this.ev.prop('href')}, '', this.ev.prop('href'));

            $('[href="#ac-popup-casesend"]', elem).on('click', function (e) {
                var input, form;
                $.magnificPopup.instance.goTo(1);
                form = $('form', $.magnificPopup.instance.currItem.inlineElement);
                input = $('#case', form);
                if (!input.length) {
                    input = $('<input type="hidden" id="case" name="Client[case]" value=""/>').appendTo(form);
                }
                input.val(elem.data('case'));
                e.preventDefault();
                e.stopPropagation();
            });

            $('[href="#ac-popup-mini"]', elem).on('click', function (e) {
                $.magnificPopup.instance.goTo(2);
                e.preventDefault();
                e.stopPropagation();
            });

            $('.ac-popup-modal___social', elem).append('<script type="text/javascript">' +
                    'try {' +
                    'var $uptolike = window["__utl"];' +
                    'var $buttons = $uptolike.$(".uptolike-buttons");' +
                    'if ($buttons.size() > 0) {' +
                    '$uptolike.require("//w.uptolike.com/widgets/v1/widgetsModule.js", function () {' +
                    '$buttons.buttons({"host": "w.uptolike.com"});' +
                    '});' +
                    '}' +
                    '} catch (e) {' +
                    'console.log(e)' +
                    '}' +
                    '</script>' +
                    '<div data-url="' + window.location.href + '" data-background-alpha="0.0" data-buttons-color="#ffffff" data-counter-background-color="#ffffff" data-share-counter-size="15" data-top-button="false" data-share-counter-type="common" data-share-style="11" data-mode="share" data-like-text-enable="false" data-hover-effect="rotate-cw" data-mobile-view="false" data-icon-color="#ffffff" data-orientation="horizontal" data-text-color="#000000" data-share-shape="round-rectangle" data-sn-ids="fb.vk.tw.ok." data-share-size="40" data-background-color="#ffffff" data-preview-mobile="false" data-mobile-sn-ids="fb.vk.tw.wh.ok.vb." data-pid="1537750" data-counter-background-alpha="1.0" data-following-enable="false" data-exclude-show-more="true" data-selection-enable="false" class="uptolike-buttons" ></div>');
            elem.removeClass('mfp-hide');
        },
        close: function () {
            $('.b-top-clone').remove();
            window.history.pushState({src: '#work'}, '', '/#work');
            //window.location.hash = 'work';
        },
        change: function (item) {
            if (item.index !== 0) {
                $.magnificPopup.instance.close = function () {
                    $.magnificPopup.instance.goTo(0);
                }
            } else if (typeof this.defClose === 'function') {
                $.magnificPopup.instance.close = this.defClose;
            }
        }
    };

    $('[data-popup="example-works"]').each(function () {
        $(this).magnificPopup({
            items: [
                {src: $(this).attr('href'), type: 'ajax'},
                {src: '#ac-popup-casesend', type: 'inline'},
                {src: '#ac-popup-mini', type: 'inline'}
            ],
            preloader: false,
            closeOnBgClick: true,
            callbacks: optionsLbScrollerCb
        });
    });


    $(window).load(function (event) {
        var href, $screen;
        var anchor = location.hash.substring(1);
        if (/^\/case\/\d+$/.test(location.pathname)) {
            var id = location.pathname.replace(/\/case\/(\d+)/, '$1');
            $.magnificPopup.open({
                items: [
                    {src: '#ac-popup-case' + id, type: 'inline'},
                    {src: '#ac-popup-casesend', type: 'inline'},
                    {src: '#ac-popup-mini', type: 'inline'}
                ],
                callbacks: optionsLbScrollerCb

            });
        } else {
            href = '#ac-i-' + (anchor.substring(0, 5) === 'ac-i-' ? anchor.substring(5) : anchor);
            $screen = $('[href="' + href + '"]');
            if ($screen.length) {
                $screen.click();
            }
        }
    });


    $(window).on('popstate', function (e) {
        var state = e.originalEvent.state;
        if (state) {
            if (state.src) {
                if (state.src.substring(0, 1) === '#') {
                    if ($.magnificPopup.instance) {
                        $.magnificPopup.instance.close();
                    }
                    var href = '#ac-i-' + state.src.substring(1);
                    var $screen = $('[href="' + href + '"]');
                    if ($screen.length) {
                        $screen.click();
                    }
                } else {console.log(state.src);
                    window.location.href = state.src;
                }
            }
        }
    });

});
