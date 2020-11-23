//Отправка для формы Нет времени читать
$(document).ready(function() {	
	$('#send-material').on('submit', (e) => {
		var response = grecaptcha.getResponse(feedbackCaptcha);
		e.preventDefault();
		let action = $(e.currentTarget).attr('action');
		let th = $(e.currentTarget);
		let btnSubmit = $(e.currentTarget).find('.submit');
		
		if (response.length != 0) {

		$.ajax({
			type: 'POST',
			url: action,
			data: th.serialize(),
			beforeSend: function(data){
			btnSubmit.removeClass('error');
        btnSubmit.addClass('sending');
      },
      success: function(data){
		  console.log(data);
      	btnSubmit.removeClass('sending error');
      	if(data == 'success'){
					btnSubmit.addClass('success');
					setTimeout(function() {
					btnSubmit.removeClass('success');
					th.trigger('reset');
					}, 3000);
				} else {
					console.log(data);
					btnSubmit.addClass('error');
					setTimeout(function() {
						btnSubmit.removeClass('error');
					}, 3000);
				}
			}
		});
		
		return false;
			
		}
		
		else {
			$('.feedback_captcha-error').css('display', 'block');
			return false;
		}
	});
});

//Отправка для остальных форм без рекаптчи

$(document).ready(function() {	
	$('.send-mail-js').on('submit', (e) => {
		e.preventDefault();
		let action = $(e.currentTarget).attr('action');
		let th = $(e.currentTarget);
		let btnSubmit = $(e.currentTarget).find('.submit');

		$.ajax({
			type: 'POST',
			url: action,
			data: th.serialize(),
			beforeSend: function(data){
			btnSubmit.removeClass('error');
        btnSubmit.addClass('sending');
      },
      success: function(data){
		  console.log(data);
      	btnSubmit.removeClass('sending error');
      	if(data == 'success'){
					btnSubmit.addClass('success');
					setTimeout(function() {
					btnSubmit.removeClass('success');
					th.trigger('reset');
					}, 3000);
				} else {
					console.log(data);
					btnSubmit.addClass('error');
					setTimeout(function() {
						btnSubmit.removeClass('error');
					}, 3000);
				}
			}
		});
		return false;
	});
});
