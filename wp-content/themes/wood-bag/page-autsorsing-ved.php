<?php get_header(); ?>

<section class="main bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/autsorsing-bg.jpg);">
	<div class="flex-aic container main-wrap">
		<div class="flex-wrap main-content">
			<h1 class="h1 title">Аутсорсинг ВЭД из Китая и Азии.<br> Под наш контракт</h1>
			<div class="subtitle">Переложите все сложности и риски на нас.<br> Профессионально решаем вопросы с поиском, подбором, доставкой,<br> таможней грузов из Китая</div>

			<div class="flex-wrap main-detail">
                <?php get_template_part ( "/components/form-calculation") ; ?>

				<ul class="flex-wrap main-detail-list list">
					<li class="flex-aic item">
						<div class="item-icon" style="background-image: url(/wp-content/themes/wood-bag/img/icon/box-docs.svg);"></div>
						<div class="item-descr">Предоставляем полный<br> пакет закрывающих<br> документов</div>
					</li>
					<li class="flex-aic item">
						<div class="item-icon" style="background-image: url(/wp-content/themes/wood-bag/img/icon/report.svg);"></div>
						<div class="item-descr">Предоставляем<br> подробный понятный<br> расчет сделки</div>
					</li>
					<li class="flex-aic item">
						<div class="item-icon" style="background-image: url(/wp-content/themes/wood-bag/img/icon/provider.svg);"></div>
						<div class="item-descr">Помогаем решать<br> вопросы по закупке<br> с поставщиком</div>
					</li>
					<li class="flex-aic item">
						<div class="item-icon" style="background-image: url(/wp-content/themes/wood-bag/img/icon/info.svg);"></div>
						<div class="item-descr">Информируем на<br> всех этапах работы</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="autsorsing">
	<div class="container">
		<h3 class="h3 title">Посмотрите как проходит работа</h3>
		<div class="s-subtitle">Изучите подробную схему работы с нами, узнайте как это просто</div>

		<div class="autsorsing-wrap">
			<div class="autsorsing-info">
				<div class="item">1. Вы оплачиваете нам груз по контракту купли продажи между 2-мя российскими компаниями.</div>
				<div class="autsorsing-info-list">
					<div class="item">2. Мы подготавливаем ВЭК (внешний экономический контракт) с поставщиком. Открываем паспорт сделки, если необходимо.</div>
					<div class="item">3. Переводим оплату за груз поставщику</div>
					<div class="item">4. Когда товар готов, доставляем до порта (если используется морская доставка) и проводим «затамаживание».</div>
					<div class="item">5. Доставляем груз до порта в России (или в аэропорт, в зависимости от способа доставки)</div>
					<div class="item">6. Проводим таможенное оформление, оплачиваем пошлины и НДС</div>
					<div class="item">7. Доставляем груз по России к Вам</div>
				</div>
				<div class="item">8. Обмениваемся с вами закрывающими документами (счет-фактура, акты выполенных работ)</div>

				<div class="autsorsing-info-alert">*пункты 2-7 мы берем на себя</div>
			</div>
			<img src="/wp-content/themes/wood-bag/img/autsorsing-map.jpg" alt="" class="autsorsing-map rsp-img">
		</div>
	</div>
</section>

<!-- преимущества -->
<section class="advantages">
	<div class="container">
		<h2 class="h2 title">Почему нам доверяют аутсорсинг<br> ВЭД на протяжении 10 лет</h2>

        <?php get_template_part ( "/components/advantages" ); ?>
	</div>
</section>


<!-- клиенты -->
<?php get_template_part ( "/components/clients" ); ?>

<!-- лидеры -->
<?php get_template_part ( "/components/leaders" ); ?>

<!-- о нас -->
<?php get_template_part ( "/components/about-us" ); ?>

<!-- сертификаты -->
<?php get_template_part ( "/components/certificates" ); ?>

<!-- контакты -->
<?php get_template_part( "/components/contacts" );?>

<?php get_footer(); ?>
