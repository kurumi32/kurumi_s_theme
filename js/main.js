"use strict";

jQuery(function ($) {
 
    //wipein

  $('.wipe').addClass('in');

  //back to top

  $('#back-to-top').addClass('in');

  // クリックした時
  $("#back-to-top").click(function () {

     // html,body の scrollTop を 0 にanimateする
    // html,body の スクロール量 を 0 にアニメーションする　１sで
    $("html,body").animate({
        scrollTop: 0,
      },1000);       
  });


  // スクロールした時
  $(window).scroll(function () {
    // もし１０００PX以上スクロールしたら
    if ($(window).scrollTop() > 1000) {
      // ボタンを表示する
      $("#back-to-top").addClass("in");
    } else {
      $("#back-to-top").removeClass("in");
    }
  });

});