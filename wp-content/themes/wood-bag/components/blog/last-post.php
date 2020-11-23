<div class="articles-header__general-post" style="background-image: url(<? echo get_field('wide-img'); ?>);">
	<div class="articles__general-post__inner">
		<p class="date"><? echo get_the_date('j F Y'); ?></p>
		<a href="<? echo get_permalink(); ?>" class="title"><? the_title(); ?></a>
		<p class="text"><? the_excerpt_max_charlength( 140 ) ?></p>
		<div class="hashtags">
			<? get_post_categories(); ?>
		</div>
	</div>
</div>