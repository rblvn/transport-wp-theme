	<!-- footer -->
    <div id="scrollToTop"><i class="fa fa-arrow-up"></i></div>
	<footer class="footer">
		<div class="flex-wrap footer-main__wrapper container">
			<div class="footer-descr">
				<a href="<?php echo $base ?>" <?php /*echo $home_link*/ ?> class="logo">
					<img src="/wp-content/themes/wood-bag/img/black-logo.svg" alt="" class="rsp-img">
				</a><br>
				<span>Ваш деловой партнер в Китае.</span><br>
				<span>Работаем c 2010 года</span>
			</div>

<!-- 			<div class="footer-info">
				<div class="item footer-info-data">
					ООО «Вуд бэг»<br>
					ОГРН 1146670011520<br>
					ИНН 6670424060<br>
					КПП 667001001<br>
					БИК 046577964
				</div>
				<div class="item">
					<a class="privacy-policy" href="/wp-content/themes/wood-bag/documents/Политика конфиденциальности (wood-bag).docx">Политика<br> конфиденциальности</a>
					<div class="made-in">Сделано в <a href="https://lead-market.ru/" target="_blank">"Lead-Market"</a></div>
				</div>
			</div> -->

			<div class="flex-wrap footer-menu">
				<div class="bottom-menu">
					<ul>
						<li><a href="/">Главная</a></li>
						<li><a href="tamozhennoe-oformlenie/">Таможня</a></li>
						<li><a href="poisk-postavshchikov/">Поиск товара БЕСПЛАТНО</a></li>
						<li><a href="autsorsing-ved/">Аутсорсинг ВЭД</a></li>
						<li><a href="organization-ved/">Все этапы ВЭД под ключ</a></li>
						<li><a href="about/">О компании</a></li>
						<li><a href="#">Блог</a></li>
						<li><a href="contacts/">Контакты</a></li>
						<!--<li><a href="#">База знаний</a></li>-->
					</ul>
				</div>
				<div class="bottom-menu">
					<ul>
						<li><a href="trucking/">Грузоперевозки</a></li>
						<li><a href="avto-dostavka/">Авто доставка</a></li>
						<li><a href="avia-dostavka/">Авиа доставка</a></li>
						<li><a href="zhd-perevozka/">Ж/д доставка</a></li>
						<li><a href="morskaya-dostavka/">Морская доставка</a></li>
						<li><a href="kargo/">Карго доставка</a></li>
<!-- 					<li><a href="export/">Экспорт</a></li> -->
					</ul>
				</div>
				<div class="bottom-menu">
					<ul>
						<li><a href="china-market/">Вывод продукции в Китай</a></li>
					</ul>
				</div>
			</div>

			<div class="phone">
				<div class="footer-tel">
					<a href="tel:88002225659">8 800 222-56-59</a><br class="footer-br">
					<div class="flex-wrap df-social">
						<a href="https://wa.me/+79221867213" class="flex-aic-jusc df-social-link"><img src="/wp-content/themes/wood-bag/img/icon/whatsapp-c.svg" alt="" class="rsp-img"></a>
						<a href="tg://resolve?domain=woodbag" class="flex-aic-jusc df-social-link"><img src="/wp-content/themes/wood-bag/img/icon/telegram-c.svg" alt="" class="rsp-img"></a>
					</div>
				</div>
<!-- 			<button data-fancybox data-src="#request-call" type="button" class="modal-btn s-red-bd-btn request-call-btn">Заказать звонок</button> -->
				<div class="phone-china-title">Время работы 9.00 – 19.00</div>
				<a class="footer-email">contact@wood-bag.ru</a>
				<div class="phone-china">
					<div class="phone-china-title">Единый телефон в Китае</div>
					<a href="tel:+8618658411591">+86 18 658-411-591</a>
				</div>
			</div>
		</div>
	</footer>

	<div class="copyright">
		<div class="container">
				<div class="copyright-wrapper">
				<span class="copyright-text">© 2010-2020 Международная компания Woodbag</span>
				<a href="/wp-content/uploads/2020/11/Политика-конфиденциальности-wood-bag.docx" class="copyright-text copyright-text__bright">Политика конфиденциальности</a>
				<span class="copyright-text">ОГРН 1146670011520  /  ИНН 6670424060  /  КПП 667001001</span>
			</div>
		</div>
	</div>

</div>

<!-- modals -->
<div class="modals">
	<?php get_template_part( "/components/modals" ); ?>
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3Eu6mrK0SwjyuQS8DL-yRkrnQpqVizik"></script>



<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter24739337 = new Ya.Metrika({
                    id:24739337,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/24739337" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<?php wp_footer();?>
</body>
</html>