$(function() {

	var $d = $(document);

	var rUsd = Number($('#usd-rub').text()); //курс доллара к рублю
	var rEur = Number($('#eur-rub').text()); //курс евро к рублю
	var rCny = Number($('#cny-rub').text()); //курс юаня к рублю

	var inputNds = $('#nds-rate');					 //поле выбора НДС
	var inputCostD = $('#cost-delivery');		 //поле ввода стоимости доставки
	var inputCostC = $('#cost-customs');		 //поле ввода таможенной стоимости
	var inputDutyRate = $('#duty-rate');		 //поле ввода пошлины

	var customsDutiesField = $('#customs-duties-field'); //поле вывода "Таможенные сборы"
	var cocketField = $('#cocket-field');								 //поле вывода "Таможенная пошлина"
	var ndsField = $('#nds-field');											 //поле вывода "НДС "
	var resultField = $('#result-field');							   //поле вывода "Итог0"

	var calculateBtn = $('#calculate-btn');

	//запускаем функцию при клике на кнопку "посчитать"
	calculateBtn.click(function(){
		if(!inputCostD.val()) {
			inputCostD.addClass('active');
			return false;
		} else if(!inputCostC.val()) {
			inputCostC.addClass('active');
			return false;
		} else if(!inputDutyRate.val()) {
			inputDutyRate.addClass('active');
			return false;
		} else {
			inputCostD.removeClass('active');
			inputCostC.removeClass('active');
			inputDutyRate.removeClass('active');
			calc();
		}
	});

	function calc() {

		var ndsRate = Number(inputNds.val()); 	 //ставка НДС
		var costD = Number(inputCostD.val()) * currencyConverter($('#currency-delivery').val()); //стоимость доставки до границы РФ
		var costC = Number(inputCostC.val()) * currencyConverter($('#currency-customs').val()); //таможенная стоимость
		var dutyRate = Number(inputDutyRate.val()); //ставка пошлины

		var a = costC + costD;

		var customsDuty = 0; //таможенный сбор

		if(a <= 200000) {
			customsDuty = 375;
		} else if(a >= 200001 && a <= 450000) {
			customsDuty = 750;
		} else if(a >= 450001 && a <= 1200000) {
			customsDuty = 1500;
		} else if(a >= 1200001 && a <= 2500000) {
			customsDuty = 4125;
		} else if(a >= 2500001 && a <= 5000000) {
			customsDuty = 5625;
		} else if(a >= 5000001 && a <= 10000000) {
			customsDuty = 15000;
		} else if(a >= 10000001) {
			customsDuty = 22500;
		};

		var cocket = Math.round(a / 100 * dutyRate); //таможенная пошлина
		var ndsValue = Math.round((a + cocket) / 100 * ndsRate) //НДС
		var overallResult = customsDuty + cocket + ndsValue; //итоговая сумма

		//вывод результатов
		customsDutiesField.text(customsDuty.toLocaleString('ru-RU')); 	//Таможенные сборы
		cocketField.text(cocket.toLocaleString('ru-RU')); 							//Таможенная пошлина
		ndsField.text(ndsValue.toLocaleString('ru-RU'));								//НДС
		resultField.text(overallResult.toLocaleString('ru-RU'));				//итоговая сумма

	}

	function currencyConverter(value) {
		switch (value) {
		  case "rub":
		    return 1;
		    break;
		  case "usd":
		    return rUsd;
		    break;
		  case "eur":
		    return rEur;
		    break;
		  case "cny":
		    return rCny;
		    break;
		}
	}


});