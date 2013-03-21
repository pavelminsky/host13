<?php include ("header_include.php"); ?>

</head><body id="gallery">

<noscript><style>.dim {display: none;} #counters:hover {bottom: 0;}</style><div style="position: fixed; bottom: 80px; left: 50%; width: 360px; z-index: 9999; margin-left: -180px; font-size: 14px; color: #849091; line-height: 20px; text-align: center; border: 1px solid #849091; background-color: #000000;">В вашем браузере отключен JavaScript</div></noscript>
<div class="dim">&nbsp;</div>

<div class="menu noselect">
	<a id="menu1" class="fadeout" href="/">Главная</a>
	<a id="menu2" class="fadeout off" href="javascript:void(0)">Новости</a>
	<a id="menu3" class="fadeout off" href="javascript:void(0)">Книга</a>
	<a id="menu4" class="fadeout" href="/about/">Фильм</a>
	<a id="menu5" class="fadeout off" href="javascript:void(0)">Команда</a>
	<a id="menu6" class="fadeout" href="/video/">Видео</a>
	<a id="menu7" class="fadeout active" href="/gallery/">Кадры</a>
</div>


<div class="gallery">
	<div class="logo_small noselect">&nbsp;</div>
	<div class="stills_wrap"><p><a class="stills" data-fancybox-group="gallery_stills" href="/media/01.jpg"><img src="/media/01s.jpg" alt=""></a><a class="stills" data-fancybox-group="gallery_stills" href="/media/02.jpg"><img src="/media/02s.jpg" alt=""></a><a class="stills" data-fancybox-group="gallery_stills" href="/media/03.jpg"><img src="/media/03s.jpg" alt=""></a><a class="stills" data-fancybox-group="gallery_stills" href="/media/04.jpg"><img src="/media/04s.jpg" alt=""></a><a class="stills" data-fancybox-group="gallery_stills" href="/media/05.jpg"><img src="/media/05s.jpg" alt=""></a><a class="stills" data-fancybox-group="gallery_stills" href="/media/06.jpg"><img src="/media/06s.jpg" alt=""></a><a class="stills" data-fancybox-group="gallery_stills" href="/media/07.jpg"><img src="/media/07s.jpg" alt=""></a><a class="stills" data-fancybox-group="gallery_stills" href="/media/08.jpg"><img src="/media/08s.jpg" alt=""></a><a class="stills" data-fancybox-group="gallery_stills" href="/media/09.jpg"><img src="/media/09s.jpg" alt=""></a><a class="stills" data-fancybox-group="gallery_stills" href="/media/10.jpg"><img src="/media/10s.jpg" alt=""></a><a class="stills" data-fancybox-group="gallery_stills" href="/media/11.jpg"><img src="/media/11s.jpg" alt=""></a><a class="stills" data-fancybox-group="gallery_stills" href="/media/12.jpg"><img src="/media/12s.jpg" alt=""></a><a class="stills" data-fancybox-group="gallery_stills" href="/media/13.jpg"><img src="/media/13s.jpg" alt=""></a><a class="stills" data-fancybox-group="gallery_stills" href="/media/14.jpg"><img src="/media/14s.jpg" alt=""></a><a class="stills" data-fancybox-group="gallery_stills" href="/media/15.jpg"><img src="/media/15s.jpg" alt=""></a><a class="stills" data-fancybox-group="gallery_stills" href="/media/16.jpg"><img src="/media/16s.jpg" alt=""></a><a class="stills" data-fancybox-group="gallery_stills" href="/media/17.jpg"><img src="/media/17s.jpg" alt=""></a><a class="stills" data-fancybox-group="gallery_stills" href="/media/18.jpg"><img src="/media/18s.jpg" alt=""></a><a class="stills" data-fancybox-group="gallery_stills" href="/media/19.jpg"><img src="/media/19s.jpg" alt=""></a><a class="stills" data-fancybox-group="gallery_stills" href="/media/20.jpg"><img src="/media/20s.jpg" alt=""></a><a class="stills" data-fancybox-group="gallery_stills" href="/media/21.jpg"><img src="/media/21s.jpg" alt=""></a><a class="stills" data-fancybox-group="gallery_stills" href="/media/22.jpg"><img src="/media/22s.jpg" alt=""></a><a class="stills" data-fancybox-group="gallery_stills" href="/media/23.jpg"><img src="/media/23s.jpg" alt=""></a><a class="stills" data-fancybox-group="gallery_stills" href="/media/24.jpg"><img src="/media/24s.jpg" alt=""></a><a class="stills" data-fancybox-group="gallery_stills" href="/media/25.jpg"><img src="/media/25s.jpg" alt=""></a><a class="stills" data-fancybox-group="gallery_stills" href="/media/26.jpg"><img src="/media/26s.jpg" alt=""></a><a class="stills" data-fancybox-group="gallery_stills" href="/media/27.jpg"><img src="/media/27s.jpg" alt=""></a><a class="stills" data-fancybox-group="gallery_stills" href="/media/28.jpg"><img src="/media/28s.jpg" alt=""></a></p></div>
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

<!-- Fancybox -->
<link rel="stylesheet" type="text/css" href="/css/fancybox.css?v=2.1.1" media="screen">
<script type="text/javascript" src="/js/jquery.fancybox.js?v=2.1.1"></script>
<script type="text/javascript" src="/js/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript" src="/js/jquery.fancybox-media.js?v=1.0.4"></script>
<script type="text/javascript">
$(document).ready(function() {
$('.stills').fancybox({
prevEffect : 'fade',
nextEffect : 'fade',
//closeBtn  : false,
//arrows    : false,
nextClick : false,
padding: 1,
'margin' : 50,
//helpers : {thumbs : {width  : 56, height : 26}}
});
});
</script>

</body></html>