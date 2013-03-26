<?php include ("header_include.php"); ?>

<!-- Team nav -->
<script type="text/javascript">
$(document).ready(function(){
$(".team_showlist").toggle(
  function () {$('.team_list').fadeIn(); $('.team_person').fadeOut();},
  function () {$('.team_list').fadeOut(); $('.team_person').fadeIn();}
  );
});
</script>

<link href="/css/video-js.css" rel="stylesheet">
<script type="text/javascript" src="/js/video.js"></script>
<style type="text/css">
/*.video-js {width: 100% !important; height: 100% !important;}*/
.vjs-default-skin .vjs-play-progress {background: #83a5ba; height: 5px !important;}
.vjs-default-skin .vjs-load-progress {background: #456579; height: 5px !important;}
.vjs-default-skin .vjs-seek-handle {height: 5px !important;}
.vjs-load_progress, .vjs-play-progress {border-radius: 0 !important; -moz-border-radius: 0 !important; -webkit-border-radius: 0 !important;}
.vjs-default-skin .vjs-seek-handle {display: none;}
.vjs-volume-control, .vjs-fullscreen-control, .vjs-remaining-time-display, .vjs-current-time-display, .vjs-default-skin .vjs-time-controls {display: none;}
.vjs-play-control {position: relative !important; bottom: 23px !important; left: 0px !important;}
.vjs-mute-control {position: relative !important; bottom: 23px !important; right: 8px !important;}
.vjs-controls {background: transparent !important; border: none !important;}
.vjs-progress-control {height: 5px !important; border: none !important; background: transparent !important;}
.vjs-default-skin .vjs-progress-holder .vjs-load-progress {border-radius: 0 !important; -moz-border-radius: 0 !important; -webkit-border-radius: 0 !important;}
.vjs-default-skin .vjs-progress-holder {height: 5px !important; border-radius: 0 !important; -moz-border-radius: 0 !important; -webkit-border-radius: 0 !important; background: transparent !important;}
.vjs-default-skin .vjs-big-play-button {z-index: 2; position: absolute; top: 50%; left: 50%; width: 60px; height: 60px; margin: -30px 0 0 -30px; text-align: center; vertical-align: center; cursor: pointer !important; border: 1px solid #dbeaf2; opacity: 0.95; background: #000000; -webkit-box-shadow: none !important; -moz-box-shadow: none !important; box-shadow: none !important;}
.vjs-default-skin div.vjs-big-play-button:hover {border: 1px solid #ffa227; -webkit-box-shadow: none !important; -moz-box-shadow: none !important; box-shadow: none !important;}
</style>

</head><body id="team05">

<noscript><style>.dim {display: none;} #counters:hover {bottom: 0;}</style><div style="position: fixed; bottom: 80px; left: 50%; width: 360px; z-index: 9999; margin-left: -180px; font-size: 14px; color: #849091; line-height: 20px; text-align: center; border: 1px solid #849091; background-color: #000000;">В вашем браузере отключен JavaScript</div></noscript>
<div class="dim">&nbsp;</div>



<?php include ("team_menu_include.php"); ?>


<div class="logo_small noselect">&nbsp;</div>

<div class="team_showlist">Команда</div>
<div class="team_person">Чандлер Кентербери</div>

<div class="team_list" style="display: none;">
	<a href="/team01/" class="fadeout">Сирша Ронан</a>
	<a href="/team02/" class="fadeout">Макс Айронс</a>
	<a href="/team03/" class="fadeout">Диана Крюгер</a>
	<a href="/team04/" class="fadeout">Джейк Абель</a>
	<a href="/team05/" class="fadeout active">Чандлер Кентербери</a>
	<a href="/team06/" class="fadeout">Уильям Хёрт</a>
	<a href="/team07/" class="fadeout">Фрэнсис Фишер</a>
	<a href="/teamcrew/" class="fadeout">Эндрю Никкол</a>
	<a href="/teamcrew/" class="fadeout">Стефани Майер</a>
</div>


<div class="team05_wrap clearfix">
	<div class="team05_lc">
		<div class="team05_content">
		<h4>...В роли Джейми Страйдера, младшего брата Мелани</h4>
		<p><b>Чандлер Кентербери</b> – один из самых ярких и интересных несовершеннолетних актёров последнего времени. Богатое воображение и поразительная эмоциональность позволили ему стать одним из самых разноплановых артистов Голливуда. Помимо актёрской игры, Чандлер увлекается занимается фехтованием, баскетболом и бейсболом.</p>
		<p>Самыми известными его ролями до съёмок в «Гостье» были роли «старого» Бенджамина Баттона в фильме <u>«Загадочная история Бенджамина Баттона»</u> с Бредом Питтом и одного из главных героев в фильме-катастрофе <u>«Знамение»</u> с Николасом Кейджем. А после «Гостьи» в прокат попадут такие фильмы с Чандлером в главной роли, как <u>«Остров козлов»</u>, <u>«Пластиковый Иисус»</u> и <u>«Когда поют ангелы»</u>.</p>
		</div>
	</div>
	<div class="team05_video_wrap clearfix">
		<div class="team05_video"><div style="width: 500px; height: 286px; border: 1px solid #cf6d21;"><video id="choosetofightOne" class="video-js vjs-default-skin" controls preload="auto" width="500" height="286" poster="/video/choosetofight.jpg" data-setup="{}"><source src="http://www.hostmovie.ru/video/choosetofight.mp4" type='video/mp4'></div></div>
	</div>
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