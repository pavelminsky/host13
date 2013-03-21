<?php include ("header_include.php"); ?>

<link href="/css/video-js.css" rel="stylesheet">
<script type="text/javascript" src="/js/video.js"></script>
<style type="text/css">
.video-js {width: 100% !important; height: 100% !important;}
.vjs-default-skin .vjs-play-progress {background: #83a5ba; height: 5px !important;}
.vjs-default-skin .vjs-load-progress {background: #456579; height: 5px !important;}
.vjs-default-skin .vjs-seek-handle {height: 5px !important;}
.vjs-load_progress, .vjs-play-progress, .vjs-progress-holder {border-radius: 0 !important; -moz-border-radius: 0 !important; -webkit-border-radius: 0 !important;}
.vjs-default-skin .vjs-seek-handle {display: none;}
.vjs-volume-control, .vjs-fullscreen-control, .vjs-remaining-time-display, .vjs-current-time-display, .vjs-default-skin .vjs-time-controls {display: none;}
.vjs-play-control {position: relative !important; bottom: 23px !important; left: 0px !important;}
.vjs-mute-control {position: relative !important; bottom: 23px !important; right: 8px !important;}
.vjs-controls {background: transparent !important; border: none !important;}
.vjs-progress-control {height: 5px !important; border: none !important;}
.vjs-default-skin .vjs-progress-holder .vjs-load-progress {border-radius: 0 !important; -moz-border-radius: 0 !important; -webkit-border-radius: 0 !important;}
.vjs-default-skin .vjs-progress-holder {height: 5px !important;}
.vjs-default-skin .vjs-big-play-button {display: block; z-index: 2; position: absolute; top: 50%; left: 50%; width: 8.0em; height: 8.0em; margin: -42px 0 0 -42px; text-align: center; vertical-align: center; cursor: pointer !important; border: 1px solid #dbeaf2; opacity: 0.95; background: #000000; -webkit-box-shadow: none !important; -moz-box-shadow: none !important; box-shadow: none !important;}
.vjs-default-skin div.vjs-big-play-button:hover {border: 1px solid #ffa227; -webkit-box-shadow: none !important; -moz-box-shadow: none !important; box-shadow: none !important;}
</style>

</head><body id="video">

<noscript><style>.dim {display: none;} #counters:hover {bottom: 0;}</style><div style="position: absolute; bottom: 80px; left: 50%; width: 360px; z-index: 9999; margin-left: -180px; font-size: 14px; color: #849091; line-height: 20px; text-align: center; border: 1px solid #849091; background-color: #000000;">В вашем браузере отключен JavaScript</div></noscript>
<div class="dim" style="display: none;">&nbsp;</div>


<div class="menu noselect">
	<a id="menu1" class="fadeout" href="/">Главная</a>
	<a id="menu2" class="fadeout off" href="javascript:void(0)">Новости</a>
	<a id="menu3" class="fadeout" href="/book/">Книга</a>
	<a id="menu4" class="fadeout" href="/about/">Фильм</a>
	<a id="menu5" class="fadeout" href="/team/">Команда</a>
	<a id="menu6" class="fadeout active" href="/video/">Видео</a>
	<a id="menu7" class="fadeout off" href="javascript:void(0)">Кадры</a>
</div>

<div class="age_small noselect">&nbsp;</div>

<div class="footer noselect"><div class="copy">&copy; 2013 &laquo;<a class="fadeout" href="http://www.westvideo.ru/">Вест Видео</a>&raquo;. Создание сайта: <a class="fadeout" href="http://www.kg-design.ru/">КГ-Дизайн</a></div></div>

<div id="counters"><div class="counters_list"><p><?php //include ("counters_include.php"); ?></p></div></div>

<div class="trailer_wrap">
	<div id="host_russiantrailer_550" style="width: 100%; height: 88%; margin: 0 auto;"><video class="video-js vjs-default-skin" controls autoplay preload="auto" width="800" height="335" poster="/images/black.png" data-setup="{}"><source src="http://www.hostmovie.ru/video/host_russiantrailer_550.mp4" type='video/mp4'><source src="http://www.hostmovie.ru/video/host_russiantrailer_550.webm" type='video/webm'></video></div>
</div>


</body></html>