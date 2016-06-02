$(document).ready(function(){

  $(window).scroll(function() {
  if ($(this).scrollTop() > 100){
      $('._ac-header-warp').addClass("sticky");
    }
    else{
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
    $('body,html').animate({scrollTop: 0}, 400); return false;
  });

  //
  var topMenu = $("#ac-topmenu"),
      topMenuHeight = topMenu.outerHeight()+15,
      // All list items
      menuItems = topMenu.find("a"),
      // Anchors corresponding to menu items
      scrollItems = menuItems.map(function(){
        var item = $($(this).attr("href"));
        if (item.length) { return item; }
      });
    menuItems.click(function(e){
      var href = $(this).attr("href"),
          offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
      $('html, body').stop().animate({
          scrollTop: offsetTop
      }, 900);
      e.preventDefault();
    });

  /* Попап для попапа о_О */
  $('.popup-modal__order-link').magnificPopup({
    type: 'inline',
    preloader: false,
    focus: '#ac-who',
    closeOnBgClick: false
  });

  $('.popup-modal__ok').magnificPopup({
    type: 'inline',
    preloader: false,
    closeOnBgClick: false
  });

});
