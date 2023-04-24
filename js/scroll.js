$('#Form').click(function () {
  var elmHash = $(this).attr('href');
  var pos = $(elmHash).offset().top;
  $('body,html').animate({ scrollTop: pos }, 1000);
  return false;
});
$('#LinkForm').click(function () {
  var elmHash = $(this).attr('href');
  var pos = $(elmHash).offset().top;
  $('body,html').animate({ scrollTop: pos }, 1000);
  return false;
});
$('#linkForm').click(function () {
  var elmHash = $(this).attr('href');
  var pos = $(elmHash).offset().top;
  $('body,html').animate({ scrollTop: pos }, 1000);
  return false;
});


var scrollEnd = $('#form').offset().top; //ページ上部からの距離を取得
var distance = 0;
$(document).scroll(function () {
  distance = $(this).scrollTop(); //スクロールした距離を取得
  if (scrollEnd <= distance) {
    $('.sp-banner').addClass('hide');
  } else {
    $('.sp-banner').removeClass('hide');
  }
});
var scrollEnd = $('#form').offset().top; //ページ上部からの距離を取得
var distance = 0;
$(document).scroll(function () {
  distance = $(this).scrollTop(); //スクロールした距離を取得
  if (scrollEnd <= distance) {
    $('.pc-banner').addClass('hide');
  } else {
    $('.pc-banner').removeClass('hide');
  }
});
