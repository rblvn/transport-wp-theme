$('#form').submit(function() {
    if ($.trim($("#email").val()) === "" || $.trim($("#author").val()) === "") {
        alert('you did not fill out one of the fields');
        return false;
    }
});

$(function() {

	var $d = $(document);
  var $w = $(window);
  var wndWidth = $w.width();
  var wndHeight = $w.height();
  let orientation = 'horizontal';
  let isResized = false;

  function checkOrientation(){
  	wndWidth > wndHeight ? orientation = 'horizontal' : orientation = 'vertical';
  }
  checkOrientation();

  //падсвечиваем меню
  var top_menu = ['projects/', 'about/', 'contacts/', 'knowledge-base/', 'trucking/', 'avto-dostavka/', 'avia-dostavka/', 'knowledge-base/', 'zhd-perevozka/', 'morskaya-dostavka/', 'export/', 'autsorsing-ved/', 'poisk-postavshchikov/', 'tamozhennoe-oformlenie/', 'kargo/', 'organization-ved/', 'china-market/'];
  var cur_url = document.location.href;

  $.each(top_menu, function(i, value) {
    if (cur_url.indexOf(value)+1) {
      $('.top-menu a').removeClass('active');
      $('.top-menu a').each(function(){
        if ($(this).attr('href') == value) {
          $(this).addClass('active');

          if ($(this).closest('.dropdown')) {
            $(this).closest('.dropdown').find('a').first().addClass('active');
          }
          return false;
        }
      });
    }
  });

	//модальное окно
  $('[data-fancybox]').fancybox({
    touch: false,
    loop: true,
    mobile: {
			touch: true,
    	clickSlide: 'close'
    },
    afterLoad: function(instance, current){
    	const trigger = instance.$trigger;
      if(trigger){
        const isClientsCarousel = trigger.closest('.clients-carousel').length > 0;
        if(isClientsCarousel){
          changeClients(instance.currIndex);
        }
      }
    }
  });

  //модальное окно детального описания этапов ВЭД
  $('[data-vedStage="btn"]').fancybox({
    touch: false,
    loop: true,
    beforeShow : function(instance, current) {
      const vedStage = current.opts.$orig.closest('[data-vedStage="item"]');
      const vedStagePreview = vedStage.find('[data-vedStage="preview"]').css('background-image');
      const vedStageTitle = vedStage.find('[data-vedStage="title"]').html();
      const vedStageDescr = vedStage.find('[data-vedStage="descr"]').html();
      
      const vedStageModal = $(current.src);
      const vedStageModalPreview = vedStageModal.find('[data-vedStage="preview"]');
      const vedStageModalTitle = vedStageModal.find('[data-vedStage="title"]');
      const vedStageModalDescr = vedStageModal.find('[data-vedStage="descr"]');

      vedStageModalPreview.css('background-image', vedStagePreview);
      vedStageModalTitle.html(vedStageTitle);
      vedStageModalDescr.html(vedStageDescr);
    }
  });

  //слайдер сотрудников
  var $leadersCarousel = $('.leaders-carousel');

  $leadersCarousel.slick({
    fade: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    adaptiveHeight: true
  });

  $leadersCarousel.on('beforeChange', function(event, slick, currentSlide, nextSlide){
  	if(wndWidth <= 991){
  		scrollToLeader();
  	}
  });

  //переключаем сотрудников
  $d.on('click', '.leaders-list .item-list .person', function() {
    var leaderIndex = $(this).data('index');
    $('.leaders-carousel').slick('slickGoTo', leaderIndex);
  });

  function scrollToLeader(){
  	$('html, body').animate({
      scrollTop: $leadersCarousel.offset().top - 70
    }, 700);
  }

  //слайдер офисов
  $('.office-carousel').slick({
    slidesToShow: 1,
    slidesToScroll: 1
  });

  var $slides_counter = $('.clients-carousel .item-nav-counter');
  var $clients_carousel = $('.clients-carousel');
  var $clients_logo_carousel = $('.clients-logo-carousel');

  //переключатель слайдов в цифрах
  $clients_carousel.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
    var i = (currentSlide ? currentSlide : 0) + 1;
    $slides_counter.html(i + ' из ' + slick.slideCount);
  });

  $clients_logo_carousel.slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    focusOnSelect: true,
    centerMode: true,
    asNavFor: $clients_carousel,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });

	//слайдер клиентов
  $clients_carousel.slick({
    fade: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    adaptiveHeight: true,
    prevArrow: $('.clients-carousel .item-nav-prev-btn'),
    nextArrow: $('.clients-carousel .item-nav-next-btn'),
    asNavFor: $clients_logo_carousel
  });

  $clients_logo_carousel.slick('slickGoTo', 2);

  function changeClients(index){
  	$clients_carousel.slick('slickGoTo', index);
  }

  //слайдер процесса запуска продаж
  var $marketLaunchProcessSteps = $('[data-carousel="marketLaunchProcessSteps"]');
  var $marketLaunchProcessInfo = $('[data-cariosel="marketLaunchProcessInfo"]');

  $marketLaunchProcessSteps.slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    focusOnSelect: true,
    infinite: false,
    asNavFor: $marketLaunchProcessInfo,
    arrows: false,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          arrows: true
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          arrows: true
        }
      }
    ]
  });

  $marketLaunchProcessInfo.slick({
    fade: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    adaptiveHeight: true,
    asNavFor: $marketLaunchProcessSteps,
    arrows: false
  });

  $marketLaunchProcessSteps.on('afterChange', function(event, slick, currentSlide, nextSlide){
    scrollToLaunchProcessInfo();
  });

  function scrollToLaunchProcessInfo(){
    const curr = $('[data-cariosel="marketLaunchProcessInfo"] .item.slick-current');
    const currHeight = curr.outerHeight();
    const currTop = curr.offset().top;
    wndHeight = $w.height();
    if(wndWidth >= 768 && !isResized){
      $('html, body').animate({
        scrollTop: currTop + currHeight + 20 - wndHeight
      }, 700);
    } else {
    	isResized = false;
    }
  }

  //отключаем событие при клике на галерею
  $d.on('click', '.office-gallery-ru, .office-gallery-ch', function(e) {
    e.preventDefault();
  });

  $('.select-field').selectField({
    showItems: 6 
  });

  //маска для телефона
  $('input[type="tel"]').inputmask({
    mask: '+7 (999) 999-99-99',
    showMaskOnHover: false,
    onincomplete: function(){
      $(this).val('').trigger('change');
    }
  });

  //переключение табов
  $d.on("click", ".tab:not(.active)", function() {
    $(this)
    .addClass("active")
    .siblings().removeClass("active")
    .closest(".tab-wrap")
    .find(".tab-content")
    .removeClass("active").eq($(this).index()).addClass("active");

    if($(this).closest('.contacts')) {
      $('.office-carousel').slick('setPosition');
    }
  });

  //переключение внутренних табов
  $d.on("click", ".tab-inner:not(.active)", function() {
    $(this)
    .addClass("active")
    .siblings().removeClass("active")
    .closest(".tab-wrap-inner")
    .find(".tab-content-inner")
    .removeClass("active").eq($(this).index()).addClass("active");
  });

  //скрываем/открываем меню
  $d.on('click', '.menu-btn, .menu-close', function() {
    $('.top-menu, .menu-btn').toggleClass('active');
    return false;
  });

  //скрываем меню по клику на документ
  $d.on('click', 'body', function (e) {
    var hidden_item = $('.top-menu');
    if (!hidden_item.is(e.target) && hidden_item.has(e.target).length === 0) {
      $('.top-menu, .menu-btn').removeClass('active');
    }
  });

  //Скрываем/раскрываем задачи/речения в "клиентах"
  function readReview(){
    var revText = $('.clients-carousel .item-reader-js');
    var revMoreBtn = $('.clients-carousel .item-read-more');
    var revHeight = 110;

    revText.each(function(){
      var $this = $(this);
      var revParent = $this.parent();
      var revCurHeight = $this.outerHeight();

      if(revCurHeight > revHeight) {
        revParent.addClass('active');
      }
    });

    revMoreBtn.click(function() {
      $(this).parent().removeClass('active');
      $clients_carousel.slick('setPosition');
    });
  }readReview();

  //показываем миниатюру новости
  if(wndWidth >= 992){
    $d.on('mouseenter', '[data-media-link]', function(e) {
      const newsPreview = $(this).find('.item-link-preview');
      newsPreview.fadeIn(100);
      setMediaNewsPreviewPosition(newsPreview, e);
    });

    $d.on('mousemove', '[data-media-link]', function(e) {
      const newsPreview = $(this).find('.item-link-preview');
      setMediaNewsPreviewPosition(newsPreview, e);
    });

    $d.on('mouseleave', '[data-media-link]', function(e) {
      const newsPreview = $(this).find('.item-link-preview');
      newsPreview.fadeOut(100);
    });

    $d.on('click', '[data-media-link]', function(e) {
      const newsPreview = $(this).find('.item-link-preview');
      newsPreview.hide();
    });
  }

  function setMediaNewsPreviewPosition(newsPreview, e){
    newsPreview.css({
      top: e.clientY,
      left: e.clientX
    });
  }

  //Проигрываем видео
  if($('#about-us-video').length) {
    $('#about-us-video').get(0).play();
  };

  //прикрепляем меню при скролле
  function scrollHeader() {
    if (wndWidth >= 768) {
      if ($(this).scrollTop() > $('.header-wrap').outerHeight()) {
        $('.header-menu').addClass('active');
		$('.progress-container').addClass('display-block');
      } else {
        $('.header-menu').removeClass('active');
		$('.progress-container').removeClass('display-block');
      };
    } else {
      $('.header-menu').removeClass('active');
	  $('.progress-container').removeClass('display-block');
      if ($(this).scrollTop() > 0) {
        $('.header').addClass('active');
		$('.progress-container').addClass('display-block');
      } else {
        $('.header').removeClass('active');
		$('.progress-container').removeClass('display-block');
      };
    }
    
  };
  scrollHeader();

  $(window).scroll(function(){
    scrollHeader();
  });

  $(window).resize(function(){
  	wndWidth = $w.width();
  	wndHeight = $w.height();

  	checkOrientation();
  	isResized = true;
    scrollHeader();
  });

});


$(document).ready(function(){

    $(window).scroll(function(){
        if ($(this).scrollTop() > 1000) {
            $('#scrollToTop').css('opacity', '1');
        } else {
            $('#scrollToTop').css('opacity', '0');
        }
        });
          
        $('#scrollToTop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 700);
        return false;
    });
  });

// recaptcha

var feedbackCaptcha;
var authCaptcha;

function recaptchaCallback() {
  feedbackCaptcha = grecaptcha.render('feedback_captcha', {
    'sitekey' : '6LedDuUZAAAAAChMthaNEW4MfEVny34G-m7BhoP0',
  });
  
  commentCaptcha = grecaptcha.render('comment_captcha', {
    'sitekey' : '6LedDuUZAAAAAChMthaNEW4MfEVny34G-m7BhoP0'
  });
}

//  удаление лишних пробел в .stat-header__time

// let text = $('.stat-header__time').html();
// text = text.replace(' &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;','');
// text = text.replace(' &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;','');
// $('.stat-header__time').html(text);


// открытие "Отправим материал вам на почту" по клику

let counter = 0;



