<?php include ("header_include.php"); ?>

<!-- Glowing logo -->
<script type="text/javascript">
$(document).ready(function(){
var $glowingLogo = $(".logo_big_glow"),cycle;
(cycle = function() {
$glowingLogo.animate({opacity:0},4000).delay(500).animate({opacity:1},4000, cycle);
})();
});
</script>

</head><body id="index">

<noscript><style>.dim {display: none;} #counters:hover {bottom: 0;}</style><div style="position: fixed; bottom: 80px; left: 50%; width: 360px; z-index: 9999; margin-left: -180px; font-size: 14px; color: #849091; line-height: 20px; text-align: center; border: 1px solid #849091; background-color: #000000;">В вашем браузере отключен JavaScript</div></noscript>
<div class="dim">&nbsp;</div>


<div class="menu noselect">
	<a id="menu1" class="fadeout active" href="/">Главная</a>
	<a id="menu2" class="fadeout off" href="javascript:void(0)">Новости</a>
	<a id="menu3" class="fadeout off" href="javascript:void(0)">Книга</a>
	<a id="menu4" class="fadeout" href="/about/">Фильм</a>
	<a id="menu5" class="fadeout" href="/team/">Команда</a>
	<a id="menu6" class="fadeout" href="/video/">Видео</a>
	<a id="menu7" class="fadeout" href="/gallery/">Кадры</a>
</div>

<div class="index_wrap noselect">
	<div class="index_text">&nbsp;</div>
	<div class="index_date">&nbsp;</div>
	<div class="logo_big">&nbsp;</div>
	<div class="logo_big_glow" style="display: block;">&nbsp;</div>
</div>

<div class="age noselect">&nbsp;</div>

<div class="footer noselect"><div class="copy">&copy; 2013 &laquo;<a class="fadeout" href="http://www.westvideo.ru/">Вест Видео</a>&raquo; &nbsp;&nbsp; Создание сайта: <a class="fadeout" href="http://www.kg-design.ru/">КГ-Дизайн</a></div></div>

<div id="counters"><div class="counters_list"><p><?php include ("counters_include.php"); ?></p></div></div>


<!-- Index: background-size fix for IE8 -->
<!--[if lt IE 9]><script src="/js/jquery.backgroundSize.js" type="text/javascript"></script><![endif]-->
<script type="text/javascript">
$(function() {
$(".index_wrap").css({backgroundSize: "contain"});
$(".logo_big").css({backgroundSize: "contain"});
$(".logo_big_glow").css({backgroundSize: "contain"});
$(".index_text").css({backgroundSize: "contain"});
$(".index_date").css({backgroundSize: "contain"});
});
</script>
<!--[if lt IE 9]><style type="text/css">.logo_big_glow {display: none !important;}</style><![endif]-->

</body></html>