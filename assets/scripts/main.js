$(document).ready(function () {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('._ac-header-warp').addClass("sticky");
        }
        else {
            $('._ac-header-warp').removeClass("sticky");
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
        $('body,html').animate({scrollTop: 0}, 400);
        return false;
    });

    //
    var topMenu = $("#ac-topmenu"),
            topMenuHeight = topMenu.outerHeight() + 15,
            // All list items
            menuItems = topMenu.find("a")
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
        $('html, body').stop().animate({
            scrollTop: offsetTop
        }, 900, function () {
            location.hash = href.substring(6);
        });
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
        focus: '#name',
        closeOnBgClick: true
    });

    $('[href="#ac-popup-casesend"]').on('click', function (e) {
        $.magnificPopup.instance.next();
        e.preventDefault();
        e.stopPropagation();
    });



    /* Показываем попап с кейсом */
    var optionsLbScrollerCb = {
        open: function () {
            var clone = $('<div class="b-top b-top-clone">');
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
            this.defClose = this.close;
            window.location.hash = this.items[0].inlineElement.data('case');

            if (!$('.ac-popup-modal___social div', this.currItem.inlineElement).length) {
                $('.ac-popup-modal___social', this.currItem.inlineElement).append('<script type="text/javascript">' +
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
            }
        },
        close: function () {
            $('.b-top-clone').remove();
            window.location.hash = '';
        },
        change: function (item) {
            if (item.index === 1) {
                $.magnificPopup.instance.close = function () {
                    $.magnificPopup.instance.prev();
                }
            } else if (typeof this.defClose === 'function') {
                $.magnificPopup.instance.close = this.defClose;
            }
        }
    };

    $('[data-popup="example-works"]').each(function () {
        $(this).magnificPopup({
            items: [
                {src: $(this).attr('href'), type: 'inline'},
                {src: '#ac-popup-casesend', type: 'inline'}
            ],
            preloader: false,
            closeOnBgClick: true,
            callbacks: optionsLbScrollerCb
        });
    });


    $(window).load(function (event) {
        var href, $screen;
        var anchor = location.hash.substring(1);
        if (/^case\d+$/.test(anchor)) {
            $.magnificPopup.open({
                items: [
                    {src: '#ac-popup-' + anchor, type: 'inline'},
                    {src: '#ac-popup-casesend', type: 'inline'}
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

});
