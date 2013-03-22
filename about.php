<?php include ("header_include.php"); ?>

<!-- Slogan rotation -->
<script type="text/javascript">
$(document).ready(function(){
    var faderIndex = 0,
        faders = $('.slogan');
    function nextFade() {
        $(faders[faderIndex]).fadeOut(2000, function() {
            faderIndex++;
            if (faderIndex >= faders.length)
                faderIndex = 0;
            $(faders[faderIndex]).fadeIn(4000, nextFade);
        });
    }
    nextFade();
});
</script>

</head><body id="about">

<noscript><style>.dim {display: none;} #counters:hover {bottom: 0;} .slogan_noscript {display: inline-block !important;}</style><div style="position: fixed; bottom: 80px; left: 50%; width: 360px; z-index: 9999; margin-left: -180px; font-size: 14px; color: #849091; line-height: 20px; text-align: center; border: 1px solid #849091; background-color: #000000;">В вашем браузере отключен JavaScript</div></noscript>
<div class="dim">&nbsp;</div>

<div class="menu noselect">
	<a id="menu1" class="fadeout" href="/">Главная</a>
	<a id="menu2" class="fadeout off" href="javascript:void(0)">Новости</a>
	<a id="menu3" class="fadeout off" href="javascript:void(0)">Книга</a>
	<a id="menu4" class="fadeout active" href="/about/">Фильм</a>
	<a id="menu5" class="fadeout" href="/team/">Команда</a>
	<a id="menu6" class="fadeout" href="/video/">Видео</a>
	<a id="menu7" class="fadeout" href="/gallery/">Кадры</a>
</div>


<div class="about">
	<div class="logo_small noselect">&nbsp;</div>
	<div class="slogan_wrap">Битва&nbsp;за<br><span class="slogan" style="display: none;">свободу</span><span class="slogan slogan_noscript" style="display: none;">будущее</span><span class="slogan" style="display: none;">любовь</span>&nbsp;</div>
	<p class="uno"><b>«Гостья»</b> – экранизация одноимённой книги <b>Стефани Майер</b> – той самой, что своим циклом <b>«Сумерки»</b> в одиночку начала бум литературы и кинематографа, нацеленных на девушек. Но если культовая сага перевернула представление женского населения Земли о городском фэнтези, то своим новым романом (и его двумя потенциальными сиквелами) Стефани нацелилась на фантастику.</p>
	<p class="dos">На Земле будущего человечеству в его привычном виде практически не осталось места. Инопланетяне-паразиты, <i>Души</i>, наводнили планету, проникая в тела живущих на ней людей и заменяя собой оригинальные личности. Очень скоро люди становятся вымирающим видом и из последних сил отбиваются от наслаждающихся завоёванной планетой <i>Душ</i>.</p>
	<p class="tres">Главная героиня <b>«Гостьи»</b> — <u>Мелани</u> — одна из немногих выживших. Она встречает Джареда Хоу, они влюбляются друг в друга, и даже жестокий окружающий мир, кажется, не может помешать их счастью... Пока девушку не ловят и не поселяют в её тело <i>Душу</i> по имени Ванда, надеясь через воспоминания <u>Мелани</u> узнать местонахождение прибежища людей.</p>
	<p class="cuatro">Вот только на этот раз результат подселения оказывается неожиданным: <u>Мелани</u> не исчезает до конца, и теперь они с Вандой вынуждены сосуществовать в одном теле, деля мысли, воспоминания... и, конечно же, чувства. Чувства, которые убеждают Ванду предать свою расу и вместо этого помочь ненавидящим её людям.</p>
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