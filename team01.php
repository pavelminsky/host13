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

</head><body id="team01">

<noscript><style>.dim {display: none;} #counters:hover {bottom: 0;}</style><div style="position: fixed; bottom: 80px; left: 50%; width: 360px; z-index: 9999; margin-left: -180px; font-size: 14px; color: #849091; line-height: 20px; text-align: center; border: 1px solid #849091; background-color: #000000;">В вашем браузере отключен JavaScript</div></noscript>
<div class="dim">&nbsp;</div>



<div class="menu noselect">
	<a id="menu1" class="fadeout" href="/">Главная</a>
	<a id="menu2" class="fadeout off" href="javascript:void(0)">Новости</a>
	<a id="menu3" class="fadeout off" href="javascript:void(0)">Книга</a>
	<a id="menu4" class="fadeout" href="/about/">Фильм</a>
	<a id="menu5" class="fadeout active" href="/team/" style="cursor: pointer;">Команда</a>
	<a id="menu6" class="fadeout" href="/video/">Видео</a>
	<a id="menu7" class="fadeout" href="/gallery/">Кадры</a>
</div>


<div class="logo_small noselect">&nbsp;</div>

<div class="team_showlist">Команда</div>
<div class="team_person">Сирша Ронан</div>

<div class="team_list" style="display: none;">
	<a href="/team01/" class="fadeout active">Сирша Ронан</a>
	<a href="/team02/" class="fadeout">Макс Айронс</a>
	<a href="/team03/" class="fadeout">Диана Крюгер</a>
	<a href="/team04/" class="fadeout">Джейк Абель</a>
	<a href="/team05/" class="fadeout">Чандлер Кентербери</a>
	<a href="/team06/" class="fadeout">Уильям Хёрт</a>
	<a href="/team07/" class="fadeout">Фрэнсис Фишер</a>
	<a href="/teamcrew/" class="fadeout">Эндрю Никкол</a>
	<a href="/teamcrew/" class="fadeout">Стефани Майер</a>
</div>



<div class="team01_wrap clearfix">
	<div class="team01_lc">
		<div class="team01_content">
		<div class="team01_melanie noselect">&nbsp;</div>
		<h4>...В роли Мелани Страйдер</h4>
		<p><b>Мелани</b> – сильная, храбрая, решительная девушка. Когда человечество атакует незримый враг, Мелани рискует всем, чтобы защитить своих близких: Джареда, её брата Джейми и дядю Джеба. Она никогда не сдаётся без боя, и её любовь к Джареду позволила Мелани сохранить самосознание и волю даже тогда, когда в её тело поселилась Душа – Анни.</p>
		</div>
	</div>
	<div class="team01_rc">
		<div class="team01_content">
		<div class="team01_wanda noselect">&nbsp;</div>
		<h4>...В роли Анни (Странницы)</h4>
		<p><b>Анни</b> – Душа, не похожая на остальные. Её опыт и мудрость помогают Страннице найти общий язык с Мелани и понять, что значит быть человеком. А сблизившись с членами повстанческого движения, Анни неожиданно открывает для себя сильнейшую из человеческих эмоций – любовь.</p>
		</div>
	</div>
	<div class="team01_video_wrap clearfix">
		<div class="team01_lc"><div class="team01_video"><div style="width: 360px; height: 206px; border: 1px solid #ffab67;"><video id="melaniestryder" class="video-js vjs-default-skin" controls preload="auto" width="360" height="206" poster="/video/melaniestryder.jpg" data-setup="{}"><source src="http://www.hostmovie.ru/video/melaniestryder.mp4" type='video/mp4'></div></div></div>
		<div class="team01_rc"><div class="team01_video"><div style="width: 360px; height: 206px; border: 1px solid #bee8ef;"><video id="wandererwanda" class="video-js vjs-default-skin" controls preload="auto" width="360" height="206" poster="/video/wandererwanda.jpg" data-setup="{}"><source src="http://www.hostmovie.ru/video/wandererwanda.mp4" type='video/mp4'></div></div></div>
	</div>
	<div class="team01_mc">
		<p>Несмотря на свой юный возраст (ей нет и девятнадцати), рождённая в семье ирландских актёров <b>Сирша Ронан</b> успешно работает в кино уже больше десяти лет. Первая же крупная роль в фильме <u>«Искупление»</u> Джо Райта принесла тринадцатилетней девушке номинацию на «Оскар», и с тех пор она успела сняться в таких крупных фильмах, как <u>«Город Эмбер: Побег»</u>, <u>«Ханна. Совершенное оружие»</u> и <u>«Милые кости»</u>.</p>
		<p>Сейчас она снимается с Биллом Мюрреем в фильме Веса Андерсона <u>«Отель Будапешт»</u>, а вскоре после «Гостьи» на экраны выйдет драма о вампирах Нила Джордана <u>«Византия»</u> с Сиршей в одной из главных ролей.</p>
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