<?php get_header(); ?>


<section class="main bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/avia-bg.jpg);">
	<div class="flex-aic container main-wrap">
		<div class="flex-wrap main-content">
			<h1 class="h1 title">Авиа экспресс-доставка<br> грузов из Китая</h1>
			<div class="subtitle">Самые быстрые и удобные грузоперевозки для срочных,<br> хрупких и ценных грузов. Минимум требуемых документов и<br> максимально короткие сроки</div>

			<div class="flex-wrap main-detail">
                <?php get_template_part ( "/components/form-calculation" ); ?>

				<ul class="flex-wrap main-detail-list list">
					<li class="flex-aic item">
						<div class="item-icon" style="background-image: url(/wp-content/themes/wood-bag/img/icon/shield-y.svg);"></div>
						<div class="item-descr">Юридическая<br> сохранность груза</div>
					</li>
					<li class="flex-aic item">
						<div class="item-icon" style="background-image: url(/wp-content/themes/wood-bag/img/icon/weight.svg);"></div>
						<div class="item-descr">Минимальный<br> груз от 30 кг</div>
					</li>
					<li class="flex-aic item">
						<div class="item-icon" style="background-image: url(/wp-content/themes/wood-bag/img/icon/terms.svg);"></div>
						<div class="item-descr">Сроки от 1 до 3<br> дней</div>
					</li>
					<li class="flex-aic item">
						<div class="item-icon" style="background-image: url(/wp-content/themes/wood-bag/img/icon/timer.svg);"></div>
						<div class="item-descr">87% грузов успеваем<br> доставить раьше</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="avia bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/avia-map.jpg);">
	<div class="container">
		<h2 class="h2 title">Идеальный вариант,<br> если вам важна скорость доставки</h2>
		<div class="s-subtitle">Сами делаем переупаковку груза, если она не соответствует требованиям авиаперевозок</div>
		
		<div class="flex-wrap flex-jusb avia-wrap">
			<div class="item">
				<div class="item-title">Из каких аэропортов<br> будет вылетать ваш<br> груз из Китая</div>
				<ul class="item-list list">
					<li>Пекин</li>
					<li>Шанхай</li>
					<li>Гуанчжоу</li>
					<li>Шенчьжень</li>
					<li>Гонконг</li>
					<li>Сямэнь</li>
					<li>Нинбо</li>
					<li>Шаньтоу</li>
					<li>Чонсин</li>
					<li>Дженджоу</li>
					<li>Циндао</li>
					<li>Харбин</li>
				</ul>
			</div>
			<div class="item">
				<div class="item-title">Куда прилетают<br> грузы в России</div>
				<ul class="item-list list">
					<li>Москва</li>
					<li>Санкт-Петербург</li>
					<li>Екатеринбург</li>
					<li>Краснодар</li>
					<li>Казань</li>
					<li>Челябинск</li>
					<li>Новосибирск</li>
					<li>Иркутск</li>
					<li>Владивосток</li>
				</ul>
				<div class="item-info">Забор груза осуществляется из любого города Китая и доставляется по всем городам России</div>
			</div>
		</div>
	</div>
</section>

<!-- преимущества -->
<section class="advantages">
	<div class="container">
		<h2 class="h2 title">Мы создали идеальную систему<br> авиаперевозок</h2>

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
