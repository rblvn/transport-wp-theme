<? get_header(); ?>

<div class="bread-crumb blog__bread-crumb">
        <div class="container">
            <div class="bread-crumb__wrapper">
                <a href="/" class="bread-crumb__item bread-crumb__item-active">Главная</a>
				<a href="/blog/" class="bread-crumb__item">Блог</a>
                <a href=""><?php single_cat_title(_('Все записи рубрики: '), true); ?></a>
            </div>
        </div>
    </div>
    
<section class="articles-header">
    <div class="container">
		
    <? $i = 1; 
	if( have_posts() ) ?> 
    <h1><?php single_cat_title(_('Все записи рубрики: '), true); ?> </h1>
    </div>
</section>

<section class="articles-main">
    <div class="container">
        <div class="articles-row">
            <? while (have_posts()) { 
                the_post();
                get_template_part('/components/blog/single-post'); 
				if( ! ($i++ % 2) ){
						?>
					</div><!-- articles-row -->
					<div class="articles-row"> <?
				}
                }
                wp_reset_query(); 
?>
        </div>
    </div>
</section>
<? get_footer(); ?>