<?php get_header(); ?>


<section class="main bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/auto-bg.jpg);">
	<div class="flex-aic container main-wrap">
		<div class="flex-wrap main-content">
			<h1 class="h1 title">Авто доставка грузов<br> из Китая</h1>
			<div class="subtitle">Минимизируем сроки доставки и стоимость за счет разделения<br> аренды авто на нескольких клиентов. Быстрее, чем сборные<br> контейнерные грузы</div>

			<div class="flex-wrap main-detail">
                <?php get_template_part ( "/components/form-calculation" ); ?>

				<ul class="flex-wrap main-detail-list list">
					<li class="flex-aic item">
						<div class="item-icon" style="background-image: url(/wp-content/themes/wood-bag/img/icon/shield-y.svg);"></div>
						<div class="item-descr">Юридическая<br> сохранность груза</div>
					</li>
					<li class="flex-aic item">
						<div class="item-icon" style="background-image: url(/wp-content/themes/wood-bag/img/icon/weight.svg);"></div>
						<div class="item-descr">Доставляем грузы<br> от 100 кг</div>
					</li>
					<li class="flex-aic item">
						<div class="item-icon" style="background-image: url(/wp-content/themes/wood-bag/img/icon/calendar-y.svg);"></div>
						<div class="item-descr">Сроки от 18 до 25<br> дней</div>
					</li>
					<li class="flex-aic item">
						<div class="item-icon" style="background-image: url(/wp-content/themes/wood-bag/img/icon/key-y.svg);"></div>
						<div class="item-descr">Решаем все вопросы<br> «под ключ»</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="for-business">
	<div class="container">
		<div class="flex-wrap for-business-wrap">
			<div class="for-business-col">
				<h3 class="h3 title">Для малого<br> и среднего бизнеса</h3>
				<div class="subtitle">Если не можете ждать пока соберется<br> целый контейнер сборных грузов —<br> этот вариант для вас</div>
			</div>
			<div class="item">
				<div class="item-wrap">
					<div class="item-number">01</div>
					<div class="item-descr">Рассчитываем наиболее<br> выгодный маршрут исходя<br> из ваших грузов</div>
				</div>
			</div>
			<div class="item">
				<div class="item-wrap">
					<div class="item-number">02</div>
					<div class="item-descr">Машины выезжают<br> 2 раза в неделю</div>
				</div>
			</div>
			<img src="/wp-content/themes/wood-bag/img/boxes.jpg" alt="" class="rsp-img for-business-img">
		</div>
	</div>
</section>

<section class="auto">
	<div class="container">
		<h2 class="h2 title">Посмотрите, как проходят<br> маршруты авто доставки</h2>
		<div class="s-subtitle">Забор груза осуществляется из любого города Китая<br> и доставляется по всем городам России</div>
	</div>
	<div class="auto-map bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/auto-map.jpg);"></div>
</section>

<!-- преимущества -->
<section class="advantages">
	<div class="container">
		<h2 class="h2 title">Почему нам доверяют автодоставку<br> на протяжении 7 лет</h2>

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
