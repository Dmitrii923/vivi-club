<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>イベントカレンダー｜群馬県高崎市にあるキャバクラ「美学 BIGAKU」</title>
<meta name="description" content="群馬県高崎市にあるキャバクラ「美学 BIGAKU」のイベントカレンダーページです。【美学 BIGAKU】は高崎市柳川町のアーケード街にあるキャバクラです。キャバクラ「美学 BIGAKU」はガラードグループが運営しています。">
<meta name="keywords" content="キャバクラ,高崎,群馬,美学,ガラードグループ,イベントカレンダー">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/jquery.bxslider.css" />
<link rel="stylesheet" href="css/drawer.min.css">

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

<!-- parallax scroll本体 -->
<script src="js/jquery.parallax-scroll.min.js"></script>
<script>
$(function() {
    $(".bg-holder").parallaxScroll({
        friction: 0.6
    });
});
</script>

<!--ヘッダー　プラグイン-->
<script>
$(document).ready(function() {
$('.drawer').drawer();
});
userFeed.run();
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

<div class="drawer drawer--right">

  <?php include ('php/header.php'); ?>

<div class="clear"></div>

<div id="page_top_bg">
  <div class="page_title_area">
    <h2>CALENDAR</h2>
  </div>
</div>

<div class="page_base_area">
  <div class="page_base">

    <div class="calendar_page_base">
    
      <div class="calendar_title">
      November<br />
      <span style="font-size: 60%;">2019.10</span>
      </div>
        <div id="shop_event">
          <table class="event_t">
            <tr class="cmt2">
              <td class="data">1</td>
              <td class="naiyou"></td>
            </tr>
            <tr class="cmt2">
              <td class="data">2</td>
              <td class="naiyou">
              <div class="calendar_page_icon" style="color: #FFC;">誕生日</div>
              <div class="calendar_page_title"><a href="event_info.php">タイトルが入ります。タイトルが入ります。タイトルが入ります。</a></div>                
              </td>
            </tr>
            <tr class="event sat">
              <td class="data">3</td>
              <td class="naiyou">
              <div class="calendar_page_icon" style="color: #F99;">店休日</div>
              <div class="calendar_page_title"><a href="event_info.php">タイトルが入ります。タイトルが入ります。タイトルが入ります。</a></div>                
              </td>
            </tr>
            <tr class="event sun">
              <td class="data">4</td>
              <td class="naiyou">
              <div class="calendar_page_icon" style="color: #CFF;">イベント</div>
              <div class="calendar_page_title"><a href="event_info.php">タイトルが入ります。タイトルが入ります。タイトルが入ります。</a></div>                
              </td>
            </tr>
            <tr class="cmt2">
              <td class="data">5</td>
              <td class="naiyou"></td>
            </tr>
            <tr class="cmt2">
              <td class="data">6</td>
              <td class="naiyou"></td>
            </tr>
          </table>

          <div class="event_next">
          <a href="" class="btn_2">12月＞＞</a>
          </div>
        </div>
        <div class="clear"></div>    
        
    </div>

  </div>
</div><!--page_base_area-->


  <?php include ('php/footer.php'); ?>

</main>

</div><!--drawer drawer--right-->

</body>

</html>