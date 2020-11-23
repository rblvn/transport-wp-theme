<form action="<? echo admin_url('admin-ajax.php?action=callback_mail')?>" class="form form-calculation send-mail-js">
	<div class="form-calculation-subtitle">Получите бесплатный расчет стоимости<br> и подробную консультацию менеджера</div>

	<div class="flex-wrap fields">
		<input type="tel" name="phone" placeholder="Введите номер телефона" required>
		<input type="hidden" name="form-name" value="Получите бесплатный расчет стоимости и подробную консультацию менеджера">
		<input type="hidden" name="page-name" value="<?php echo wp_get_document_title(); ?>">
		<button type="submit" class="b-red-btn submit">Получить лучшие цены</button>
	</div>
</form>