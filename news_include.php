<!--
1. Высота тамбнейлов для картинок должна равняться 120 пикс. Ширина значения не имеет.
2. Для картинок, которые должны открываться как одна галерея (например, фотоотчет с премьеры) должно быть указано одинаковое значение data-fancybox-group. Для удобства можно привязывать всё, включая data-fancybox-group и название файлов, к ID новости (как сейчас).
3. Текущие id новостей сейчас ни на что не влияют - можно изменить их в зависимости от технических нужд.
4. Если какую-то новость (или несколько новостей) необходимо вывести развернутой при загрузке страницы, к её телу newsbox добавляется style="display: block;"
5. Тамбнейл для ролика делается совмещением оверлея (исходник на FTP в корне: videos_news_template.psd) и картинки-кадра. Ширина тамбнейла не должна превышать 360 пикс.
6. Ролик вызывается следующим образом: на тамбнейле прописывается ссылка вида #id_контейнера. Ниже размещается div-контейнер с соответствующим id, у которого через style задаются размеры ролика и указывается display: none.
-->


<li id="newsid2">
<div class="newsdate">27 марта</div>
<h2 class="newshd">Новый клип-трейлер</h2>
<div class="newsbox">
<p><b>Imagine Dragons</b> сделали ремикс своего отличного трека <b>Radioactive</b> специально для &laquo;Гостьи&raquo;:</p>
<p><a class="videos_news" data-fancybox-group="newsid2" href="#newsid2_video"><img src="/news/newsid2.jpg" alt=""></a></p>
<div id="newsid2_video" style="width: 624px; height: 351px; display: none;"><iframe width="624" height="351" scrolling="no" frameborder="0" src="http://music.yahoo.com/video/imagine-dragons-host-radioactive-191208914.html?format=embed&player_autoplay=false"></iframe></div>
</div>
</li>


<li id="newsid1">
<div class="newsdate">20 марта</div>
<h2 class="newshd">Американская премьера &laquo;Гостьи&raquo; состоялась!</h2>
<div class="newsbox">
<p>Любуемся фотографиями с красной дорожки:</p>
<p>
<a class="gallery_news" data-fancybox-group="newsid1" href="/news/newsid1_02.jpg"><img src="/news/newsid1_02s.jpg" alt=""></a>
<a class="gallery_news" data-fancybox-group="newsid1" href="/news/newsid1_03.jpg"><img src="/news/newsid1_03s.jpg" alt=""></a>
<a class="gallery_news" data-fancybox-group="newsid1" href="/news/newsid1_04.jpg"><img src="/news/newsid1_04s.jpg" alt=""></a>
<a class="gallery_news" data-fancybox-group="newsid1" href="/news/newsid1_05.jpg"><img src="/news/newsid1_05s.jpg" alt=""></a>
<a class="gallery_news" data-fancybox-group="newsid1" href="/news/newsid1_06.jpg"><img src="/news/newsid1_06s.jpg" alt=""></a>
<a class="gallery_news" data-fancybox-group="newsid1" href="/news/newsid1_07.jpg"><img src="/news/newsid1_07s.jpg" alt=""></a>
<a class="gallery_news" data-fancybox-group="newsid1" href="/news/newsid1_09.jpg"><img src="/news/newsid1_09s.jpg" alt=""></a>
<a class="gallery_news" data-fancybox-group="newsid1" href="/news/newsid1_11.jpg"><img src="/news/newsid1_11s.jpg" alt=""></a>
<a class="gallery_news" data-fancybox-group="newsid1" href="/news/newsid1_12.jpg"><img src="/news/newsid1_12s.jpg" alt=""></a>
<a class="gallery_news" data-fancybox-group="newsid1" href="/news/newsid1_13.jpg"><img src="/news/newsid1_13s.jpg" alt=""></a>
<a class="gallery_news" data-fancybox-group="newsid1" href="/news/newsid1_14.jpg"><img src="/news/newsid1_14s.jpg" alt=""></a>
<a class="gallery_news" data-fancybox-group="newsid1" href="/news/newsid1_15.jpg"><img src="/news/newsid1_15s.jpg" alt=""></a>
<a class="gallery_news" data-fancybox-group="newsid1" href="/news/newsid1_19.jpg"><img src="/news/newsid1_19s.jpg" alt=""></a>
<a class="gallery_news" data-fancybox-group="newsid1" href="/news/newsid1_20.jpg"><img src="/news/newsid1_20s.jpg" alt=""></a>
<a class="gallery_news" data-fancybox-group="newsid1" href="/news/newsid1_21.jpg"><img src="/news/newsid1_21s.jpg" alt=""></a>
<a class="gallery_news" data-fancybox-group="newsid1" href="/news/newsid1_22.jpg"><img src="/news/newsid1_22s.jpg" alt=""></a>
<a class="gallery_news" data-fancybox-group="newsid1" href="/news/newsid1_23.jpg"><img src="/news/newsid1_23s.jpg" alt=""></a>
<a class="gallery_news" data-fancybox-group="newsid1" href="/news/newsid1_24.jpg"><img src="/news/newsid1_24s.jpg" alt=""></a>
<a class="gallery_news" data-fancybox-group="newsid1" href="/news/newsid1_26.jpg"><img src="/news/newsid1_26s.jpg" alt=""></a>
<a class="gallery_news" data-fancybox-group="newsid1" href="/news/newsid1_27.jpg"><img src="/news/newsid1_27s.jpg" alt=""></a>
<a class="gallery_news" data-fancybox-group="newsid1" href="/news/newsid1_01.jpg"><img src="/news/newsid1_01s.jpg" alt=""></a>
<a class="gallery_news" data-fancybox-group="newsid1" href="/news/newsid1_08.jpg"><img src="/news/newsid1_08s.jpg" alt=""></a>
<a class="gallery_news" data-fancybox-group="newsid1" href="/news/newsid1_10.jpg"><img src="/news/newsid1_10s.jpg" alt=""></a>
<a class="gallery_news" data-fancybox-group="newsid1" href="/news/newsid1_16.jpg"><img src="/news/newsid1_16s.jpg" alt=""></a>
<a class="gallery_news" data-fancybox-group="newsid1" href="/news/newsid1_17.jpg"><img src="/news/newsid1_17s.jpg" alt=""></a>
<a class="gallery_news" data-fancybox-group="newsid1" href="/news/newsid1_18.jpg"><img src="/news/newsid1_18s.jpg" alt=""></a>
<a class="gallery_news" data-fancybox-group="newsid1" href="/news/newsid1_25.jpg"><img src="/news/newsid1_25s.jpg" alt=""></a>
</p>
<!--div class="newsnote">Фото: </div-->
</div>
</li>


<!--li id="newsid0">
<div class="newsdate">19 марта</div>
<h2 class="newshd">&laquo;Гостья&raquo; — русский трейлер</h2>
<div class="newsbox">
<p><a class="videos_news" data-fancybox-group="newsid0" href="#host_russiantrailer_550"><img src="/news/newsid0.jpg" alt=""></a></p>
<div id="host_russiantrailer_550" style="width: 800px; height: 335px; display: none;"><video class="video-js vjs-default-skin" controls preload="auto" width="800" height="335" poster="/images/black.png" data-setup="{}"><source src="http://www.hostmovie.ru/video/host_russiantrailer_550.mp4" type='video/mp4'><source src="http://www.hostmovie.ru/video/host_russiantrailer_550.webm" type='video/webm'></video></div>
</li-->




<!-- ======================================================================== -->
<!-- Must be under news! -->
<script type="text/javascript">
jQuery(".newshd").click( function(){
    var newsbox = jQuery(this).next();
    if( newsbox.is(":visible") ){
        newsbox.slideUp();   
    }else{
        newsbox.slideDown();   
    }
});
</script>