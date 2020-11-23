//Старая Валидация формы
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
				  captcha_code: {
					  required: true
				  }
			  },
  
			  messages: {
				  author: "Пожалуйста, введите имя.",
				  email: "Пожалуйста, введите правильный email.",
				  comment: "Пожалуйста, напишите комментарий.",
				  captcha_code: "Введите код каптчи корректно."
			  },
  
			  errorElement: "div",
			  errorPlacement: function(error, element) {
				  element.after(error);
			  }
  
		  });
	  });    
	  </script>
	  <?php
	  }
  }
  add_action('wp_footer', 'comment_validation_init', 100);
