
jQuery(function ($) {

  var topBtn = $('.pagetop');
  topBtn.hide();

  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      topBtn.fadeIn();
    } else {
      topBtn.fadeOut();
    }
  });

  /***  topボタンをクリックしたらスクロールして上に戻る ***/
  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 300, 'swing');
    return false;
  });

  /***ハンバーガー・ドロワー***/

  $(".hamburger").click(function () {
    $(this).toggleClass('active');
    $(".gnav").toggleClass('panelactive');
    $(".header").toggleClass('panelactive');
  });

  $(".gnav__item a").click(function () {
      $(".hamburger").removeClass('active');
      $(".gnav").removeClass('panelactive');
  });


  /*** スムーススクロール ***/

  $(document).on('click', 'a[href*="#"]', function () {
    let time = 400;
    let header = $('header').innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $('html,body').animate({ scrollTop: targetY }, time, 'swing');
    return false;
  });


  /*** header  背景色変化 ***/
  jQuery(window).on('scroll', function () {

    if (jQuery('.js-firstview').height() < jQuery(this).scrollTop()) {
   jQuery('.header').addClass('change-color'); }
    else {
    jQuery('.header').removeClass('change-color'); } });


/*** リンク先の位置調整 ***/
    var headH = $("header").outerHeight();
        var animeSpeed = 500;
        var urlHash = location.hash;
        if (urlHash) {
            $("body,html").scrollTop(0);
            setTimeout(function () { 
                var target = $(urlHash);
                var position = target.offset().top - headH;
                $("body,html").stop().animate({
                    scrollTop: position
                }, animeSpeed);
            }, 0);
        }


});

/*** swiper ***/

// top-firstview
let swipeOption = {
  loop: true,
  effect: 'fade',
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  speed: 2000

}
let swiperFv = new Swiper('.swiper-fv', swipeOption);

// top-works
let swipeOption2 = {
  loop: true,
  setWrapperSize: false,
  slidesPerView: 1,
  autoplay: {
    delay: 2000,
  },
  pagination: {
    el: '.swiper-works__pagination',
    type: 'bullets',
    clickable: true,
  },
  speed: 2000

}
let swiperWorks = new Swiper('.swiper-works', swipeOption2);

// single-works
// メイン singleWorkSlide
let swipeOption3 = {
  loop: true,
  centeredSlides: true,
  slidesPerView: 1,
  loopedSlides:　8,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
}
let singleWorkSlider = new Swiper('.singleWork-slider', swipeOption3);

// サムネイル singleWorkThumbs
let swipeOption4 = {
  slidesPerView: 'auto',
  spaceBetween: 8,
  centeredSlides: true,
  loop: true,
  slideToClickedSlide: true,
}
let singleWorkThumbs = new Swiper('.singleWork-thumbs', swipeOption4);

singleWorkSlider.controller.control = singleWorkThumbs;
singleWorkThumbs.controller.control = singleWorkSlider;
