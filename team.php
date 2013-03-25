<?php include ("header_include.php"); ?>

<!-- Team bubbles glow -->
<script type="text/javascript">
$(document).ready(function(){
	$('.team_link_01').hover(function() {$('.team_hover_01').stop().animate({opacity:1},1000);}, function() {$('.team_hover_01').stop().animate({opacity:0},500);});
	$('.team_link_02').hover(function() {$('.team_glow_02').stop().animate({opacity:1},1000);}, function() {$('.team_glow_02').stop().animate({opacity:0},500);});
	$('.team_link_03').hover(function() {$('.team_glow_03').stop().animate({opacity:1},1000);}, function() {$('.team_glow_03').stop().animate({opacity:0},500);});
	$('.team_link_04').hover(function() {$('.team_glow_04').stop().animate({opacity:1},1000);}, function() {$('.team_glow_04').stop().animate({opacity:0},500);});
	$('.team_link_05').hover(function() {$('.team_glow_05').stop().animate({opacity:1},1000);}, function() {$('.team_glow_05').stop().animate({opacity:0},500);});
	$('.team_link_06').hover(function() {$('.team_glow_06').stop().animate({opacity:1},1000);}, function() {$('.team_glow_06').stop().animate({opacity:0},500);});
	$('.team_link_07').hover(function() {$('.team_glow_07').stop().animate({opacity:1},1000);}, function() {$('.team_glow_07').stop().animate({opacity:0},500);});
	$('.team_link_08').hover(function() {$('.team_glow_08').stop().animate({opacity:1},1000); $('.team_glow_09').stop().animate({opacity:1},1000);}, function() {$('.team_glow_08').stop().animate({opacity:0},500); $('.team_glow_09').stop().animate({opacity:0},500);});
	$('.team_link_09').hover(function() {$('.team_glow_08').stop().animate({opacity:1},1000); $('.team_glow_09').stop().animate({opacity:1},1000);}, function() {$('.team_glow_08').stop().animate({opacity:0},500); $('.team_glow_09').stop().animate({opacity:0},500);});
});
</script>

</head><body id="team">

<noscript><style>.dim {display: none;} #counters:hover {bottom: 0;}</style><div style="position: fixed; bottom: 80px; left: 50%; width: 360px; z-index: 9999; margin-left: -180px; font-size: 14px; color: #849091; line-height: 20px; text-align: center; border: 1px solid #849091; background-color: #000000;">В вашем браузере отключен JavaScript</div></noscript>
<div class="dim">&nbsp;</div>



<div class="menu noselect">
	<a id="menu1" class="fadeout" href="/">Главная</a>
	<a id="menu2" class="fadeout off" href="javascript:void(0)">Новости</a>
	<a id="menu3" class="fadeout off" href="javascript:void(0)">Книга</a>
	<a id="menu4" class="fadeout" href="/about/">Фильм</a>
	<a id="menu5" class="fadeout active" href="/team/">Команда</a>
	<a id="menu6" class="fadeout" href="/video/">Видео</a>
	<a id="menu7" class="fadeout" href="/gallery/">Кадры</a>
</div>


<div class="logo_small noselect">&nbsp;</div>
<div class="team_main">	
	<a class="team_link_01 fadeout" href="/team01/">&nbsp;</a>
	<div class="team_hover_01">&nbsp;</div>
	<a class="team_link_02 fadeout" href="/team02/">&nbsp;</a>
	<a class="team_link_03 fadeout" href="/team03/">&nbsp;</a>
	<a class="team_link_04 fadeout" href="/team04/">&nbsp;</a>
	<a class="team_link_05 fadeout" href="/team05/">&nbsp;</a>
	<a class="team_link_06 fadeout" href="/team06/">&nbsp;</a>
	<a class="team_link_07 fadeout" href="/team07/">&nbsp;</a>
	<a class="team_link_08 fadeout" href="/teamcrew/">&nbsp;</a>
	<a class="team_link_09 fadeout" href="/teamcrew/">&nbsp;</a>
</div>
<div class="team_glow">
	<div class="team_glow_02">&nbsp;</div>
	<div class="team_glow_03">&nbsp;</div>
	<div class="team_glow_04">&nbsp;</div>
	<div class="team_glow_05">&nbsp;</div>
	<div class="team_glow_06">&nbsp;</div>
	<div class="team_glow_07">&nbsp;</div>
	<div class="team_glow_08">&nbsp;</div>
	<div class="team_glow_09">&nbsp;</div>
</div>


<div class="age_small noselect">&nbsp;</div>

<div class="footer noselect"><div class="copy">&copy; 2013 &laquo;<a class="fadeout" href="http://www.westvideo.ru/">Вест Видео</a>&raquo; &nbsp;&nbsp; Создание сайта: <a class="fadeout" href="http://www.kg-design.ru/">КГ-Дизайн</a></div></div>

<div id="counters"><div class="counters_list"><p><?php include ("counters_include.php"); ?></p></div></div>


<!-- Index: background-size fix for IE8 -->
<!--[if lt IE 9]><script src="/js/jquery.backgroundSize.js" type="text/javascript"></script><![endif]-->
<script type="text/javascript">
$(function() {
$("body").css({backgroundSize: "cover"});
});
</script>

</body></html>