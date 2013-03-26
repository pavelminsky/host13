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

</head><body id="teamcrew">

<noscript><style>.dim {display: none;} #counters:hover {bottom: 0;}</style><div style="position: fixed; bottom: 80px; left: 50%; width: 360px; z-index: 9999; margin-left: -180px; font-size: 14px; color: #849091; line-height: 20px; text-align: center; border: 1px solid #849091; background-color: #000000;">В вашем браузере отключен JavaScript</div></noscript>
<div class="dim">&nbsp;</div>



<?php include ("team_menu_include.php"); ?>


<div class="logo_small noselect">&nbsp;</div>


<div class="team_showlist">Команда</div>
<div class="team_person">Эндрю Никкол<br>Стефани Майер</div>

<div class="team_list" style="display: none;">
	<a href="/team01/" class="fadeout">Сирша Ронан</a>
	<a href="/team02/" class="fadeout">Макс Айронс</a>
	<a href="/team03/" class="fadeout">Диана Крюгер</a>
	<a href="/team04/" class="fadeout">Джейк Абель</a>
	<a href="/team05/" class="fadeout">Чандлер Кентербери</a>
	<a href="/team06/" class="fadeout">Уильям Хёрт</a>
	<a href="/team07/" class="fadeout">Фрэнсис Фишер</a>
	<a href="/teamcrew/" class="fadeout active">Эндрю Никкол</a>
	<a href="/teamcrew/" class="fadeout active">Стефани Майер</a>
</div>


<div class="teamcrew_wrap clearfix">
	<div class="teamcrew_lc">
		<div class="teamcrew_content">
		<div class="teamcrew_niccol noselect">&nbsp;</div>
		<h4>Режиссёр и сценарист</h4>
		<p><b>Эндрю Никкол</b> – известный сценарист и режиссёр, из-под пера которого неизменно выходят умные, интересные, разнообразные, необычные фантастические картины.</p>
		<p>Первыми режиссёрскими опытами для Эндрю были съёмки рекламных роликов в Лондоне, но в итоге он захотел «снимать фильмы длиннее шестидесяти секунд» и перебрался в Лос-Анджелес. И уже своим дебютом, антиутопией <u>«Гаттака»</u> с Джадом Лоу, Итанам Хоуком и Умой Турман, Эндрю вывел себя в ряды самых многообещающих новых режиссёров конца XX и начала XXI века. Ну а последовавшие за ней <u>«Шоу Трумана»</u> с Джимом Керри (номинировавшийся на «Оскар» за лучший сценарий), <u>«Симона»</u> с Аль Пачино, <u>«Оружейный барон»</u> с Николасом Кейджем и <u>«Время»</u> с Джастином Тимберлейком лишь утвердили за ним это звание.</p>
		<p><u>«Гостья»</u> – первый случай в карьере Никкола, когда он не пишет сценарий с нуля, а адаптирует уже имеющееся произведение.</p>
		</div>
	</div>
	<div class="teamcrew_rc">
		<div class="teamcrew_content">
		<div class="teamcrew_meyer noselect">&nbsp;</div>
		<h4>Автор первоисточника</h4>
		<p>Одна из самых успешных женщин-писательниц, <b>Стефани Майер</b> мгновенно прославилась благодаря своему фантастическому любовному роману <u>«Сумерки»</u>, значительно увеличила свою популярность с выходом трёх сиквелов к этой книге и превратилась в самую настоящую звезду, когда невероятного успеха добились экранизации её романов, получившие общий заголовок <u>«Сумерки. Сага»</u>.</p>
		<p>Этот её цикл породил самый настоящий бум и в литературе, и в кинематографе, открыв всему миру глаза на огромную женскую аудиторию, жаждавшую ориентированных на них блокбастеров.</p>
		<p>Стефани не планирует останавливаться на достигнутом. Не прошло и года после окончания «сумеречного» цикла, как она выпустила книгу <u>«Гостья»</u> – роман заметно более мрачный и направленный на аудиторию постарше. А в дальнейших планах Майер числятся как сиквелы <u>«Гостьи»</u>, так и романы о привидениях, русалках и путешествиях во времени.</p>
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