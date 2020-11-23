<?php get_header('blog'); ?> 


<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>

	<div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
    </div>  


    <section class="main main-article bg-i" style="background-image: url(<? echo get_field('wide-img'); ?>);">
		<div class="main-article__bg">
			<div class="bread-crumb bread-crumb__article">
				<div class="container">
					<div class="bread-crumb__wrapper">
						<a href="/" class="bread-crumb__item bread-crumb__item-active">Главная</a>
						<a href="/blog" class="bread-crumb__item">Блог</a>
						<a href="<? the_permalink(); ?>" class="bread-crumb__item"><? the_title(); ?></a>
					</div>
				</div>
			</div>
			<div class="flex-aic container main-wrap main-wrap__container text-center">
				<div class="flex-wrap main-content">
					<div class="main-btn__wrapper">
						<p class="acticles-item__inner-date"><? echo get_the_date('j F Y'); ?></p>
					</div>
					<h1 class="h1 title"><? the_title(); ?> </h1>
				</div>
			</div>
		</div>
    </section>

    <section class="stat-header">
        <div class="container">
            <div class="stat-header__wrapper">
                <div class="stat-header__time">
					<p class="stat-header__time-inner">Время чтения: <? estimated_reading_time(); ?></p>
                    <div class="stat-header__time-btn">Нет времени читать?</div>
                </div>
                <div class="stat-header__hashtags">
						<?php
						foreach( get_the_category() as $category ){
							echo '<a href="' . get_category_link($category->term_id) . '"class="stat-header__hashtags-item">#' . $category->name . '</a>';
						}
						?>
                </div>
            </div>
						<form id = "send-material" method="post" action="<? echo admin_url('admin-ajax.php?action=callback_mail')?>" class="flex-wrap df-feedback-form stat_top-form">
							<h3 class="stat_top-form-title">Отправим материал вам на почту</h3>
							<div class="stat_top-form-inner">
								<div class="stat-flex">
									<div class="stat_name-wrapper">
									<input id="user_name" class="stat_top-form-name" type="text" name="user_name" placeholder="Введите ваше имя" required>
									</div>
									<div class="stat_email-wrapper">
										<input id="user-email" class="stat_top-form-email" type="email" name="user_email" placeholder="Введите вашу почту" required>								
									</div>
									<input type="hidden" name="form-name" value="Нет времени читать">
									<input type="hidden" name="page-name" value="<?php echo $pageName ?>">
									<input type="hidden" name="post_id" value="<?php the_id(); ?>">
									<!-- каптча -->
									<div class="feedback_captcha-wrapper">
										<div id="feedback_captcha"></div>
										<div class="feedback_captcha-error">Пройдите капчу</div>
									</div>
									<button type="submit" class="b-red-btn submit send-material__btn">ОТПРАВИТЬ МАТЕРИАЛ</button>
								</div>
								<div class = 'policy'>Нажимая на кнопку, вы даете согласие на обработку своих <a href = '/wp-content/uploads/2020/11/Политика-конфиденциальности-wood-bag.docx'>персональных данных</a></div>
							</div>
						</form>
        </div>
	</section>
	
	<section class="stat-info">
        <div class="container container-1060">
            <div class = "blog-content">
			<? the_content(); ?>
			</div>
            <div class="stat-backLink__wrapper">
                <a href="/blog" class="stat-backLink">ВЕРНУТЬСЯ К СПИСКУ СТАТЕЙ</a>
            </div>
			 <? comments_template(); ?>
        </div>
	</section>



	<?php
}
?>

	<div class="navigation">
		<div class="next-posts"><?php next_posts_link(); ?></div>
		<div class="prev-posts"><?php previous_posts_link(); ?></div>
	</div>

	<div class = "container">
		<?
			// получаем ID всех элементов (категорий, меток или таксономий), к которым принадлежит текущий пост
			$cats_tags_or_taxes = wp_get_object_terms( $post->ID, 'category', array( 'fields' => 'ids' ) );

			$args = array(
				'posts_per_page' => 4,
				'tax_query' => array(
					array(
						'taxonomy' => 'category',
						'field' => 'id',
						'include_children' => false,
						'terms' => $cats_tags_or_taxes,
						'operator' => 'IN'
					)
				)
			);
			$query = new WP_Query( $args );

			if( $query->have_posts() ) :
				$i = 1; // Оператор для формирования корреткного отображения строк
				echo  '<h3 class="stat-articles__title">Похожие статьи</h3>
						<div class="stat-articles">
							<div class="articles-row">';
				while( $query->have_posts() ) : $query->the_post();
					get_template_part('/components/blog/single-post');
					if( ! ($i++ % 2) ){
								?>
									</div><!-- articles-row -->
								<div class="articles-row"> <?
								}
					endwhile;
				echo '</div> </div>';
			endif;

			wp_reset_postdata();
		?>
	</div>

	<?php
}
// постов нет
else {
	echo "<h2>Записей нет.</h2>";
}

get_footer(); ?>

<script>
	// по мере скролла появляется кнопка наверх
	window.onscroll = function() {myFunction()};

	function myFunction() {
	  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
	  if(document.documentElement.clientWidth < 480) {
		var height = document.documentElement.scrollHeight - document.documentElement.clientHeight - ((document.documentElement.scrollHeight - document.documentElement.clientHeight) / 100 * 10);
	  } else {
	  	var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
	  }
	  var scrolled = (winScroll / height) * 100;
	  document.getElementById("myBar").style.width = scrolled + "%";
	}

</script>

<!-- <script type="text/javascript">
document.getElementById('send-material').onsubmit = function () {
    if (!grecaptcha.getResponse(feedbackCaptcha)) {
         //          alert('Вы не заполнили поле Я не робот!');
		 $('.feedback_captcha-error').css('display', 'block');
         return false; // возвращаем false и предотвращаем отправку формы
    }
}

</script> -->


<? if (!is_user_logged_in()) {
?>
<script type="text/javascript">
document.getElementById('respond').onsubmit = function () {
    if (!grecaptcha.getResponse(commentCaptcha)) {
//          alert('Вы не заполнили поле Я не робот!');
		 $('.comment_captcha-error').css('display', 'block');
         return false; // возвращаем false и предотвращаем отправку формы
    }
}
</script>
<?
}
?>

<script type="text/javascript">
	//  удаление лишних пробел в .stat-header__time
	let text = $('.stat-header__time').html();
	text = text.replace(' &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;','');
	text = text.replace(' &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;','');
	$('.stat-header__time').html(text);
</script>

<script type="text/javascript">
$('.stat_top-form').hide();
$('.stat-header__time-btn').click(function(){
	if(counter % 2 == 0) {
		$('.stat_top-form').slideDown();
		counter++;
	} else {
		$('.stat_top-form').slideUp();
		counter++;
	}
});
</script>

