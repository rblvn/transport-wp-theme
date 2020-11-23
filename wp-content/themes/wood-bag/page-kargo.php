<?php get_header(); ?>


<section class="main bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/kargo-bg.jpg);">
	<div class="flex-aic container main-wrap">
		<div class="flex-wrap main-content">
			<h1 class="h1 title">Карго-доставка<br> грузов из Китая</h1>
			<div class="subtitle">Отправляем сборные грузы от 50 кг совместно с заказами нескольких<br> клиентов. Таможенные сборы уже включены в стоимость</div>

			<div class="flex-wrap main-detail">
				<?php get_template_part ( "/components/form-calculation") ; ?>

				<ul class="flex-wrap main-detail-list list">
					<li class="flex-aic item">
						<div class="item-icon" style="background-image: url(/wp-content/themes/wood-bag/img/icon/shield-y.svg);"></div>
						<div class="item-descr">Юридическая<br> сохранность груза</div>
					</li>
					<li class="flex-aic item">
						<div class="item-icon" style="background-image: url(/wp-content/themes/wood-bag/img/icon/pencil.svg);"></div>
						<div class="item-descr">Доставляем грузы от 0,1 м3</div>
					</li>
					<li class="flex-aic item">
						<div class="item-icon" style="background-image: url(/wp-content/themes/wood-bag/img/icon/terms.svg);"></div>
						<div class="item-descr">Сроки от 7 до 12 дней </div>
					</li>
					<li class="flex-aic item">
						<div class="item-icon" style="background-image: url(/wp-content/themes/wood-bag/img/icon/info.svg);"></div>
						<div class="item-descr">Информируем на всех этапах работы</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="kargo-info">
	<div class="container">
		<div class="flex-wrap flex-jusb kargo-info-wrap">
			<div class="kargo-info-descr">
				<h3 class="h3 title">Ключевое преимущество<br> карго-доставки — таможенные<br> сборы уже включены в стоимость, </h3>
				<div class="subtitle">никаких дополнительных сборов по прибытию груза</div>

				<div class="kargo-info-text">
					<p>Если объем вашего груза не достаточен для отправки полного<br> контейнера — сборный груз как раз для Вас. Наша компания готова<br> доставить из Китая в Россию любой Ваш груз от 0,1 кубического метра.</p>
					<p>Сборные грузы перевозят на автомобилях, самолетах, поездах и<br> водном транспорте: все зависит от сроков доставки, типа груза и<br> пункта назначения</p>
				</div>
			</div>
			
			<div class="kargo-info-points">
				<div class="ttl">Пункты отправления<br> и прибытия</div>
				<div class="flex-wrap item">
					<div class="item-flag" style="background-image: url(/wp-content/themes/wood-bag/img/china-flag.jpg);"></div>
					<div class="item-wrap">
						<div class="item-title">Из Китая:</div>
						<div class="item-descr">Гуачжоу, Иу, Пекин, Харбин, Урумчи</div>
					</div>
				</div>
				<div class="flex-wrap item">
					<div class="item-flag" style="background-image: url(/wp-content/themes/wood-bag/img/russian-flag.jpg);"></div>
					<div class="item-wrap">
						<div class="item-title">В Россию:</div>
						<div class="item-descr">Москва, Санкт-Петербург, Екатеринбург, Казань, Челябинск, Крым, Волгоград, Череповец, Новосибирск, Владивосток</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="tab-wrap routes kargo-maps">
	<div class="container">
		<div class="title">Забор груза осуществляется из любого города Китая<br> и доставляется по всем городам России</div>

		<div class="flex-wrap flex-jusc tab-list">
			<button type="button" class="b-red-bd-btn tab active">Авто</button>
			<button type="button" class="b-red-bd-btn tab">Авиа</button>
			<button type="button" class="b-red-bd-btn tab">Ж/д</button>
			<button type="button" class="b-red-bd-btn tab">Море</button>
		</div>
	</div>

	<div class="tab-content active">
		<div class="routes-map bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/kargo/map-1.jpg);"></div>
	</div>
	<div class="tab-content">
		<div class="routes-map bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/kargo/map-2.jpg);"></div>
	</div>
	<div class="tab-content">
		<div class="routes-map bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/kargo/map-3.jpg);"></div>
	</div>
	<div class="tab-content">
		<div class="routes-map bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/kargo/map-4.jpg);"></div>
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
