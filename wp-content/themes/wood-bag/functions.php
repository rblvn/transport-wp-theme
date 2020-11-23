<?php

//require_once ('mail.php');

//добавляем атрибуты integrity и crossorigin
function add_font_awesome_cdn_attributes( $html, $handle ) {
    if ( 'FontAwesome' === $handle ) {
        return str_replace( "media='all'", "media='all' integrity='sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN' crossorigin='anonymous'", $html );
    }
    return $html;
}

add_filter( 'style_loader_tag', 'add_font_awesome_cdn_attributes', 10, 2 );

add_action('wp_enqueue_scripts', 'woodbag_assets');

function woodbag_assets() {

	//главный css файл
	wp_enqueue_style('maincss', get_template_directory_uri().'/css/main.css');

	//регистрируем font awesome
	wp_register_style('FontAwesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), null, 'all' );

	wp_enqueue_style('FontAwesome');
	
	wp_enqueue_script('googlemaps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyD3Eu6mrK0SwjyuQS8DL-yRkrnQpqVizik', false, null, true );
	
	wp_deregister_script( 'jquery' );
	
	wp_register_script( 'jquery', get_template_directory_uri() . "/libs/jquery/jquery.min.js", false, null, true );
	
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script('fancybox', get_template_directory_uri() . '/libs/fancybox/fancybox.min.js', false, null, true );
	
	wp_enqueue_script('slick', get_template_directory_uri() . '/libs/slick/slick.min.js', false, null, true );
	
	wp_enqueue_script('inputmask', get_template_directory_uri() . '/libs/inputmask/inputmask.min.js', false, null, true );
	
	wp_enqueue_script('selectfield', get_template_directory_uri() . '/libs/selectfield/selectfield.min.js', false, null, true );
	
	wp_enqueue_script('commonjs', get_template_directory_uri() . '/js/common.js', false, null, true );
	
	wp_enqueue_script('mapjs', get_template_directory_uri() . '/js/map.js', false, null, true );
	
	wp_enqueue_script('calculator', get_template_directory_uri() . '/js/calculator.min.js', false, null, true );
	
	wp_enqueue_script('sendmail', get_template_directory_uri() . '/js/send-mail.js', false, null, true );
	
	if ( is_single() ) {
		
		wp_enqueue_style('blogcss', get_template_directory_uri().'/css/blog.css');
		
		//wp_enqueue_script('recaptcha', 'https://www.google.com/recaptcha/api.js');
		
		wp_enqueue_script('recaptcha-callback', "https://www.google.com/recaptcha/api.js?onload=recaptchaCallback&render=explicit");
		
		wp_enqueue_script('validate', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js', false, null, true );
 
	}

}

add_filter( 'upload_mimes', 'svg_upload_allow' );

// Разрешаем загрузку svg
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

//Добавляем изображения записи
add_theme_support( 'post-thumbnails' ); // для всех типов постов

//Фильтр для вывода ссылки Читать дальше в конце отрывка
// add_filter( 'excerpt_more', 'new_excerpt_more' );
// function new_excerpt_more( $more ){
// 	global $post;
// 	return '<a href="'. get_permalink($post) . '">Читать дальше...</a>';
// }


//Максимальное количество символов в цитате		   
function the_excerpt_max_charlength( $charlength ){
	global $post;
	$excerpt = get_the_excerpt();
	$charlength++;

	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			echo mb_substr( $subex, 0, $excut );
		} else {
			echo $subex;
		}
		echo '<a href="'. get_permalink($post) . '">...</a>';
	} else {
		echo $excerpt;
	}
}
	

//Выведем категории для указанного поста (только в цикле)
function get_post_categories(){
	foreach ( get_the_category() as $category ) {
		printf(
			'<a href="%s" class="hashtags-item">%s</a>', // Шаблон вывода ссылки
			esc_url( get_category_link( $category ) ), // Ссылка на рубрику
			esc_html( '#' . $category->name ) // Название рубрики
		);
	}
}

//Пагинация на странице категорий
add_action( 'pre_get_posts', 'pagination_category' );
function pagination_category( $query ) {
	if ( $query->is_category() && $query->is_main_query() ) {
		$query->set( 'posts_per_page', '8' );
	}
}

//Убираем 1 запись для результатов на странице блога
add_action( 'pre_get_posts', 'remove_last_post' );
function remove_last_post( $query ) {
	if ( $query->is_posts_page() && $query->is_main_query() ) {
		$query->set( 'offset', '1' );
	}
}

//Чистая пагинация 
function clean_pagination() {
$args = array(
	'show_all'     => true,
	'prev_next'    => true,
	'prev_text'    => __('НАЗАД'),
	'next_text'    => __('ВПЕРЕД'),
	'screen_reader_text' => __('A'),
);
$nav = get_the_posts_pagination($args);
$nav = str_replace('<h2 class="screen-reader-text">A</h2>', '', $nav);
return $nav;
}

//Отступ в запросе
add_action('pre_get_posts', 'myprefix_query_offset', 1 );
function myprefix_query_offset(&$query) {
	// проверим что это нужный нам запрос...
	if ( ! $query->is_posts_page ) {
		return;
	}

	// определим нужный нам отступ...
	$offset = 1;

	// определим сколько постов на странице мы будет выводить (получим данные из настроек)
	$ppp = get_option('posts_per_page');

	// если это страница пагинации...
	if ( $query->is_paged ) {

		// вычислим отступ на странице пагинации (offset + текущая страница (минус один) x количество постов на странице)
		$page_offset = $offset + ( ($query->query_vars['paged']-1) * $ppp );

		// применим вычисленный отступ (offset)
		$query->set('offset', $page_offset );

	}
	else // если это не страница пагинации (первая страница)
	{

		// используем только отступ (offset)...
		$query->set('offset',$offset);

	}
}

//Функция для подсчета оставшегося времени
function estimated_reading_time(){
	$post = get_post();
	$postcnt = strip_tags( $post->post_content );
	$words = count(preg_split('/\s+/', $postcnt));
	$minutes = floor( $words / 120 );
	$seconds = floor( $words % 120 / ( 120 / 60 ) );
	if (1 <= $minutes){$estimated_time = $minutes . ' мин';}
	else{$estimated_time = $seconds . ' сек';}
	echo $estimated_time;
}

// Комментарии
function woodbag_comment($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }?>
    <<?php echo $tag; ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>"><?php 
    if ( 'div' != $args['style'] ) { ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body"><?php
    } ?>
        
		<div class = "comment-autor-meta">
			<div class="comment-author vcard"><?php 
				if ( $args['avatar_size'] != 0 ) {
					echo get_avatar( $comment, $args['avatar_size'] ); 
				} 
				printf( __( '<cite class="fn">%s</cite>' ), get_comment_author_link() ); ?>
				</div><?php 
			if ( $comment->comment_approved == '0' ) { ?>
				<em class="comment-awaiting-moderation"><?php _e( 'Ваш комментарий ожидает модерации.' ); ?></em><br/><?php 
			} ?>
			<div class="comment-meta commentmetadata">
				<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>"><?php
					/* translators: 1: date, 2: time */
					printf( 
						__('%1$s, %2$s'), 
						get_comment_date(),  
						get_comment_time()
					); ?>
				</a><?php 
				edit_comment_link( __( '(Edit)' ), '  ', '' ); ?>
			</div>
		</div>
 
        <?php comment_text(); ?>
 
        <div class="reply"><?php 
                comment_reply_link( 
                    array_merge( 
                        $args, 
                        array( 
                            'add_below' => $add_below, 
                            'depth'     => $depth, 
                            'max_depth' => $args['max_depth'] 
                        ) 
                    ) 
                ); ?>
        </div><?php 
    if ( 'div' != $args['style'] ) : ?>
        </div><?php 
    endif;
}



// Фильтр удаляет название сайта в конце заголовка (для функции wp_get_document_title())
add_filter( 'document_title_parts', function( $parts ){

	if( isset($parts['site']) ) unset($parts['site']);

	return $parts;
});

// Валидация формы
function comment_validation_init() {
	if(is_single() && comments_open() ) { ?>        
	  <script type="text/javascript">
		jQuery(document).ready(function($) {
		  $('#commentform').validate({
			  rules: {
				  author: {
					  required: true,
					  minlength: 2
				  },
  
				  email: {
					  required: true,
					  email: true
				  },
  
				  comment: {
					  required: true,
					  minlength: 3
				  },
			  },
  
			  messages: {
				  author: "Пожалуйста, введите имя.",
				  email: "Пожалуйста, введите правильный email.",
				  comment: "Пожалуйста, напишите комментарий.",
			  },
  
			  errorElement: "div",
			  errorPlacement: function(error, element) {
				  element.after(error);
			  }
  
		  });
	  });    
	  jQuery(document).ready(function($) {
		  $('#send-material').validate({
			  rules: {
				  user_name: {
					  required: true,
					  minlength: 2
				  },
  
				  user_email: {
					  required: true,
					  email: true
				  },
			  },
  
			  messages: {
				  user_name: "Пожалуйста, введите имя.",
				  user_email: "Пожалуйста, введите правильный email.",
			  },
			  
			  errorElement: "div",
			  errorPlacement: function(error, element) {
				  element.after(error);
			  },
			    
// 			  invalidHandler: function(event, validator) {
// 				  ($("#user_name").val = "" || $("#user_email").val = "") ? alert('evthing is bad') : alert('evthing is ok');
// 			  },
  
		  });
	  });   
	  </script>
	  <?php
	  }
  }
  add_action('wp_footer', 'comment_validation_init', 100);


// Добавляем каптчу перед кнопкой и политику конфиденциальности после кнопки submit в комментериях

function add_google_recaptcha($submit_field) {
    $submit_field['submit_field'] = '<div class = "submit-row"><div class="comment_captcha-wrapper"><div id="comment_captcha"></div><div class="comment_captcha-error">Пройдите капчу
</div></div><br>' . $submit_field['submit_field'] . "</div><div class = 'policy'>Нажимая на кнопку, вы даете согласие на обработку своих <a href = '/wp-content/uploads/2020/11/Политика-конфиденциальности-wood-bag.docx'>персональных данных</a></div>";
    return $submit_field;
}
if (!is_user_logged_in()) {
    add_filter('comment_form_defaults','add_google_recaptcha');
}
 
/**
 * Защита рекаптчи от ботов
 */
function is_valid_captcha($captcha) {
$captcha_postdata = http_build_query(array(
                            'secret' => '6LedDuUZAAAAAP_ezRC1-5sMG0tJEX4Y2Jp9QVEf',
                            'response' => $captcha,
                            'remoteip' => $_SERVER['REMOTE_ADDR']));
$captcha_opts = array('http' => array(
                      'method'  => 'POST',
                      'header'  => 'Content-type: application/x-www-form-urlencoded',
                      'content' => $captcha_postdata));
$captcha_context  = stream_context_create($captcha_opts);
$captcha_response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify" , false , $captcha_context), true);
if ($captcha_response['success'])
    return true;
else
    return false;
}
 
// Верификация рекапчти на стороне сервера, защита от ботов
function verify_google_recaptcha() {
$recaptcha = $_POST['g-recaptcha-response'];
if (empty($recaptcha))
    wp_die( __("<b>Ошибка Recaptcha: Введите Recaptcha!</b><p><a href='javascript:history.back()'>« Back</a></p>"));
else if (!is_valid_captcha($recaptcha))
    wp_die( __("<b>Ошибка Recaptcha: Введите Recaptcha корректно!</b>"));
}
if (!is_user_logged_in()) {
    add_action('pre_comment_on_post', 'verify_google_recaptcha');
}


// На странице поиска только записи (посты)
function SearchFilter($query) {
  if ($query->is_search) {
    $query->set('post_type', 'post');
  }
  return $query;
}
add_filter('pre_get_posts','SearchFilter');

// Отправка писем
add_action('wp_ajax_callback_mail', 'callback_mail');
add_action('wp_ajax_nopriv_callback_mail', 'callback_mail');


//Отправка всех форм на сайте, кроме формы отправки контента записи

function callback_mail(){
	
	$user_email = trim($_POST["user_email"]);
	
	$form_name = trim($_POST["form-name"]);
	
	$user_name = trim($_POST["user_name"]);
	
	if ($form_name == "Нет времени читать") {
		
		$page_name = trim($_POST["page-name"]);
		
		$current_id = trim($_POST["post_id"]);
		
		$message = '<b>' . get_the_title( $current_id ) . '</b>' . get_the_content( null, false, $current_id );
		
		apply_filters( 'the_content_feed', $message);
		
		$fn = ABSPATH . '/mailsent.txt'; 
		$fp = fopen($fn, 'a');
		fputs($fp, date('[m.d.y]') . " Получатель: " . $user_name . " " . $user_email . " со статьи: " . get_the_title( $current_id ) . "\n");
		fclose($fp);
		
		$to = $user_email;

		$subject = $page_name . " – WoodBag";

		remove_all_filters('wp_mail_form');
		
		remove_all_filters('wp_mail_form_name');

		$headers = array(
		'From: <admin@wood-bag.ru>',
		'content-type: text/html',
		);

		wp_mail($to, $subject, $message, $headers);

		wp_die('success');
		
	}
	
	else {
	
	$phone = $_POST["phone"];
	$page_name = $_POST["page-name"];
	$user_name = $_POST["user_name"];
	$user_email = $_POST["user_email"];
	
	$arr = [
	"Телефон" => trim($phone),
	"Email" => trim($user_email),
	"Имя" => trim($user_name),
	"Форма" => trim($form_name),
	"Страница" => trim($page_name)
	];

	$isExtraStyle = true;
	
	$message = "<table cellpadding='8' style='width: 100%;border-collapse: separate;border-spacing: 2px;font-size: 16px;'>";

	foreach ($arr as $key => $value) {
		$extraStyle = $isExtraStyle ? "background-color: #f2f2f2;" : "";
	  if($value){
		$message .= "
			<tr style='".$extraStyle."'>".
					"<td style='border: 1px solid #ddd;'>"."<b>".$key."</b>"."</td>".
					"<td style='border: 1px solid #ddd;'>".$value."</td>".
				"</tr>";
			$isExtraStyle = !$isExtraStyle;
	  } else {
		continue;
	  }
	}

	$message .= "</table>";
	$to = "request@wood-bag.ru";
	$subject = $form_name;
	
	remove_all_filters('wp_mail_form');
	remove_all_filters('wp_mail_form_name');
	
	$headers = array(
	'From: <admin@wood-bag.ru>',
	'content-type: text/html',
	);
	
	wp_mail($to, $subject, $message, $headers);
	
	wp_die('success');
		
	}


}


// Отладка WP Mail в файл mail.log
add_action('wp_mail_failed', 'log_mailer_errors', 10, 1);
function log_mailer_errors( $wp_error ){
  $fn = ABSPATH . '/mail.log'; 
  $fp = fopen($fn, 'a');
  fputs($fp, "Mailer Error: " . $wp_error->get_error_message() ."\n");
  fclose($fp);
}
