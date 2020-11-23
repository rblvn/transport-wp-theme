<?php get_header(); ?>


<section class="main bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/export-bg.jpg);">
	<div class="flex-aic container main-wrap">
		<div class="flex-wrap main-content">
			<h1 class="h1 title">Экспортируем грузы из России<br> в любую страну мира</h1>
			<div class="subtitle">Мы предлагаем сервис, услуги «под ключ» от Вас потребуется только минимальный<br> набор документов, которые наши сотрудники помогут подготовить</div>

			<div class="flex-wrap main-detail">
                <?php get_template_part ( "/components/form-calculation") ; ?>

				<ul class="flex-wrap main-detail-list list">
					<li class="flex-aic item">
						<div class="item-icon" style="background-image: url(/wp-content/themes/wood-bag/img/icon/shield-y.svg);"></div>
						<div class="item-descr">Юридическая<br> сохранность груза</div>
					</li>
					<li class="flex-aic item">
						<div class="item-icon" style="background-image: url(/wp-content/themes/wood-bag/img/icon/terms.svg);"></div>
						<div class="item-descr">Сроки от 1 дня</div>
					</li>
					<li class="flex-aic item">
						<div class="item-icon" style="background-image: url(/wp-content/themes/wood-bag/img/icon/weight.svg);"></div>
						<div class="item-descr">Грузы от 30 кг</div>
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

<div class="export-info">
	<div class="container">
		<ul class="flex-wrap export-info-list list">
			<li class="item">
				<div class="item-icon" style="background-image: url(/wp-content/themes/wood-bag/img/icon/docs.svg);"></div>
				<div class="item-descr">Помогаем собрать все необходимые документы</div>
			</li>
			<li class="item">
				<div class="item-icon" style="background-image: url(/wp-content/themes/wood-bag/img/icon/export.svg);"></div>
				<div class="item-descr">Делаем экспорт в комплексе с таможенным оформлением</div>
			</li>
			<li class="item">
				<div class="item-icon" style="background-image: url(/wp-content/themes/wood-bag/img/icon/contract.svg);"></div>
				<div class="item-descr">Оказываем услуги как под контракт клиента, так и под наш контракт (аутсорсинг ВЭД)</div>
			</li>
			<li class="item">
				<div class="item-icon" style="background-image: url(/wp-content/themes/wood-bag/img/icon/clearing.svg);"></div>
				<div class="item-descr">При экспорте в Китай сами можем сделать таможенную очистку в городе прибытия</div>
			</li>
		</ul>
	</div>
</div>

<section class="export-services">
	<div class="container">
		<h2 class="h2 title">Отправляем всеми видами транспорта</h2>
		<div class="s-subtitle">Подберем наиболее удобную перевозку для вас</div>

		<ul class="flex-wrap export-services-list list">
			<li class="item">
				<div class="item-wrap">
					<div class="item-preview bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/export-services/img-1.jpg);"></div>
					<div class="item-title">Авто доставка</div>
				</div>
			</li>
			<li class="item">
				<div class="item-wrap">
					<div class="item-preview bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/export-services/img-2.jpg);"></div>
					<div class="item-title">Ж/д доставка</div>
				</div>
			</li>
			<li class="item">
				<div class="item-wrap">
					<div class="item-preview bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/export-services/img-3.jpg);"></div>
					<div class="item-title">Морская доставка</div>
				</div>
			</li>
			<li class="item">
				<div class="item-wrap">
					<div class="item-preview bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/export-services/img-4.jpg);"></div>
					<div class="item-title">Авиа доставка</div>
				</div>
			</li>
		</ul>
	</div>
</section>

<!-- преимущества -->
<section class="advantages">
	<div class="container">
		<h2 class="h2 title">Узнайте преимущества работы с нами</h2>
		<div class="s-subtitle">Почему с нами уже более 1200 клиентов от малого бизнеса<br> до федеральных сетей</div>

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
