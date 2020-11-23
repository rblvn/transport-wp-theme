<?php get_header(); ?>


<section class="main bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/search-bg.jpg);">
	<div class="flex-aic container main-wrap">
		<div class="flex-wrap main-content">
			<h1 class="h1 title">Найдем надежного<br> поставщика в Китае<br> <span style="color: #ffd87a;">бесплатно за 1 день</span></h1>

			<div class="flex-wrap main-detail">
                <?php get_template_part ( "/components/form-calculation") ; ?>

				<ul class="flex-wrap main-detail-list list">
					<li class="flex-aic item">
						<div class="item-icon" style="background-image: url(/wp-content/themes/wood-bag/img/icon/list-y.svg);"></div>
						<div class="item-descr">Предлагаем<br> несколько вариантов<br> производителей и цен</div>
					</li>
					<li class="flex-aic item">
						<div class="item-icon" style="background-image: url(/wp-content/themes/wood-bag/img/icon/train.svg);"></div>
						<div class="item-descr">Подбираем самый<br> оптимальный вид<br> доставки</div>
					</li>
					<li class="flex-aic item">
						<div class="item-icon" style="background-image: url(/wp-content/themes/wood-bag/img/icon/magnifier-y.svg);"></div>
						<div class="item-descr">Тщательно проверяем<br> производителей на надежность</div>
					</li>
					<li class="flex-aic item">
						<div class="item-icon" style="background-image: url(/wp-content/themes/wood-bag/img/icon/money.svg);"></div>
						<div class="item-descr">Беззалоговое финансирование поставки груза</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="search-info">
	<div class="container">
		<h3 class="h3 title">Какие товары мы уже нашли и доставили?</h3>
		<div class="s-subtitle">Мы ежемесячно находим сотни надежных поставщиков<br> и готовы делиться своими наработками</div>

		<ul class="flex-wrap row search-info-list list">
			<li class="col item">
				<div class="item-wrap">
					<div class="item-preview bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/search/img-1.jpg);"></div>
					<div class="item-title">Промышленная химия</div>
					<div class="item-descr">Являемся официальным представителем завода Ecovision Smart Chemicals Co. Ldt</div>
				</div>
			</li>
			<li class="col item">
				<div class="item-wrap">
					<div class="item-preview bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/search/img-2.jpg);"></div>
					<div class="item-title">Редкоземельные металлы</div>
				</div>
			</li>
			<li class="col item">
				<div class="item-wrap">
					<div class="item-preview bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/search/img-3.jpg);"></div>
					<div class="item-title">Электроника, видеокарты и майнеры</div>
				</div>
			</li>
			<li class="col item">
				<div class="item-wrap">
					<div class="item-preview bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/search/img-4.jpg);"></div>
					<div class="item-title">Станки и пресс-формы</div>
				</div>
			</li>
			<li class="col item">
				<div class="item-wrap">
					<div class="item-preview bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/search/img-5.jpg);"></div>
					<div class="item-title">Хозтовары</div>
				</div>
			</li>
			<li class="col item">
				<div class="item-wrap">
					<div class="item-preview bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/search/img-6.jpg);"></div>
					<div class="item-title">Товары для производства рекламы</div>
				</div>
			</li>
			<li class="col item">
				<div class="item-wrap">
					<div class="item-preview bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/search/img-7.jpg);"></div>
					<div class="item-title">Стройматериалы, сантехника, метизы</div>
				</div>
			</li>
			<li class="col item">
				<div class="item-wrap">
					<div class="item-preview bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/search/img-8.jpg);"></div>
					<div class="item-title">Промышленное оборудование и комплектующие</div>
				</div>
			</li>
			<li class="col item">
				<div class="item-wrap">
					<div class="item-preview bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/search/img-9.jpg);"></div>
					<div class="item-title">Игрушки и товары народного потребления</div>
				</div>
			</li>
		</ul>

		<form action="#" class="form trucking-form">
			<div class="trucking-form-title">Не нашли ваш товар?</div>
			<div class="trucking-form-subtitle">Оставьте заявку и мы найдем поставщика для вас БЕСПЛАТНО</div>

			<div class="flex-wrap flex-jusc fields">
				<input type="tel" name="phone" placeholder="Введите номер телефона" required>
				<input type="hidden" name="form-name" value="Поиск поставщика">
				<input type="hidden" name="page-name" value="<?php echo $pageName ?>">
				<button type="submit" class="b-red-btn submit">Оставить заявку</button>
			</div>
		</form>
	</div>
</section>

<!-- преимущества -->
<section class="advantages">
	<div class="container">
		<h2 class="h2 title">Узнайте преимущества работы с нами</h2>
		<div class="s-subtitle">Почему с нами уже более 1200 клиентов</div>

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
