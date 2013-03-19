<?php include ("header_include.php"); ?>



<link rel="stylesheet" type="text/css" href="/css/fancybox.css?v=2.1.1" media="screen">

<script type="text/javascript">
$(document).ready(function(){
var $glowingLogo = $(".logo_big_glow"),cycle;
(cycle = function() {
$glowingLogo.animate({opacity:0},4000).delay(500).animate({opacity:1},4000, cycle);
})();
});
</script>

<link href="/css/video-js.css" rel="stylesheet">
<script type="text/javascript" src="/js/video.js"></script>
<style type="text/css">
.vjs-default-skin .vjs-play-progress {background: #969696;}
.vjs-default-skin .vjs-load-progress {background: #5a5a5a;}
.vjs-default-skin .vjs-seek-handle {display: none;}
.vjs-default-skin .vjs-current-time-display, .vjs-default-skin .vjs-remaining-time-display {font: normal 10px Arial; color: #6f7374; text-shadow: none;}
</style>

</head><body id="index">

<noscript><style>.dim {display: none;} #counters:hover {bottom: 0;}</style><div style="position: absolute; bottom: 80px; left: 50%; width: 360px; z-index: 9999; margin-left: -180px; font-size: 14px; color: #849091; line-height: 20px; text-align: center; border: 1px solid #849091;">В вашем браузере отключен JavaScript</div></noscript>
<div class="dim">&nbsp;</div>





<div class="menu">
	<a id="menu1" class="fadeout active" href="/">Главная</a>
	<a id="menu2" class="fadeout" href="javascript:void(0)">Новости</a>
	<a id="menu3" class="fadeout off" href="javascript:void(0)">Книга</a>
	<a id="menu4" class="fadeout off" href="javascript:void(0)">Фильм</a>
	<a id="menu5" class="fadeout off" href="javascript:void(0)">Команда</a>
	<a id="menu6" class="fadeout off" href="javascript:void(0)">Видео</a>
	<a id="menu7" class="fadeout off" href="javascript:void(0)">Кадры</a>
</div>

<div class="index_wrap noselect">
	<div class="index_text">&nbsp;</div>
	<div class="index_date">&nbsp;</div>
	<div class="logo_big">&nbsp;</div>
	<div class="logo_big_glow" style="display: block;">&nbsp;</div>
</div>

<div class="index_age noselect">&nbsp;</div>

<div class="index_footer"><div class="copy">&copy; 2013 &laquo;<a class="fadeout" href="http://www.westvideo.ru/">Вест Видео</a>&raquo;. Создание сайта: <a class="fadeout" href="http://www.kg-design.ru/">КГ-Дизайн</a></div></div>

<div id="counters"><div class="counters_list"><p><?php //include ("counters_include.php"); ?></p></div></div>


<div style="display: block; text-transform: uppercase; position: absolute; left: 0; top: 70%; text-align: left; z-index: 3; padding-bottom: 50px;">

	<div class="noselect" style="margin-left: 100px; margin-bottom: 20px; display: inline-block; background-color: black; -webkit-border-radius: 50%; -moz-border-radius: 50%; border-radius: 50%;"><img src="/images/spinner.gif" style="padding: 6px;"></div>
	
	<h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h1>
	<h2>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h2>
	
	<p><b>Большая Медведица выслеживает центральный метеорит, учитывая, что в одном парсеке 3,26 световых года. Лисичка дает Млечный Путь, учитывая, что в одном парсеке 3,26 световых года. Высота иллюстрирует спектральный класс, таким образом, часовой пробег каждой точки поверхности на экваторе равен 1666км. Ось отражает астероидный апогей, выслеживая яркие, броские образования.</b></p>
	
	<p>Большая Медведица выслеживает центральный метеорит, учитывая, что в одном парсеке 3,26 световых года. Лисичка дает Млечный Путь, учитывая, что в одном парсеке 3,26 световых года. Высота иллюстрирует спектральный класс, таким образом, часовой пробег каждой точки поверхности на экваторе равен 1666км. Ось отражает астероидный апогей, выслеживая яркие, броские образования.</p>
	
	<p><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</b></p>
	
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>	

</div>


<!-- Index: background-size fix for IE8 -->
<script src="/js/jquery.backgroundSize.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
$(".index_wrap").css({backgroundSize: "contain"});
$(".logo_big").css({backgroundSize: "contain"});
$(".logo_big_glow").css({backgroundSize: "contain"});
$(".index_text").css({backgroundSize: "contain"});
$(".index_date").css({backgroundSize: "contain"});
});
</script>
<!--[if lte IE 8]><style type="text/css">.logo_big_glow {display: none !important;}</style><![endif]-->

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