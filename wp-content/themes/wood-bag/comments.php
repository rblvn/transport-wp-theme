<? 

$comment_send = 'ОСТАВИТЬ КОММЕНТАРИЙ';
$comment_reply = 'Оставьте свой комментарий';
$comment_reply_to = 'Ответить';
 
$comment_author = 'Введите ваше имя';
$comment_email = 'Введите вашу почту';
$comment_body = 'Введите ваш комментарий';
$comment_url = 'Сайт';
$comment_cookies_1 = ' By commenting you accept the';
$comment_cookies_2 = ' Privacy Policy';
 
//$comment_before = '<p class="comment-notes">Ваш email не будет опубликован.</p>';
 
$comment_cancel = 'Отменить ответ';

if ( is_user_logged_in() ) {
	$submit_button = '<div class="comment-form-btn">
	<input name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s" />
	</div>';
}
else { 	
	$submit_button = '<div class="comment-form-btn">
	<input name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s" />
	</div>';
}
 
//Array
$comments_args = array(
    //Define Fields
    'fields' => array(
        //Author field
        'author' => '<div class="comment-form-row"><p class="comment-form-author"><br /><input id="author" name="author" aria-required="true" placeholder="' . $comment_author .'"></input></p>',
        //Email Field
        'email' => '<p class="comment-form-email"><br /><input id="email" name="email" placeholder="' . $comment_email .'"></input><span class="form__email-notice">Ваш Email не будет опубликован</span></p></div>',
    ),
    // Change the title of send button
    'label_submit' => __( $comment_send ),
    // Change the title of the reply section
    'title_reply' => __( $comment_reply ),
    // Change the title of the reply section
    'title_reply_to' => __( $comment_reply_to ),
    //Cancel Reply Text
    'cancel_reply_link' => __( $comment_cancel ),
    // Redefine your own textarea (the comment body).
    'comment_field' => '<p class="comment-form-comment"><br /><textarea id="comment" name="comment" aria-required="true" placeholder="' . $comment_body .'"></textarea></p>',
    //Message Before Comment
    'comment_notes_before' => __( null),
    // Remove "Text or HTML to be displayed after the set of comment fields".
    'comment_notes_after' => '',
    //Submit Button ID
    'id_submit' => __( 'comment-submit' ),
	'submit_button' => __( $submit_button )
	

);
comment_form( $comments_args );

wp_list_comments( 'type=comment&callback=woodbag_comment' );