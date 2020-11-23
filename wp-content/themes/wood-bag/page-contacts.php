<?php get_header(); ?>


<section class="contacts contacts-page">
	<div class="container">
		<div class="tab-wrap contacts-wrap">
			<div class="flex-wrap flex-aic contacts-tab">
				<h2 class="h2 title">Контакты</h2>
				<div class="flex-aic flex-jusc tab-list">
					<button type="button" class="b-red-bd-btn tab active">Офис в России</button>
					<button type="button" class="b-red-bd-btn tab">Офис в китае</button>
				</div>
			</div>

			<div class="tab-content contacts-info active">
				<div class="contacts-info-col">
					<div class="office-carousel office-gallery-ru">
						<div class="item">
							<a data-fancybox="russia" href="/wp-content/themes/wood-bag/img/contacts/russia-2.jpg" class="contacts-img bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/contacts/russia-2-min.jpg);"></a>
						</div>
					</div>
					<div class="contacts-address">Россия, г. Екатеринбург,<br> ул. Малышева, 51, оф. 42/05,<br> БЦ «Высоцкий»</div>

					<div class="contacts-phone">
						<span>Телефоны</span><br>
						<a href="tel:88002225659">8 800 222-56-59</a>
					</div>

					<div class="contacts-email">
						<span>E-mail</span><br>
						<a href="mailto:contact@wood-bag.com">contact@wood-bag.ru</a>
					</div>
				</div>

				<div id="map-ru" class="map"></div>
			</div>

			<div class="tab-content contacts-info">
				<div class="contacts-info-col">
					<div class="office-carousel office-gallery-ch">
						<div class="item">
							<a data-fancybox="china" href="/wp-content/themes/wood-bag/img/contacts/china-2.jpg" class="contacts-img bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/contacts/china-2-min.jpg);"></a>
						</div>
						<div class="item">
							<a data-fancybox="china" href="/wp-content/themes/wood-bag/img/contacts/china-1.jpg" class="contacts-img bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/contacts/china-1-min.jpg);"></a>
						</div>
					</div>
					<div class="contacts-address">China, Ninbo, Yinzhou district,<br> Southern Business area, Ningbo<br> Chamber of Commerce building B, 614</div>

					<div class="contacts-phone">
						<span>Телефоны</span><br>
						<a href="tel:8618658411591">86 18 658 411 591</a>
					</div>

					<div class="contacts-email">
						<span>E-mail</span><br>
						<a href="mailto:eco@smart-chemicals.com">contact@wood-bag.ru</a>
					</div>
				</div>

				<div id="map-ch" class="map"></div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>