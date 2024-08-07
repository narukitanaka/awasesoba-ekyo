///////////////////////////////////////////
//ハンバーガーメニュー
//////////////////////////////////////////
// $('.hambager').on('click', function () {
//   navOpen();
// });
// let navFlg = false;
// function navOpen() {
//   if (!navFlg) {
//     $('.hamberger-wrap').addClass('is-ham-open');
//     $('.mega-menu').addClass('is-megamenu-open');
//     $('.header-inner').addClass('is-megamenu-icon');
//     $('#header').addClass('is-megamenu-headfix');
//     $('.ham-txt').text('閉じる');
//     navFlg = true;
//   } else {
//     $('.hamberger-wrap').removeClass('is-ham-open');
//     $('.mega-menu').removeClass('is-megamenu-open');
//     $('.header-inner').removeClass('is-megamenu-icon');
//     $('#header').removeClass('is-megamenu-headfix');
//     $('.ham-txt').text('メニュー');
//     navFlg = false;
//   }
// }


//ハンバーガーメニュー アコーディオン
///////////////////////////////////////////
// $(document).ready(function() {
//   $(".little-nav").hide();
//   $(".nav01 .parent").on('click', function() {
//     $(this).toggleClass('active');
//     $(this).next('.little-nav').slideToggle(300);
//   });
// });


///////////////////////////////////////////
//スクロールフェードイン
///////////////////////////////////////////
const fadeIn = document.querySelectorAll(".fadeIn");
const options = {
  rootMargin: '0px',
  threshold: 0.6
};
const observer = new IntersectionObserver(showElement, options);
fadeIn.forEach((fadeIn) => {
  observer.observe(fadeIn);
});
function showElement(entries) {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("active");
    }
  });
}


///////////////////////////////////////////
//FAQ アコーディオン
///////////////////////////////////////////
$(".qa-list dd").hide();
$(".qa-list dl").on("click", function(e){
    $('dd',this).slideToggle('fast');
    if($(this).hasClass('open')){
        $(this).removeClass('open');
    }else{
        $(this).addClass('open');
    }
});



//////////////////////////////////////////////////////////////////////////////
//各Swiperイベントの初期化
//////////////////////////////////////////////////////////////////////////////
document.addEventListener('DOMContentLoaded', (event) => {

  //トップMVスライダー
  const swiper = new Swiper(".mv-swiper", {
    loop: true,
    effect: 'fade',
    speed: 2000, // ２秒かけながら次の画像へ移動
    autoplay: {
      delay: 4000, // ４秒後に次の画像へ
      disableOnInteraction: false, // ユーザー操作後に自動再生を再開する
    },
    // ページネーション
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    allowTouchMove: false, // マウスでのスワイプを禁止
  });

  //商品詳細 こちらもおすすめスライダー
  var itemdetail_recommendswiper; 
  $(window).on('load resize', function(){
      var w = $(window).width();
      if (w <= 1000) {
        if (itemdetail_recommendswiper) {
          return;
        } else {
          itemdetail_recommendswiper = new Swiper('.recommend_swiper', {
            autoplay: {
              delay: 3000,
            },
            scrollbar: {
              el: '.swiper-scrollbar', //要素指定
            },
            breakpoints: {
              360: {
                slidesPerView: 1.7,
                spaceBetween: 20,
              },
              769: {
                slidesPerView: 5,
                spaceBetween: 10,
              }
            },
          });
        }
      } else {
        if (itemdetail_recommendswiper) {
          itemdetail_recommendswiper.destroy();
          itemdetail_recommendswiper = undefined;
        } 
      } 
  });



});


////////////////////////////////////////////////////////////////////////////////////////
// GSAPアニメーション
///////////////////////////////////////////////////////////////////////////////////////