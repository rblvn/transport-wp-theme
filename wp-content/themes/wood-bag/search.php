<?php get_header('blog') ?>

<section class="main main-article bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/stat-bg.jpg);">
	<div class="bread-crumb bread-crumb__article">
		<div class="container">
			<div class="bread-crumb__wrapper">
				<a href="/" class="bread-crumb__item bread-crumb__item-active">Главная</a>
				<p class="bread-crumb__item">Поиск</p>
				<p class="bread-crumb__item">Результаты поиска для: <? echo get_search_query();?></p>
			</div>
		</div>
	</div>
	<div class="flex-aic container main-wrap main-wrap__container text-center">
		<div class="flex-wrap main-content">
			<h1 class="h1 title">Результаты поиска для: <? echo get_search_query();?></h1>
		</div>
	</div>
</section>

<section class="articles-main">
    <div class="container">
        <div class="articles-row">
         <?php
		$i = 1;
        if (have_posts()) :
            while (have_posts()) { 
                the_post();
                get_template_part('/components/blog/single-post'); 
				if( ! ($i++ % 2) ){
						?>
					</div><!-- articles-row -->
					<div class="articles-row"> <?
				}
                }
				?>
        <?php
        else :
            echo "Извините, по Вашему запросу ничего не найдено";
        endif;
        ?>
        </div>
    </div>
</section>

<?php get_footer() ?>
