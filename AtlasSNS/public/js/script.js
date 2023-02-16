
jQuery(function ($) {
  $('.ac-box').on('click', function () {
    /*クリックでコンテンツを開閉*/
    $('.header-right-menu').slideToggle(200);
    /*矢印の向きを変更*/
    $('.accordion-title').toggleClass('open', 200);
  });

});
