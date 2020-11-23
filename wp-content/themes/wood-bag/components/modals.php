<? global $pageName; ?>

<!-- request call -->

<form id="request-call" action="<? echo admin_url('admin-ajax.php?action=callback_mail')?>" class="form form-modal form-request-call send-mail-js">
	<div class="form-title">Закажите<br> обратный звонок</div>
	<div class="form-subtitle">Мы свяжемся с вами<br> через несколько минут</div>

	<input type="tel" name="phone" placeholder="Введите номер телефона" required>

	<input type="hidden" name="form-name" value="Заказать звонок">
	<input type="hidden" name="page-name" value="<?php echo $pageName ?>">

	<button type="submit" class="b-red-btn submit">Заказать звонок</button>

	<div class="policy-link">
		Нажимая на кнопку «Заказать звонок», вы принимаете условия <a href="/wp-content/themes/wood-bag/documents/Политика конфиденциальности (wood-bag).docx">Политики конфиденциальности</a>
	</div>
</form>

<!-- call -->
<div id="action-call" class="form form-modal action-call">
	<div class="form-title">Обратная связь</div>
	<div class="form-subtitle">Позвоните нам или напишите</div>
	<div class="form-call-wrap">
		<a href="tel: 88002225659" class="b-red-btn action-call-btn">Позвонить <img src="/wp-content/themes/wood-bag/img/icon/phone.svg" alt="" class="rsp-img"></a>
		<a href="https://wa.me/+79221867213" class="b-green-btn action-call-btn">Whatsapp <img src="/wp-content/themes/wood-bag/img/icon/whatsapp.svg" alt="" class="rsp-img"></a>
		<a href="tg://resolve?domain=woodbag" class="b-blue-btn action-call-btn">Telegram <img src="/wp-content/themes/wood-bag/img/icon/telegram.svg" alt="" class="rsp-img"></a>
	</div>
</div>

<!-- get consultation -->
<form id="get-consultation" action="<? echo admin_url('admin-ajax.php?action=callback_mail')?>" class="send-mail-js form form-modal form-request-call">
	<div class="form-title">Получить бесплатную консультацию</div>
	<div class="form-subtitle">Мы свяжемся с вами<br> через несколько минут</div>

	<input type="tel" name="phone" placeholder="Введите номер телефона" required>

	<input type="hidden" name="form-name" value="Получить бесплатную консультацию">
	<input type="hidden" name="page-name" value="<?php echo $pageName ?>">

	<button type="submit" class="b-red-btn submit">Заказать звонок</button>

	<div class="policy-link">
		Нажимая на кнопку «Заказать звонок», вы принимаете условия <a href="documents/Политика конфиденциальности (wood-bag).docx">Политики конфиденциальности</a>
	</div>
</form>

<!-- organization stage info -->
<div id="organizationVedStageInfo" class="modal-stage">
	<div class="flex-wrap modal-stage-inner">
		<div data-vedStage="preview" class="modal-stage-preview bg-i" style="background-image: url(/wp-content/themes/wood-bag/img/stages/1.jpg);"></div>
		<div class="modal-stage-wrap">
			<div data-vedStage="title" class="modal-stage-title"></div>
			<div data-vedStage="descr" class="modal-stage-descr"></div>
		</div>
	</div>
</div>