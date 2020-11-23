(function (factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define(['jquery'], factory);
    } else if (typeof exports === 'object') {
        // Node/CommonJS style for Browserify
        module.exports = factory;
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function ($) {

    var $d = $(document);
    var select_field = $('.select-field');
    var all_select_field_value = $('.select-field-value');

    //закрываем выпадающие списки по клику на рабочий документ
    $d.on('click', function (e) {
        if (!select_field.is(e.target) && select_field.has(e.target).length === 0) {
            select_field.removeClass('active');
        }
    });

    var methods = {
        init: function(options) {
            options = $.extend({
              showItems : 6, //количество показываемых значений списка в цифрах (6 - по умолчанию)
            }, options);
            return this.each(function(){

                var $this = $(this);
                var select_value_default = $this.find('input.selected-value.default'); //поле значение списка по умолчанию
                var select_value = $this.find('input.selected-value'); //поле значение списка
                var this_value = select_value.val(); //значение списка
                var select_field_value = $this.find('.select-field-value'); //поле вывода выбранного значения
                var select_list = $this.find('.select-list'); //список значений
                var select_list_item = $this.find('.select-list .item'); //елемент списка
                var selected_list_item = $this.find('.select-list .item.selected'); //выбранный елемент списка

                var select_value_name = select_value_default.attr('name'); //имя поля значения списка по умолчанию

                //console.log(select_value_name);

                //открываем/закрываем выпадающий список по клику на поле
                select_field_value.click(function(){
                    if ($this.hasClass('active')) {
                        select_field.removeClass('active');
                    } else {
                        select_field.removeClass('active');
                        $this.addClass('active');
                    }

                    if (options.showItems > 0) {
                        select_list.css('max-height', select_list_item.outerHeight() * options.showItems);
                    }
                });

                //если список с множественным выбором
                if ($this.hasClass('multiple')) {
                    var array_value = select_value.map(function(){
                      return this.getAttribute("value");
                    }).get();

                    var first_selected = true;

                    //console.log(array_value.length);

                    //перебираем все элементы списка и задаем соответствующие значения
                    select_list_item.each(function(){
                        var $th_item = $(this);
                        var th_value = $th_item.data('value');
                        var th_html = $th_item.html();

                        jQuery.each( array_value, function( i, value ) {
                            if (th_value == value) {

                                $th_item.addClass('selected');

                                if (first_selected) {
                                    select_field_value.html(th_html);
                                    first_selected = false;
                                }
                            }
                        });
                        
                    });

                    function reloadSelectedValue() {
                        select_list_item.each(function(){
                            var $th_item = $(this);
                            var th_value = $th_item.data('value');
                            var th_html = $th_item.html();

                            if ($th_item.hasClass('selected')) {
                                select_field_value.html(th_html);
                                return false;
                            } else {
                                select_field_value.html('');
                            }
                            
                        });
                    }

                    //выбираем елемент списка
                    select_list_item.click(function(){
                        var $th_item = $(this);
                        var th_value = $th_item.data('value');
                        var th_html = $th_item.html();

                        if ($th_item.hasClass('selected')) {
                            $th_item.removeClass('selected');
                            $this.find('input.selected-value:not(.default)').each(function(){
                                var $th_value = $(this);

                                if ($th_value.val() == th_value) {
                                    $th_value.remove();
                                }
                            });
                        } else {
                            $th_item.addClass('selected');
                            $this.prepend('<input type="hidden" name="' + select_value_name + '" class="selected-value" value="' + th_value + '">');
                        }

                        reloadSelectedValue();
                    });

                } else {
                    select_value.on('change paste', function() {
                        this_value = select_value.val();
                        reloadSelect();
                    });
                    //перебираем все элементы списка и задаем соответствующие значения
                    function reloadSelect() {
                        select_list_item.each(function(){
                            var $th_item = $(this);
                            var th_value = $th_item.data('value');
                            var th_html = $th_item.html();

                            //console.log(th_value);

                            //если поле значение не пустое и оно совпадает со значением елемента списка
                            if (this_value && this_value == th_value) {
                                select_list_item.removeClass('selected');
                                $th_item.addClass('selected');
                                select_field_value.html(th_html);
                                select_value.val(th_value);
                                return false;
                            } else if ($th_item.hasClass('selected')) {
                                select_value.val(th_value);
                                select_field_value.html(th_html);
                            }
                        });
                    }reloadSelect();
                    

                    //выбираем елемент списка
                    select_list_item.click(function(){
                        var $th_item = $(this);
                        var th_value = $th_item.data('value');
                        var th_html = $th_item.html();

                        select_list_item.removeClass('selected');
                        $th_item.addClass('selected');
                        select_value.val(th_value);
                        select_field_value.html(th_html);
                        select_field.removeClass('active');
                        
                    });
                }
            });
        }
    };

    $.fn.selectField = function(action) {
        if (methods[action]) {
            return methods[action].apply(this, Array.prototype.slice.call( arguments, 1));
        } else if (typeof action === 'object' || !action) {
            return methods.init.apply(this, arguments);
        } else {
            $.error('Метод с именем ' +  action + ' не существует для $.modal');
        }
    }

}));