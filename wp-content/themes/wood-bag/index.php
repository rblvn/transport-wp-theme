<?php get_header(); ?>   

<section class="main bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/main-bg.jpg);">
	<div class="flex-aic container main-wrap">
		<div class="flex-wrap main-content">
			<div class="main-left-col">
				<h1 class="h1 title">Доставка грузов<br> из Китая и Азии</h1>
				<div class="subtitle">Являемся экспертом в антикризисной логистике и лидером в скорости доставки грузов</div>
				<button data-fancybox data-src="#get-consultation" type="button" class="modal-btn b-red-btn get-consultation-btn">Получить бесплатную консультацию</button>
			</div>
			<div class="main-right-col">
				<div class="main-info">
					<div class="flex-aic item">
						<div class="item-wrap">
							<span>Грузы от</span><br>
							<span class="item-number">30</span>
							<span>килограмм</span>
						</div>
					</div>
					<div class="flex-aic item">
						<div class="item-wrap">
							<span>Сроки от</span><br>
							<span class="item-number">1</span>
							<span>дня</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- услуги -->
<?php get_template_part ( "/components/services" ); ?>

<!-- преимущества -->
<section class="advantages">
	<div class="container">
		<h2 class="h2 title">Узнайте преимущества работы с нами</h2>
		<div class="s-subtitle">Почему с нами уже более 1200 клиентов от малого бизнеса<br> до федеральных сетей</div>

		<?php get_template_part ( "/components/advantages.php" ); ?>
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
