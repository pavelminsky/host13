<?php include ("header_include.php"); ?>

<script type="text/javascript" src="/js/jquery.tabify.js"></script>
<script type="text/javascript">
// <![CDATA[
$(document).ready(function () {
$('#team_tabs').tabify();
});
// ]]>
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

<script type="text/javascript">
$(document).ready(function(){
$('.tablink').click(function(){
	melaniestryder.pause();
	wandererwanda.pause();
	jaredhowe.pause();
	seeker.pause();
	ianoshea.pause();
	choosetofightOne.pause();
	choosetofightTwo.pause();
	choosetofightThree.pause();
});
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


<style type="text/css">
/* Team */
body#team .logo_small {position: absolute; top: 40px; right: 40px; z-index: 2;}

.teamContent_lc {position: absolute; right: 280px; width: 47%; min-width: 500px; padding: 245px 10px 100px 10px; text-align: left; background: url('/images/team_bg.png') left top repeat-y;}
.teamContent_lc p, .teamContent_rc p {padding: 5px 0 8px 0; color: #c9d9dd;}
.teamContent_lc #team_tabs {}
.teamContent_lc .content_title {font-size: 30px; font-weight: 400; padding-bottom: 8px; color: #a0d1dd;}
.teamContent_lc .teamWork {padding-left: 10px; padding-bottom: 20px; line-height: 150%; color: #b4aa8a;}
.teamContent_lc .content_photo {display: block; position: absolute; top: 75px; left: 60px; width: 140px; height: 140px; z-index: 3;}


.teamContent_rc {position: absolute; right: 40px; top: 240px; width: 200px; padding: 0 0 20px 20px; font-size: 14px; text-align: left; border: 1px solid #7396a3;}
.teamContent_rc .team_role {display: block; padding: 15px 5px 0 0; font-size: 12px; color: #8ba3b5;}
.teamContent_rc a {text-decoration: none;}
.teamContent_rc li.active a {color: #f79a4a !important; cursor: default; text-decoration: none !important;}

.feature_wrap {width: 500px; height: 300px; padding-top: 10px; overflow: hidden; text-align: center;}
</style>

<style type="text/css">


</style>


<div class="logo_small noselect">&nbsp;</div>


<div class="teamContent_rc">
	<div id="team_tabs">
		<ul>
		<span class="team_role">В ролях</span>
		<li class="active"><a class="tablink" href="#team_1">Сирша Ронан</a></li>
		<li><a class="tablink" href="#team_2">Макс Айронс</a></li>
		<li><a class="tablink" href="#team_3">Диана Крюгер</a></li>
		<li><a class="tablink" href="#team_4">Джейк Абель</a></li>
		<li><a class="tablink" href="#team_5">Чандлер Кентербери</a></li>
		<li><a class="tablink" href="#team_6">Уильям Хёрт</a></li>
		<li><a class="tablink" href="#team_7">Фрэнсис Фишер</a></li>
		<span class="team_role">Режиссёр и сценарист</span>
		<li><a class="tablink" href="#team_8">Эндрю Никкол</a></li>
		<span class="team_role">Автор первоисточника</span>
		<li><a class="tablink" href="#team_9">Стефани Майер</a></li>
		</ul>
	</div>
</div>

<div class="teamContent_lc">
		<div id="team_1">
			<div class="content_photo"><img src="/images/teamphoto_01.jpg" alt=""></div>
			<div class="content_title">Сирша Ронан</div>
			<p><b>...в роли Мелани – героини фильма, которой приходится сосуществовать с инопланетным разумом по имени Ванда, подселившимся в её тело.</b></p>
			<p>Несмотря на свой юный возраст (ей нет и девятнадцати), рождённая в семье ирландских актёров Сирша Ронан успешно работает в кино уже больше десяти лет. Первая же крупная роль в фильме «Искупление» Джо Райта принесла тринадцатилетней девушке номинацию на «Оскар», и с тех пор она успела сняться в таких крупных фильмах, как «Город Эмбер: Побег», «Ханна. Совершенное оружие» и «Милые кости».</p>
			<p>Сейчас она снимается с Биллом Мюрреем в фильме Веса Андерсона «Отель Будапешт», а вскоре после «Гостьи» на экраны выйдет драма о вампирах Нила Джордана «Византия» с Сиршей в одной из главных ролей.</p>
			<div class="feature_wrap">
				<div style="width: 490px; height: 280px; border: 1px solid #7396a3;"><video id="melaniestryder" class="video-js vjs-default-skin" controls preload="auto" width="490" height="280" poster="/video/melaniestryder.jpg" data-setup="{}"><source src="http://www.hostmovie.ru/video/melaniestryder.mp4" type='video/mp4'></div>
			</div>
			<div class="feature_wrap">
				<div style="width: 490px; height: 280px; border: 1px solid #7396a3;"><video id="wandererwanda" class="video-js vjs-default-skin" controls preload="auto" width="490" height="280" poster="/video/wandererwanda.jpg" data-setup="{}"><source src="http://www.hostmovie.ru/video/wandererwanda.mp4" type='video/mp4'></div>
			</div>
		</div>
		<div id="team_2">
			<div class="content_photo"><img src="/images/teamphoto_02.jpg" alt=""></div>
			<div class="content_title">Макс Айронс</div>
			<p><b>...в роли Джареда Хоу, возлюбленного Мелани, которому предстоит тяжёлое испытание: попытаться понять, действительно ли его любимая пережила внедрение инопланетного паразита в её тело, или же Странница пытается обмануть его, используя добытые воспоминания.</b></p>
			<p>Сын известного актёра Джереми Айронса («Лолита»), в 2008 году Максимильян Айронс закончил Гилдхоллскую школу музыки и театра, а уже в 2011-м исполнил свою первую главную роль в фильме «Красная шапочка». Будучи и моделью, и актёром, Макс идеально подходил для подобных романтических фильмов, и потому вскоре после «Красной шапочки» его позвали играть главного героя в «Гостье».</p>
			<p>Помимо кино Макс Айронс играет и в театре, причём его актёрские таланты снискали успех у критиков — молодой человек был номинирован на несколько престижных наград. А недавно он закончил съёмки в 10-серийном историческом телесериале «Белая королева», где исполнил роль короля Эдуарда IV.</p>
			<div class="feature_wrap">
				<div style="width: 490px; height: 280px; border: 1px solid #7396a3;"><video id="jaredhowe" class="video-js vjs-default-skin" controls preload="auto" width="490" height="280" poster="/video/jaredhowe.jpg" data-setup="{}"><source src="http://www.hostmovie.ru/video/jaredhowe.mp4" type='video/mp4'></div>
			</div>
		</div>
		<div id="team_3">
			<div class="content_photo"><img src="/images/teamphoto_03.jpg" alt=""></div>
			<div class="content_title">Диана Крюгер</div>
			<p><b>...в роли главной злодейки фильма, Искательницы, – Души, приставленной наблюдать за акклиматизацией подселённой к Мелани Странницы.</b></p>
			<p>В детстве Диана активно занималась балетом, но травма колена закрыла для неё танцевальное будущее. В начале девяностых она стала работать моделью, но через несколько лет по совету Люка Бессона бросила это недолговечное занятие, чтобы стать актрисой.</p>
			<p>Её прорыв в большом кино состоялся в 2004 году, когда она снялась в культовых картинах «Одержимость» Пола Макгигана и «Троя» Вольфганга Петерсена, а также популярном приключенческом блокбастере «Сокровище нации». С тех пор она сыграла в нескольких десятках фильмов, в числе которых «Сокровище нации: Книга тайн» и «Бесславные ублюдки».</p>
			<p>Занятный факт: так как Диана в совершенстве владеет немецким, французским и английским языками, то сама дублирует на них свои роли.</p>
			<div class="feature_wrap">
				<div style="width: 490px; height: 280px; border: 1px solid #7396a3;"><video id="seeker" class="video-js vjs-default-skin" controls preload="auto" width="490" height="280" poster="/video/seeker.jpg" data-setup="{}"><source src="http://www.hostmovie.ru/video/seeker.mp4" type='video/mp4'></div>
			</div>
		</div>
		<div id="team_4">
			<div class="content_photo"><img src="/images/teamphoto_04.jpg" alt=""></div>
			<div class="content_title">Джейк Абель</div>
			<p><b>...в роли Иена – человека, в которого влюбляется подселённая в тело Мелани Душа.</b></p>
			<p>Карьеру актёра Джейк начал на телевидении, где снимался в таких сериалах, как «Лёд в сердце», «Предел», «Детектив Раш», «Все тип-топ, или жизнь Зака и Коди», «C.S.I.: Место преступления Майами», «Скорая помощь» и «Сверхъестественное». В 2009 году он сыграл небольшую роль в фильме «Милое кости», где также снималась Сирша Ронан, исполнительница роли Мелани.</p>
			<p>В 2010 году Джейк исполнил одну из главных ролей в подростковом блокбастере «Перси Джексон и похититель молний» (роль, к которой он вернётся в этом году в сиквеле «Перси Джексон: Море чудовищ»), а в 2011-м ему досталась одна из ролей в молодёжном экшене «Я — четвёртый».</p>
			<div class="feature_wrap">
				<div style="width: 490px; height: 280px; border: 1px solid #7396a3;"><video id="ianoshea" class="video-js vjs-default-skin" controls preload="auto" width="490" height="280" poster="/video/ianoshea.jpg" data-setup="{}"><source src="http://www.hostmovie.ru/video/ianoshea.mp4" type='video/mp4'></div>
			</div>
		</div>
		<div id="team_5">
			<div class="content_photo"><img src="/images/teamphoto_05.jpg" alt=""></div>
			<div class="content_title">Чандлер Кентербери</div>
			<p><b>...в роли Джейми Страйдера, младшего брата Мелани.</b></p>
			<p>Чандлер Кентербери – один из самых ярких и интересных несовершеннолетних актёров последнего времени. Богатое воображение и поразительная эмоциональность позволили ему стать одним из самых разноплановых артистов Голливуда. Помимо актёрской игры Чандлер увлекается занимается фехтованием, баскетболом и бейсболом.</p>
			<p>Самыми известными его ролями до съёмок в «Гостье» были роли «старого» Бенджамина Баттона в фильме «Загадочная история Бенджамина Баттона» с Бредом Питтом и одного из главных героев в фильме-катастрофе «Знамение» с Николасом Кейджем. А после «Гостьи» в прокат попадут такие фильмы с Чандлером в главной роли, как «Остров козлов», «Пластиковый Иисус» и «Когда поют ангелы».</p>
			<div class="feature_wrap">
				<div style="width: 490px; height: 280px; border: 1px solid #7396a3;"><video id="choosetofightOne" class="video-js vjs-default-skin" controls preload="auto" width="490" height="280" poster="/video/choosetofight.jpg" data-setup="{}"><source src="http://www.hostmovie.ru/video/choosetofight.mp4" type='video/mp4'></div>
			</div>
		</div>
		<div id="team_6">
			<div class="content_photo"><img src="/images/teamphoto_06.jpg" alt=""></div>
			<div class="content_title">Уильям Хёрт</div>
			<p><b>...в роли Джеба Страйдера, дяди Мелани и Джейми и лидера повстанческого движения.</b></p>
			<p>За свою продолжительную кинокарьеру, начавшуюся ещё в восьмидесятых, Уильям Хёрт успел получить множество наград, в том числе «Оскара» за лучшую мужскую роль в фильме «Поцелуй женщины-паука» и несколько номинаций за другие фильмы.</p>
			<p>Он успел перепробовать самые разные роли: чуть не стал секс-символом после фильма «Жара тела», изображал гея в «Поцелуе женщины-паука», стал создателем разумных роботов в фильме «Искусственный разум» и готовым на любые жертвы ради усиления американской армии генералом Россом в «Невероятном Халке». А помимо кино Хёрт активно играет и на телевидении: так, в 2011 году он исполнил главную роль в очередной экранизации классики «Моби Дик».</p>
			<div class="feature_wrap">
				<div style="width: 490px; height: 280px; border: 1px solid #7396a3;"><video id="choosetofightTwo" class="video-js vjs-default-skin" controls preload="auto" width="490" height="280" poster="/video/choosetofight.jpg" data-setup="{}"><source src="http://www.hostmovie.ru/video/choosetofight.mp4" type='video/mp4'></div>
			</div>
		</div>
		<div id="team_7">
			<div class="content_photo"><img src="/images/teamphoto_07.jpg" alt=""></div>
			<div class="content_title">Фрэнсис Фишер</div>
			<p><b>...в роли Магнолии Страйдер, тёти Мелани и Джейми, всей душой ненавидящей Странницу.</b></p>
			<p>Фрэнсис Фишер начала карьеру актрисы в 1976 году, пять лет играв Дебору Саксон в сериале «Край ночи». В дальнейшем её актёрская карьера была преимущественно сконцентрирована на театре, где она исполняла главные роли в тридцати с лишним постановках.</p>
			<p>Но даже при этом Фрэнсис успевала то и дело светиться как на телевидении (включая роль в самом продолжительном американском сериале – «Направляющий свет»), так и в кино: она снималась в вестерне «Непрощённый» с Клинтом Иствудом (после которого у них с Клинтом родилась дочь), «Стриптизе» с Деми Мур и одном из известнейших фильмов современности – «Титанике» Джеймса Камерона. А вскоре после «Гостьи» на экраны выйдет фильм «Ты не ты», где Фрэнсис исполняет роль матери героини Хилари Суонк.</p>
			<div class="feature_wrap">
				<div style="width: 490px; height: 280px; border: 1px solid #7396a3;"><video id="choosetofightThree" class="video-js vjs-default-skin" controls preload="auto" width="490" height="280" poster="/video/choosetofight.jpg" data-setup="{}"><source src="http://www.hostmovie.ru/video/choosetofight.mp4" type='video/mp4'></div>
			</div>
		</div>
		<div id="team_8">
			<div class="content_photo"><img src="/images/teamphoto_08.jpg" alt=""></div>
			<div class="content_title">Эндрю Никкол</div>
			<p>Эндрю Никкол – известный сценарист и режиссёр, из-под пера которого неизменно выходят умные, интересные, разнообразные, необычные фантастические картины. Первыми режиссёрскими опытами для Эндрю были съёмки рекламных роликов в Лондоне, но в итоге он захотел «снимать фильмы длиннее шестидесяти секунд» и перебрался в Лос-Анджелес. И уже своим дебютом, антиутопией «Гаттака» с Джадом Лоу, Итанам Хоуком и Умой Турман, Эндрю вывел себя в ряды самых многообещающих новых режиссёров конца XX и начала XXI века. Ну а последовавшие за ней «Шоу Трумана» с Джимом Керри (номинировавшийся на «Оскар» за лучший сценарий), «Симона» с Аль Пачино, «Оружейный барон» с Николасом Кейджем и «Время» с Джастином Тимберлейком лишь утвердили за ним это звание.</p>
			<p>«Гостья» – первый случай в карьере Никкола, когда он не пишет сценарий с нуля, а адаптирует уже имеющееся произведение.</p>
		</div>
		<div id="team_9">
			<div class="content_photo"><img src="/images/teamphoto_09.jpg" alt=""></div>
			<div class="content_title">Стефани Майер</div>
			<p>Одна из самых успешных женщин-писательниц, Стефани Майер мгновенно прославилась благодаря своему фантастическому любовному роману «Сумерки», значительно увеличила свою популярность с выходом трёх сиквелов к этой книге и превратилась в самую настоящую звезду, когда невероятного успеха добились экранизации её романов, получившие общий заголовок «Сумерки. Сага». Этот её цикл породил самый настоящий бум и в литературе, и в кинематографе, открыв всему миру глаза на огромную женскую аудиторию, жаждавшую ориентированных на них блокбастеров.</p>
			<p>Стефани не планирует останавливаться на достигнутом. Не прошло и года после окончания «сумеречного» цикла, как она выпустила книгу «Гостья» – роман заметно более мрачный и направленный на аудиторию постарше. А в дальнейших планах Майер числятся как сиквелы «Гостьи», так и романы о привидениях, русалках и путешествиях во времени.</p>
		</div>
</div>

<script type="text/javascript">var melaniestryder=_V_("melaniestryder");</script>
<script type="text/javascript">var wandererwanda=_V_("wandererwanda");</script>
<script type="text/javascript">var jaredhowe=_V_("jaredhowe");</script>
<script type="text/javascript">var seeker=_V_("seeker");</script>
<script type="text/javascript">var ianoshea=_V_("ianoshea");</script>
<script type="text/javascript">var choosetofightOne=_V_("choosetofightOne");</script>
<script type="text/javascript">var choosetofightTwo=_V_("choosetofightTwo");</script>
<script type="text/javascript">var choosetofightThree=_V_("choosetofightThree");</script>




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