<?php get_header(); ?>


<section class="main bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/shipping-bg.jpg);">
	<div class="flex-aic container main-wrap">
		<div class="flex-wrap main-content">
			<h1 class="h1 title">Морская доставка<br> грузов из Китая</h1>
			<div class="subtitle">Самый дешевый и надежный вид перевозок<br> контейнерных и сборных грузов. Для тех, кому<br> важно уменьшить себестоимость продукта</div>

			<div class="flex-wrap main-detail">
                <?php get_template_part ( "/components/form-calculation") ; ?>

				<ul class="flex-wrap main-detail-list list">
					<li class="flex-aic item">
						<div class="item-icon" style="background-image: url(/wp-content/themes/wood-bag/img/icon/shield-y.svg);"></div>
						<div class="item-descr">Юридическая<br> сохранность груза</div>
					</li>
					<li class="flex-aic item">
						<div class="item-icon" style="background-image: url(/wp-content/themes/wood-bag/img/icon/weight.svg);"></div>
						<div class="item-descr">Доставляем<br> грузы от 300 кг</div>
					</li>
					<li class="flex-aic item">
						<div class="item-icon" style="background-image: url(/wp-content/themes/wood-bag/img/icon/terms.svg);"></div>
						<div class="item-descr">Сроки от 35 до 45<br> дней</div>
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

<section class="traffic-info">
	<div class="container">
		<h3 class="h3 title">Идеально для тех, кто планирует<br> покупки в Китае заранее</h3>
		<div class="subtitle">и хочет получить максимально низкую себестоимость товара с учетом перевозки</div>

		<ul class="flex-wrap traffic-info-list list">
			<li class="item">
				<div class="item-number">01</div>
				<div class="item-descr">Перевозим<br> негабаритные грузы</div>
			</li>
			<li class="item">
				<div class="item-number">02</div>
				<div class="item-descr">Стабильное<br> расписание отправок</div>
			</li>
			<li class="item">
				<div class="item-number">03</div>
				<div class="item-descr">Доставляем в порт<br> отправления из любого<br> города Китая</div>
			</li>
			<li class="item">
				<div class="item-number">04</div>
				<div class="item-descr">Доставляем из порта прибытия в любой город России авто или ЖД транспортом, в том числе в режиме ВТТ</div>
			</li>
		</ul>
	</div>
</section>

<section class="tab-wrap routes">
	<div class="container">
		<h2 class="h2 title">Узнайте маршруты морских перевозок</h2>
		<div class="s-subtitle">Забор груза осуществляется из любого города Китая<br> и доставляется по всем городам России</div>

		<div class="flex-wrap flex-jusc tab-list">
			<button type="button" class="b-red-bd-btn tab active">Китай</button>
			<button type="button" class="b-red-bd-btn tab">Россия</button>
		</div>
	</div>

	<div class="tab-content active">
		<div class="routes-map bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/shipping/map-1.jpg);"></div>
	</div>
	<div class="tab-content">
		<div class="routes-map bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/shipping/map-2.jpg);"></div>
	</div>
</section>

<!-- преимущества -->
<section class="advantages">
	<div class="container">
		<h2 class="h2 title">Почему с нами надежно<br> доставлять грузы по морю</h2>

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
