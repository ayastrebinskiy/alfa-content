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
    $('.popup-modal__mini-link, [href="#ac-popup-mini"],[href="#ac-popup-casesend"]').magnificPopup({
        type: 'inline',
        preloader: false,
        focus: '[name="Client[name]"]',
        closeOnBgClick: true
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

        },
        close: function () {
            $('.b-top-clone').remove();
            window.location.hash = '';
        }
    };
    $('[data-popup="example-works"]').magnificPopup({
        type: 'inline',
        preloader: false,
        closeOnBgClick: true,
        callbacks: optionsLbScrollerCb
    });

    $(window).load(function (event) {
        var href, $screen;
        var anchor = location.hash.substring(1);
        if (/^case\d+$/.test(anchor)) {
            $.magnificPopup.open({
                items: {
                    src: '#ac-popup-' + anchor
                },
                type: 'inline',
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
