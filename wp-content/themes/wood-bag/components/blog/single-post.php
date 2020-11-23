<div class="acticles-item">
    <div class="acticles-item__img-wrapper">
        <img src="<? echo get_the_post_thumbnail_url()?>" alt="" class="acticles-item__img">
    </div>
    <div class="acticles-item__inner">
        <p class="acticles-item__inner-date"><? echo get_the_date('j F Y'); ?></p>
        <a href="<? the_permalink(); ?>" class="acticles-item__inner-title"><? the_title() ?></a>
        <p class="acticles-item__inner-text"><? the_excerpt_max_charlength(60); ?></p>
        <div class="acticles-item__inner-hashtags">
            <? get_post_categories(); ?>
        </div>
    </div>
</div>