<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>群馬県高崎市にあるキャバクラ「ヴィヴィクラブ」</title>
<meta name="description" content="群馬県高崎市にあるキャバクラ「ヴィヴィクラブ」のオフィシャルホームページです。「ヴィヴィクラブ」は高崎市柳川町のアーケード街にあるキャバクラです。キャバクラ「ヴィヴィクラブ」はガラードグループが運営しています。">
<meta name="keywords" content="キャバクラ,高崎,群馬,ヴィヴィクラブ,ガラードグループ">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/drawer.min.css">
<link rel="stylesheet" href="css/swiper.css">

<link href='instagram-feed/css/sb-instagram-standalone-2.7.3.css' rel='stylesheet' id='sb_instagram_standalone_styles-css' type='text/css' media='all' />
<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css?ver=4.6.3' rel='stylesheet' id='sbi-font-awesome-css' type='text/css' media='all' />

<!-- photo css -->
<link rel="stylesheet" href="photoswaipe/dist/photoswipe.css"/>
<link rel="stylesheet" href="photoswaipe/default-skin/default-skin.css"/>

<!-- フォント読み込み -->
<link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<link rel="canonical" href="">

<meta name="format-detection" content="telephone=no">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<!--ヘッダー-->

<!--スライダー・カルーセル　プラグイン-->
<script src="js/jquery.bxslider.min.js"></script>
<!--スライダー・カルーセル　プラグイン-->

<script src="js/jquery.cookie.js"></script>

<script src="js/slider.js"></script>

<!-- parallax scroll本体 -->
<script src="js/jquery.parallax-scroll.min.js"></script>
<script>
$(function() {
    $(".bg-holder").parallaxScroll({
        friction: 0.6
    });
});
</script>

<!--フェード　プラグイン-->
<script>
$(function() {
	var h = $(window).height(); //ブラウザウィンドウの高さを取得
	$('#main-contents').css('display','none'); //初期状態ではメインコンテンツを非表示
	$('#topfade-bg ,#topfade').height(h).css('display','block'); //ウィンドウの高さに合わせでローディング画面を表示
	});
	$(window).load(function () {
		$('#topfade-bg').delay(1000).fadeOut(500); //$('#loader-bg').fadeOut(800);でも可
		$('#topfade').delay(800).fadeOut(300); //$('#loader').fadeOut(300);でも可
		$('#main-contents').css('display', 'block'); // ページ読み込みが終わったらメインコンテンツを表示する
		});
		$(function(){
			setTimeout('stopload()',3000);　//いつまでもローディング状態にならないように3秒で強制表示させる
			});
			function stopload(){ //強制表示の関数
			$('#main-contents').css('display','block');
			$('#topfade-bg').delay(1000).fadeOut(500);
			$('#topfade').delay(800).fadeOut(300);
}
</script>

<script>
$(function(){
    if($.cookie("access")){
        $('#topfade-bg').css({display:'none'});
    }
    $(window).load(function(){
        $.cookie("access",$('body').addClass('access'));
    })
});
</script>

<!--画像調整-->
<script>
$(document).ready(function () {
    var imgWidth = $(".top_cast_box_wrap").width();
    var imgheight = (imgWidth*1.0);
    $(".top_cast_box_wrap").css('height',imgheight);
});
$(window).resize(function () {  
    var imgWidth = $(".top_cast_box_wrap").width();
    var imgheight = (imgWidth*1.0);
    $(".top_cast_box_wrap").css('height',imgheight);
});
</script>
<!--画像調整-->

<!--ヘッダー　プラグイン-->
<script>
 $(document).ready(function() {
   $('.drawer').drawer();
 });
</script>

<script>
$(function() {
  var $win = $(window),
      $header = $('#global'),
      headerHeight = $header.outerHeight(),
      startPos = 0;

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > startPos && value > headerHeight ) {
      $header.css('top', '-' + headerHeight + 'px');
    } else {
      $header.css('top', '0');
    }
    startPos = value;
  });
});
</script>

<script>
$(function() {
  var $win = $(window),
      $header = $('.drawer-hamburger'),
      headerHeight = $header.outerHeight(),
      startPos = 0;

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > startPos && value > headerHeight ) {
      $header.css('top', '-' + headerHeight + 'px');
    } else {
      $header.css('top', '0');
    }
    startPos = value;
  });
});
</script>

<script>
$(function() {
  var $win = $(window),
      $header = $('.header_space'),
      headerHeight = $header.outerHeight(),
      startPos = 0;

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > startPos && value > headerHeight ) {
      $header.css('top', '-' + headerHeight + 'px');
    } else {
      $header.css('top', '0');
    }
    startPos = value;
  });
});
</script>
<!--ヘッダー　プラグイン-->

<!--アニメーション　プラグイン-->
<script>
$(function(){
    $(window).scroll(function (){
        $('.fadein').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight + 50){
                $(this).addClass('scrollin');
            }
        });
    });
});
</script>
<!--アニメーション　プラグイン-->

<!--サイド　プラグイン-->
<script>
$(function() {
var topBtn = $('#page-top');	
topBtn.hide();
//スクロールが100に達したらボタン表示
$(window).scroll(function () {
　if ($(this).scrollTop() > 100) {
　　topBtn.fadeIn();}
 　　　else { topBtn.fadeOut();
	}
	});
//スクロールしてトップ
    topBtn.click(function () {
	$('body,html').animate({
	scrollTop: 0}, 500);
		return false;
    });
});
</script>
<!--サイド　プラグイン-->

</head>

<body>

<div id="topfade-bg"> 
<div id="topfade">
<div id="" class="top-animation animated bounceInDown"><img src="img/logo.svg" alt="キャバクラ 高崎「ヴィヴィクラブ」"></div>
</div>
</div>

<div class="drawer drawer--right">

  <header role="banner">
    <button type="button" class="drawer-toggle drawer-hamburger">
      <span class="sr-only"></span>
      <span class="drawer-hamburger-icon"></span>
    </button>
    <nav class="drawer-nav" role="navigation">
      <ul class="drawer-menu">
        <li class="drawer-first">
          <div class="wrapper_sidemenu">
            <div class="element_sidemenu_1"><a href="tel:027-" class="btn_sidemenu"><img src="img/tel_side.svg"></a></div>
            <div class="element_sidemenu_2"><a href="https://goo.gl/maps/a5JoZMEcwLPEbUUN6" class="btn_sidemenu"><img src="img/map_side.svg"></a></div>
          </div>
          <div class="drawer-line"></div>
        </li>       
        <li>
          <a class="drawer-brand" href="hotnews.php" title="キャバクラ 高崎「ヴィヴィクラブ」ホットニュース">HOT NEWS</a>
          <div class="drawer-line"></div>
        </li>
        <li>
          <a class="drawer-brand" href="schedule.php" title="キャバクラ 高崎「ヴィヴィクラブ」出勤情報">SCHEDULE</a>
          <div class="drawer-line"></div>
        </li>                
        <li>
          <a class="drawer-brand" href="cast.php" title="キャバクラ 高崎「ヴィヴィクラブ」キャスト">CAST LIST</a>
          <div class="drawer-line"></div>
        </li>
        <li>
          <a class="drawer-brand" href="event.php" title="キャバクラ 高崎「ヴィヴィクラブ」イベントカレンダー">EVENT CALENDAR</a>
          <div class="drawer-line"></div>
        </li>
        <li>
          <a class="drawer-brand" href="system.php" title="キャバクラ 高崎「ヴィヴィクラブ」料金システム">SYSTEM</a>
          <div class="drawer-line"></div>
        </li>
        <li>
          <a class="drawer-brand" href="shopphoto.php" title="キャバクラ 高崎「ヴィヴィクラブ」店内写真">SHOP PHOTO</a>
          <div class="drawer-line"></div>
        </li>
        <li>
          <a class="drawer-brand" href="https://www.garrard-group.com/bigaku.php" title="キャバクラ 高崎「ヴィヴィクラブ」キャスト求人情報">CAST RECRUIT</a>
          <div class="drawer-line"></div>          
        </li>
        <li>
          <a class="drawer-brand" href="https://www.garrard-group.com/staff.php" title="キャバクラ 高崎「ヴィヴィクラブ」スタッフ求人情報">STAFF RECRUIT</a>
          <div class="drawer-line"></div>          
        </li>        
        <li>
          <a class="drawer-brand" href="https://www.garrard-group.com/" target="_blank" title="キャバクラ 高崎・前橋・熊谷「ガラードグループ」">GROUP</a>
          <div class="drawer-line"></div>          
        </li>                   
        <li>
          <div class="wrapper_side">
            <div class="element_sns"><a href="https://www.facebook.com/" target="_blank" title="キャバクラ 高崎「ヴィヴィクラブ」Facebook"><img src="img/facebook_2.svg" alt="キャバクラ 高崎「ヴィヴィクラブ」Facebook" /></a></div>          
            <div class="element_sns"><a href="https://www.instagram.com/" target="_blank" title="キャバクラ 高崎「ヴィヴィクラブ」Instagram"><img src="img/instagram_2.svg" alt="キャバクラ 高崎「ヴィヴィクラブ」Instagram" /></a></div>          
            <div class="element_sns"><a href="https://twitter.com/" target="_blank" title="キャバクラ 高崎「ヴィヴィクラブ」Twitter"><img src="img/twitter_2.svg" alt="キャバクラ 高崎「ヴィヴィクラブ」Twitter" /></a></div> 
            <div class="element_sns"><a href="https://ameblo.jp/bigaku2016/" target="_blank" title="キャバクラ 高崎「ヴィヴィクラブ」ブログ"><img src="img/blog_2.svg" alt="キャバクラ 高崎「ヴィヴィクラブ」ブログ" /></a></div>                                              
          </div>
        </li>
      </ul>
    </nav>
  </header>
  
<main role="main">

<div id="global">
<ul class="menu">
  <h1><a href="index.php" title="キャバクラ 高崎「ヴィヴィクラブ」"><img src="img/logo.svg" alt="キャバクラ 高崎「ヴィヴィクラブ」"></a></h1>
    <li class="menu__single">
      <a href="hotnews.php" title="キャバクラ 高崎「ヴィヴィクラブ」ホットニュース">HOT NEWS</a>
    </li>
    <li class="menu__single">
      <a href="schedule.php" title="キャバクラ 高崎「ヴィヴィクラブ」出勤情報">SCHEDULE</a>
    </li>      
    <li class="menu__single">
      <a href="cast.php" title="キャバクラ 高崎「ヴィヴィクラブ」キャスト">CAST LIST</a>
    </li>        
    <li class="menu__single">
      <a href="event.php" title="キャバクラ 高崎「ヴィヴィクラブ」イベントカレンダー">EVENT CALENDAR</a>
    </li>
    <li class="menu__single">
      <a href="system.php" title="キャバクラ 高崎「ヴィヴィクラブ」料金システム">SYSTEM</a>
    </li>
    <li class="menu__single">
      <a href="shopphoto.php" title="キャバクラ 高崎「ヴィヴィクラブ」店内写真">SHOP PHOTO</a>
    </li>                
    <li class="menu__single">
        <a href="#" class="init-bottom" title="キャバクラ 高崎「ヴィヴィクラブ」求人情報">RECRUIT</a>
        <ul class="menu__second-level">
            <li><a href="https://www.garrard-group.com/bigaku.php" title="キャスト求人">キャスト求人</a></li>
            <li><a href="https://www.garrard-group.com/staff.php" title="スタッフ求人">スタッフ求人</a></li>                       
        </ul>
    </li>    
    <li class="menu__single">
      <a href="https://www.garrard-group.com/" target="_blank" title="キャバクラ 高崎・前橋・熊谷「ガラードグループ」">GROUP</a>
    </li>           
</ul>
</div>

<div class="header_space">
  <div class="header_space_img"><h1><a href="index.php" title="キャバクラ 高崎「ヴィヴィクラブ」"><img src="img/logo.svg" alt="キャバクラ 高崎「ヴィヴィクラブ」"></a></h1></div>
  <div class="clear"></div>
</div>

<div class="header_space_sp"></div>

<div class="top_img_area">

<div class="swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <div class="s-three-wrap">
      <img src="img/top1.jpg" alt="キャバクラ 高崎「ヴィヴィクラブ」">
      <a href="" class="s-three-button fade_3" title="キャバクラ 高崎「ヴィヴィクラブ」">詳細はこちら</a>
      </div>
    </div>
    <div class="swiper-slide">
      <div class="s-three-wrap">
      <img src="img/top2.jpg" alt="キャバクラ 高崎「ヴィヴィクラブ」">
      <a href="" class="s-three-button fade_3" title="キャバクラ 高崎「ヴィヴィクラブ」">詳細はこちら</a>
      </div>
    </div>
    <div class="swiper-slide">
      <div class="s-three-wrap">
      <img src="img/top3.jpg" alt="キャバクラ 高崎「ヴィヴィクラブ」">
      </div>
    </div>
    <div class="swiper-slide">
      <div class="s-three-wrap">
      <img src="img/top4.jpg" alt="キャバクラ 高崎「ヴィヴィクラブ」">
      </div>
    </div>        
  </div>
  <div class="swiper-pagination"></div>
  <!--div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div-->
</div>
<script src="js/swiper.js"></script>
<script>
  var swiper = new Swiper('.swiper-container', {
    effect: "slide", //"slide", "fade", "cube", "coverflow" or "flip"
	loop: true,
    speed: 500,
    autoHeight: true,
	slidesPerView: 2.2,
	spaceBetween: 20, 
	centeredSlides : true,
	breakpoints: {
		767: {
			slidesPerView: 1,
			spaceBetween: 0
		},
	},			
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
  },
    pagination: {
      el: '.swiper-pagination',
      dynamicBullets: true,
  },
    autoplay: {
      delay: 3000,
      disableOnInteraction: true,
  },   
  });
</script>
 
</div>

<div class="clear"></div>

<div class="top_news_bg">
  <div class="top_contents_in"> 
    <h2>HOT NEWS</h2>
    <div class="wrapper">
      <div class="element_1">
        <a href="hotnews_2.php">    
        <div class="top_hotnews_a">      
          <div class="top_hotnews_b">
            <div class="trimming"><img src="img/test_1.jpg" class=""></div>
          </div>
          <div class="top_hotnews_c">
            <div class="top_hotnews_ymd">2018.10.20 / 20:20</div>              
            <div class="top_hotnews_title">新作モエ・エ・シャンドン入荷中</div>
            <div class="top_hotnews_border"></div>
            <div class="top_hotnews_naiyou">期間限定のモエ・エ・シャンドンが入荷中しております。期間限定ですのでこの機会を逃したら飲めない!?</div>
          </div>
          <div class="clear"></div>            
        </div><!--top_hotnews_a-->
        </a>        
      </div><!--element_1-->
      <div class="element_1">
        <a href="hotnews_2.php">    
        <div class="top_hotnews_a">      
          <div class="top_hotnews_b">
            <div class="trimming"><img src="img/ai-1.jpg" class=""></div>
          </div>
          <div class="top_hotnews_c">
            <div class="top_hotnews_ymd">2018.10.15 / 20:20</div>              
            <div class="top_hotnews_title">あいちゃん誕生日イベント開催</div>
            <div class="top_hotnews_border"></div>
            <div class="top_hotnews_naiyou">あいちゃんの誕生日イベントを開催します！！開催日は11月11日です。当店であいちゃんのお誕生日をお祝いしよう！</div>
          </div>
          <div class="clear"></div>            
        </div>
        </a>
      </div><!--element_1-->            
      
    </div><!--wrapper-->
    <div class="top_button_area_2"><a href="hotnews.php" class="btn_under" title="キャバクラ 高崎「ヴィヴィクラブ」ホットニュース">More</a></div> 
  
  </div>  
</div>

<div class="top_schedule_bg">
  <div class="top_contents_in">
  <h2>TODAYs CAST</h2>
  <div class="top_schedule_space">
    <div class="wrapper">
      <div class="element_2">
        <div class="top_schedule_box">
          <a href="prof.php" title="キャバクラ 高崎「ヴィヴィクラブ」">
          <div class="top_cast_box_wrap">
          <img src="img/ai.jpg" class="" alt="キャバクラ 高崎「ヴィヴィクラブ」">
          <p>あい</p>
          </div>
          </a>
        </div>
      </div><!--element_2-->
      <div class="element_2">
        <div class="top_schedule_box">
          <a href="prof.php" title="キャバクラ 高崎「ヴィヴィクラブ」">
          <div class="top_cast_box_wrap">
          <img src="img/nana.jpg" class="" alt="キャバクラ 高崎「ヴィヴィクラブ」">
          <p>なな</p>
          </div>
          </a>
        </div>
      </div>
      <div class="element_2">
        <div class="top_schedule_box">
          <a href="prof.php" title="キャバクラ 高崎「ヴィヴィクラブ」">
          <div class="top_cast_box_wrap">
          <img src="img/miki.jpg" class="" alt="キャバクラ 高崎「ヴィヴィクラブ」">
          <p>あああああああああああああああああああああ</p>
          </div>
          </a>
        </div>
      </div>
      <div class="element_2">
        <div class="top_schedule_box">
          <a href="prof.php" title="キャバクラ 高崎「ヴィヴィクラブ」">
          <div class="top_cast_box_wrap">
          <img src="img/test_2.jpg" class="" alt="キャバクラ 高崎「ヴィヴィクラブ」">
          <p>みか</p>
          </div>
          </a>
        </div>
      </div>
      <div class="element_2">
        <div class="top_schedule_box">
          <a href="prof.php" title="キャバクラ 高崎「ヴィヴィクラブ」">
          <div class="top_cast_box_wrap">
          <img src="img/nophoto.jpg" class="" alt="キャバクラ 高崎「ヴィヴィクラブ」">
          <p>ゆうみ</p>
          </div>
          </a>
        </div>
      </div>
      <div class="element_2">
        <div class="top_schedule_box">
          <a href="prof.php" title="キャバクラ 高崎「ヴィヴィクラブ」">
          <div class="top_cast_box_wrap">
          <img src="img/nophoto.jpg" class="" alt="キャバクラ 高崎「ヴィヴィクラブ」">
          <p>ゆうこ</p>
          </div>
          </a>
        </div>
      </div>
      <div class="element_2">
        <div class="top_schedule_box">
          <a href="prof.php" title="キャバクラ 高崎「ヴィヴィクラブ」">
          <div class="top_cast_box_wrap">
          <img src="img/nophoto.jpg" class="" alt="キャバクラ 高崎「ヴィヴィクラブ」">
          <p>かな</p>
          </div>
          </a>
        </div>
      </div>
      <div class="element_2">
        <div class="top_schedule_box">
          <a href="prof.php" title="キャバクラ 高崎「ヴィヴィクラブ」">
          <div class="top_cast_box_wrap">
          <img src="img/nophoto.jpg" class="" alt="キャバクラ 高崎「ヴィヴィクラブ」">
          <p>さおり</p>
          </div>
          </a>
        </div>
      </div>
      <div class="element_2">
        <div class="top_schedule_box">
          <a href="prof.php" title="キャバクラ 高崎「ヴィヴィクラブ」">
          <div class="top_cast_box_wrap">
          <img src="img/nophoto.jpg" class="" alt="キャバクラ 高崎「ヴィヴィクラブ」">
          <p>ああああああああああああああああああ</p>
          </div>
          </a>
        </div>
      </div>
      <div class="element_2">
        <div class="top_schedule_box">
          <div class="top_cast_box_wrap">
          <img src="img/nophoto.jpg" class="" alt="キャバクラ 高崎「ヴィヴィクラブ」体験入店">
          <p>体験入店 1</p>
          </div>
        </div>
      </div>
      <div class="element_2">
        <div class="top_schedule_box">
          <div class="top_cast_box_wrap">
          <img src="img/nophoto.jpg" class="" alt="キャバクラ 高崎「ヴィヴィクラブ」体験入店">
          <p>体験入店 2</p>
          </div>
        </div>
      </div>                                                                                                
    </div>
 
    <div class="top_button_area_2"><a href="schedule.php" class="btn_under" title="キャバクラ 高崎「ヴィヴィクラブ」出勤情報">More</a></div>   
    </div><!--top_schedule_space-->
     
  </div><!--top_contents_in-->
</div><!--top_schedule_bg-->

<div class="top_instagram_bg">
  <h3>INSTAGRAM</h3>
  <div class="top_contents_in">
    <div class="top_instagram_base">
	<script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-e1a0d23c-2ca8-47cb-b03b-b3d7d828b4bd"></div>    
    
    </div>
    <div id="clear"></div>     
  </div>
</div>


  


<div id="footer">

  <div class="page-side">
    <p id="page-top"><a href="#top"><span class="arrow"></span></a></p>
  </div>

  <div class="footer_in">
    <h4>SHOP DATA</h4>
    <div class="footer_shop">
    Add. 群馬県高崎市中紺屋町11-1 KビルB<br />
    Tel. <a href="tel:027-324-5678">027-324-5678</a><br />
    Open. 20:30～LAST / Closed. 日曜日<br />
    </div>
  </div>
  
  <div class="top_access_box">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3214.420024825492!2d139.00313221527665!3d36.326368880048875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601e8d7e8f7ed4c9%3A0x30cfdfc968171fd4!2z44CSMzcwLTA4MjMg576k6aas55yM6auY5bSO5biC5Lit57S65bGL55S677yR77yR!5e0!3m2!1sja!2sjp!4v1557921262099!5m2!1sja!2sjp" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  
  <div class="footer_in">
    <ul class="inline-block footer_img_1">
      <li><a href="https://www.facebook.com/bigakutakasaki/" target="_blank" title="キャバクラ 高崎「ヴィヴィクラブ」Facebook"><img src="img/facebook_2.svg" alt="キャバクラ 高崎「美学」Facebook" /></a></li>
      <li><a href="https://www.instagram.com/bigaku2016/" target="_blank" title="キャバクラ 高崎「ヴィヴィクラブ」Instagram"><img src="img/instagram_2.svg" alt="キャバクラ 高崎「美学」Instagram" /></a></li>
      <li><a href="https://twitter.com/bigaku2016" target="_blank" title="キャバクラ 高崎「ヴィヴィクラブ」Twitter"><img src="img/twitter_2.svg" alt="キャバクラ 高崎「美学」Twitter" /></a></li>
      <li><a href="https://ameblo.jp/bigaku2016/" target="_blank" title="キャバクラ 高崎「ヴィヴィクラブ」ブログ"><img src="img/blog_2.svg" alt="キャバクラ 高崎「美学」ブログ" /></a></li>      
    </ul>


    <div class="footer_2">
    <div class="footer_title"><a href="https://www.garrard-group.com/" target="_blank" title="キャバクラ 高崎・前橋・熊谷「ガラードグループ」"><img src="img/garrard_logo.svg" alt="キャバクラ 高崎・前橋・熊谷「ガラードグループ」" /></a></div>
    
    
    <ul class="inline-block_3 footer_img_2">
      <li><a href="https://www.bigaku-takasaki.com/" target="_blank" title="キャバクラ 高崎「ヴィヴィクラブ」"><img src="img/vivi_logo.svg" alt="キャバクラ 高崎「ヴィヴィクラブ」" /></a></li>
      <li><a href="https://www.bigaku-takasaki.com/" target="_blank" title="キャバクラ 高崎「美学」"><img src="img/bigaku_logo.svg" alt="キャバクラ 高崎「美学」" /></a></li>      
      <li><a href="https://www.c2-takasaki.com/" target="_blank" title="キャバクラ 高崎「C-2」"><img src="img/c2_logo.svg" alt="キャバクラ 高崎「C-2」" /></a></li>
      <li><a href="https://www.club-charm.jp/" target="_blank" title="キャバクラ 高崎「チャーム」"><img src="img/charm_logo.svg" alt="キャバクラ 高崎「チャーム」" /></a></li>
      <li><a href="https://www.club-cuore.com/" target="_blank" title="キャバクラ 前橋「クオーレ」"><img src="img/cuore_logo.svg" alt="キャバクラ 前橋「クオーレ」" /></a></li>
      <li><a href="https://www.clubaman.net/" target="_blank" title="キャバクラ 熊谷「アマン」"><img src="img/aman_logo.svg" alt="キャバクラ 熊谷「アマン」" /></a></li>                  
    </ul>
    </div>
    
    <p>© 2019 garrard group.</p>
  </div>
   
</div>

</main>

</div><!--drawer drawer--left-->

</body>

</html>