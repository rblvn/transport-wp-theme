<? get_header(); ?>

<? /* Template Name: Страница записей */ ?>

    <div class="bread-crumb blog__bread-crumb">
        <div class="container">
            <div class="bread-crumb__wrapper">
                <a href="/" class="bread-crumb__item bread-crumb__item-active">Главная</a>
                <a href="/blog" class="bread-crumb__item">Блог</a>
            </div>
        </div>
    </div>

	<? if ( !is_paged() ){ ?>

    <section class="articles-header">
        <div class="container">
            <h2 class="h2 title">Блог</h2>
            <div class="articles-header__wrapper">
				<?
				global $post;
				$myposts = get_posts( array('post_type' => 'post',  'orderby' => 'date', 'order' => 'DESC') );
				$post = $myposts[0];
				setup_postdata($post);
				get_template_part('/components/blog/last-post');
				
				wp_reset_query();
				?>
                <div class="articles-header__search">
                    <div class="search-form__wrapper">
                        <?php get_search_form(); ?>
                    </div>
                    <h3 class="title">Популярные тематики</h3>
                    <div class="hashtags">
						<?php
						$categories = get_categories(array(
							'orderby' => 'count',
							'order' => 'DESC'
						));
						foreach( $categories as $category ){
							echo '<a href="' . get_category_link($category->term_id) . '"class="hashtags-item">#' . $category->name . '</a>';
						}
						?>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<? } ?>

    <section class="articles-main">
        <div class="container">
            <div class="articles-row">
				    <? 	$i = 1;
				while (have_posts()) { 
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
			<div class = "post-pagination">
				<? echo clean_pagination(); ?>
			</div>
        </div>
    </section>

<? get_footer(); ?>