<?php get_header(); ?>


<section class="main bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/railage-bg.jpg);">
	<div class="flex-aic container main-wrap">
		<div class="flex-wrap main-content">
			<h1 class="h1 title">Железнодорожные<br> перевозки из Китая</h1>
			<div class="subtitle">Быстрая и недорогая доставка. За счет железнодорожной перевозки<br> сокращаем сроки и сохраняем низкую стоимость</div>

			<div class="flex-wrap main-detail">
                <?php get_template_part ( "/components/form-calculation") ; ?>

				<ul class="flex-wrap main-detail-list list">
					<li class="flex-aic item">
						<div class="item-icon" style="background-image: url(/wp-content/themes/wood-bag/img/icon/shield-y.svg);"></div>
						<div class="item-descr">Юридическая<br> сохранность груза</div>
					</li>
					<li class="flex-aic item">
						<div class="item-icon" style="background-image: url(/wp-content/themes/wood-bag/img/icon/weight.svg);"></div>
						<div class="item-descr">Доставляем<br> грузы от 200 кг</div>
					</li>
					<li class="flex-aic item">
						<div class="item-icon" style="background-image: url(/wp-content/themes/wood-bag/img/icon/terms.svg);"></div>
						<div class="item-descr">Сроки от 14 до 18<br> дней</div>
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

<section class="traffic-info railage-info">
	<div class="container">
		<h3 class="h3 title">Идеально для тех, кто находится<br> в отдаленных районах от морских портов</h3>
		<div class="subtitle">Ж/д доставка не зависит от погоды, четкое согласованное расписание</div>

		<ul class="flex-wrap traffic-info-list list">
			<li class="item">
				<div class="item-number">01</div>
				<div class="item-descr">Возможна перевозка<br> негабаритных грузов</div>
			</li>
			<li class="item">
				<div class="item-number">02</div>
				<div class="item-descr">Стабильное расписание<br> отправок, не зависящее<br> от погодных условий</div>
			</li>
			<li class="item">
				<div class="item-number">03</div>
				<div class="item-descr">Минимизируйте затраты на доп. транспортные расходы благодаря разветвленности ж/д путей</div>
			</li>
		</ul>
	</div>
</section>

<section class="tab-wrap routes">
	<div class="container">
		<h2 class="h2 title">Карта железнодорожных<br> перевозок из Китая</h2>
		<div class="s-subtitle">Забор груза осуществляется из любого города Китая<br> и доставляется по всем городам России</div>

		<div class="flex-wrap flex-jusc tab-list">
			<button type="button" class="b-red-bd-btn tab active">Целый контейнер</button>
			<button type="button" class="b-red-bd-btn tab">Сборный груз</button>
		</div>
	</div>

	<div class="tab-content routes-content active">
		<div class="routes-map bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/railage/map-1.jpg);"></div>

		<div class="delivery-stages">
			<div class="container">
				<div class="delivery-stages-title">Варианты доставки</div>
				<div class="tab-wrap-inner delivery-stages-wrap">
					<div class="flex tab-list-inner">
						<button type="button" class="tab-inner active">1 вариант</button>
						<button type="button" class="tab-inner">2 вариант</button>
					</div>

					<div class="tab-content-inner delivery-stages-descr active">
						Таможенное оформление проходит на границе, далее контейнер едет в город назначения
					</div>
					<div class="tab-content-inner delivery-stages-descr">
						Контейнер проходит границу в режиме ВТТ (Внутренний таможенный транзит), далее по прибытию в город назначения производится таможенное оформление
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="tab-content routes-content">
		<div class="routes-map bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/railage/map-2.jpg);"></div>

		<div class="delivery-stages">
			<div class="container">
				<div class="delivery-stages-title">Этапы доставки</div>
				<div class="tab-wrap-inner delivery-stages-wrap">
					<div class="flex tab-list-inner">
						<button type="button" class="tab-inner active">1 этап</button>
						<button type="button" class="tab-inner">2 этап</button>
						<button type="button" class="tab-inner">3 этап</button>
					</div>
					
					<div class="tab-content-inner delivery-stages-descr active">
						Сборный контейнер собирается в городах Гуанчжоу и Сучжоу, далее отправляются до станции Ворсино в Калужскую область
					</div>
					<div class="tab-content-inner delivery-stages-descr">
						Отправка контейнеров 1 раз в неделю. Груз едет в режиме ВТТ (Внутренний таможенный транзит)
					</div>
					<div class="tab-content-inner delivery-stages-descr">
						После прохождения таможни в России груз отправляется в город назначения
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- преимущества -->
<section class="advantages">
	<div class="container">
		<h2 class="h2 title">Мы разработали надежную систему<br> ж/д перевозок</h2>

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
