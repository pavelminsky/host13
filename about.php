<?php include ("header_include.php"); ?>



<link rel="stylesheet" type="text/css" href="/css/fancybox.css?v=2.1.1" media="screen">

<link href="/css/video-js.css" rel="stylesheet">
<script type="text/javascript" src="/js/video.js"></script>
<style type="text/css">
.vjs-default-skin .vjs-play-progress {background: #969696;}
.vjs-default-skin .vjs-load-progress {background: #5a5a5a;}
.vjs-default-skin .vjs-seek-handle {display: none;}
.vjs-default-skin .vjs-current-time-display, .vjs-default-skin .vjs-remaining-time-display {font: normal 10px Arial; color: #6f7374; text-shadow: none;}
</style>

</head><body id="about">

<noscript><style>.dim {display: none;} #counters:hover {bottom: 0;}</style><div style="position: absolute; bottom: 80px; left: 50%; width: 360px; z-index: 9999; margin-left: -180px; font-size: 14px; color: #849091; line-height: 20px; text-align: center; border: 1px solid #849091; background-color: #000000;">В вашем браузере отключен JavaScript</div></noscript>
<div class="dim">&nbsp;</div>



<div class="menu noselect">
	<a id="menu1" class="fadeout" href="/">Главная</a>
	<a id="menu2" class="fadeout off" href="javascript:void(0)">Новости</a>
	<a id="menu3" class="fadeout" href="/book/">Книга</a>
	<a id="menu4" class="fadeout active" href="/about/">Фильм</a>
	<a id="menu5" class="fadeout" href="/team/">Команда</a>
	<a id="menu6" class="fadeout" href="/video/">Видео</a>
	<a id="menu7" class="fadeout" href="/gallery/">Кадры</a>
</div>

<!--div class="index_wrap noselect">
	<div class="index_text">&nbsp;</div>
	<div class="index_date">&nbsp;</div>
	<div class="logo_big">&nbsp;</div>
</div-->

<div class="age_small noselect">&nbsp;</div>

<div class="footer noselect"><div class="copy">&copy; 2013 &laquo;<a class="fadeout" href="http://www.westvideo.ru/">Вест Видео</a>&raquo; &nbsp;&nbsp; Создание сайта: <a class="fadeout" href="http://www.kg-design.ru/">КГ-Дизайн</a></div></div>

<div id="counters"><div class="counters_list"><p><?php //include ("counters_include.php"); ?></p></div></div>


<style type="text/css">
.testtext {display: block; width: 54%; min-width: 500px; position: absolute; right: 0; top: 7%; text-align: left; z-index: 3; color: #ffcb90; margin: 20px 40px 20px 20px; padding-bottom: 70px; text-shadow: 0 1px 2px #471800;}
.testtext p {padding-bottom: 15px;}
</style>
<div class="testtext">

	<div style="height: 200px;">&nbsp;</div>

	<!--div class="noselect" style="margin-left: 100px; margin-bottom: 20px; display: inline-block; background-color: black; -webkit-border-radius: 50%; -moz-border-radius: 50%; border-radius: 50%;"><img src="/images/spinner.gif" style="padding: 6px;"></div-->
	
	
	<div style="font-weight: bold; font-size: 48px; line-height: 50px; padding-bottom: 20px; padding-left: 150px; color: #ffe9d2;">Земля в&nbsp;опасности!</div>
	
	<p style="font-size: 14px; padding-left: 120px; color: #ffe2c3;"><b>«Гостья»</b> – экранизация одноимённой книги <b>Стефани Майер</b> – той самой, что своим циклом <b>«Сумерки»</b> в одиночку начала бум литературы и кинематографа, нацеленных на девушек. Но если культовая сага перевернула представление женского населения Земли о городском фэнтези, то своим новым романом (и его двумя потенциальными сиквелами) Стефани нацелилась на фантастику.</p>

	<p style="font-size: 16px; padding-left: 80px; color: #ffd9b1;">На Земле будущего человечеству в его привычном виде практически не осталось места. Инопланетяне-паразиты, Души, наводнили планету, проникая в тела живущих на ней людей и заменяя собой оригинальные личности. Очень скоро люди становятся вымирающим видом и из последних сил отбиваются от наслаждающихся завоёванной планетой Душ.</p>

	<p style="font-size: 18px; padding-left: 30px; color: #ffd2a0;">Главная героиня <b>«Гостьи»</b> — Мелани — одна из немногих выживших. Она встречает Джареда Хоу, они влюбляются друг друга, и даже жестокий окружающий мир, кажется, не может помешать их счастью... Пока девушку не ловят и не поселяют в её тело Душу по имени Ванда, надеясь через воспоминания Мелани узнать местонахождение прибежища людей.</p>
	
	<p style="font-size: 20px; padding-left: 0; color: #ffcb90;">Вот только на этот раз результат подселения оказывается неожиданным: Мелани не исчезает до конца, и теперь они с Вандой вынуждены сосуществовать в одном теле, деля мысли, воспоминания... и, конечно же, чувства. Чувства, которые убеждают Ванду предать свою расу и вместо этого помочь ненавидящим её людям.</p>

</div>


<!-- Index: background-size fix for IE8 -->
<!--[if lt IE 9]><script src="/js/jquery.backgroundSize.js" type="text/javascript"></script><![endif]-->
<script type="text/javascript">
$(function() {
$("body").css({backgroundSize: "cover"});
});
</script>

<!-- Fancybox -->
<script type="text/javascript" src="/js/jquery.fancybox.js?v=2.1.1"></script>
<script type="text/javascript" src="/js/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript" src="/js/jquery.fancybox-media.js?v=1.0.4"></script>
<script type="text/javascript">
$(document).ready(function() {
$('.gallery').fancybox({
nextClick : false,
'margin' : 50,
helpers : {thumbs : {width  : 50, height : 50}}
});
$('.videos').fancybox({
arrows    : false,
nextClick : false,
helpers : {thumbs : {width  : 90, height : 50}}
});
});
</script>

</body></html>