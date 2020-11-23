<?php

  $white_style = false;

  if ($_SERVER['REQUEST_URI'] == '/') {
    $home_link = "";
  } else {
    $home_link = "href='/'";
  }

  $pagesForForm = array(
    "about" => "О компании",
    "autsorsing-ved" => "Аутсорсинг ВЭД",
    "avia-dostavka" => "Авиа доставка",
    "avto-dostavka" => "Авто доставка",
    "contacts" => "Контакты",
    "export" => "Экспорт",
    "kargo" => "Карго доставка",
    "morskaya-dostavka" => "Морская доставка",
    "poisk-postavshchikov" => "Поиск товара",
    "projects" => "Проекты",
    "tamozhennoe-oformlenie" => "Таможенное оформление",
    "trucking" => "Грузоперевозки",
    "zhd-perevozka" => "Ж/д доставка",
    "organization-ved" => "Организация этапов ВЭД",
    "china-market"  => "Вывод на рынок Китая"
  );

  foreach ($pagesForForm as $pf => $tf) {
    if (strpos($_SERVER['REQUEST_URI'], $pf) !== false){
      $pageName = $tf;
      break;
    } else {
      $pageName = 'Главная';
    }
  }

  function isPage($page){
    if(strpos($_SERVER["REQUEST_URI"], $page) !== false){
      return true;
    } else {
      return false;
    }
  }

global $pageName;

if( is_front_page() ){
	 $pageName = "Главная";
}
else {
	 $pageName = wp_get_document_title();
}
 
?>



 <!DOCTYPE html>
 <html lang="ru">

 <head>
   <meta charset="utf-8">

  <meta name="description" content="">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width">

  <!-- Template Basic Images Start -->
  <meta property="og:image" content="path/to/image.jpg">
  <link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/wood-bag/img/favicon/apple-touch-icon-180x180-1.png">

  <!-- Custom Browsers Color Start -->
  <meta name="theme-color" content="#000">

  <?php wp_head() ?>
</head>

<body <?if ($white_style):?>class="white-style"<?endif;?>>

	<!-- content -->
	<div class="wrapper">

		<!-- header -->
		<header class="header">
			<div class="header-wrap">
				<div class="flex container">
<!-- 					<a href="<?php echo $base ?>" <?php /*echo $home_link*/ ?> class="logo"> -->
					<a href="https://wood-bag.ru/" <?php /*echo $home_link*/ ?> class="logo">
						<img src="/wp-content/themes/wood-bag/img/<?if ($white_style):?>black-logo.svg<?else:?>logo.svg<?endif;?>" alt="" class="rsp-img">
						<img src="/wp-content/themes/wood-bag/img/<?if ($white_style):?>black-logo-mobile.svg<?else:?>logo-mobile.svg<?endif;?>" alt="" class="rsp-img ismobile">
					</a>

					<div class="header-descr">
						Ваш деловой партнер в Китае. Работаем с 2010 года
					</div>

					<div class="flex-wrap email-phone header-socials__wrapper">
						<div class="email header-email__wrapper">
							<a href="mailto:contact@wood-bag.ru">contact@wood-bag.ru</a>
						</div>

						<div class="phone">
							<div class="phone-descr">Единый телефон в Китае</div>
							<a href="tel:+8617757420843">+86 17 757-420-843</a>
						</div>

            <div class="phone">
			  <div class="phone-inner__wrapper">
				<div class="flex-wrap df-social">
					<a href="https://wa.me/+79221867213" class="flex-aic-jusc df-social-link"><img src="/wp-content/themes/wood-bag/img/icon/whatsapp-c.svg" alt="" class="rsp-img"></a>
					<a href="tg://resolve?domain=woodbag" class="flex-aic-jusc df-social-link"><img src="/wp-content/themes/wood-bag/img/icon/telegram-c.svg" alt="" class="rsp-img"></a>
				</div>
				<div class="phone-inner__wrapper-tel">
					<div class="phone-descr">Бесплатный звонок по РФ</div>
					<a href="tel:88005558912">8 800 222-56-59</a>
				</div>
			  </div>
            </div>
					</div>
          
          <a href="mailto:contact@wood-bag.ru" class="s-red-bd-btn request-email-link"></a>
					<button data-fancybox data-src="#request-call" type="button" class="modal-btn s-red-bd-btn request-call-btn">Заказать звонок</button>
          <button data-fancybox data-src="#action-call" type="button" class="modal-btn s-red-bd-btn request-call-btn header-call-btn">Заказать звонок</button>

          <button type="button" class="menu-btn">
            <span class="lines"></span>
          </button>
        </div>
      </div>

      <div class="header-menu">
        <div class="container">
          <div class="flex-aic header-menu-wrap">
            <a href="<?php echo $base ?>" <?php /*echo $home_link*/ ?> class="logo">
              <img src="/wp-content/themes/wood-bag/img/<?if ($white_style):?>black-logo-w.svg<?else:?>logo-w.svg<?endif;?>" alt="" class="rsp-img">
            </a>
            <nav class="top-menu">
              <button type="button" class="menu-close"></button>
              <ul>
                <li><a class="active" href="/">Главная</a></li>
                <li class="dropdown">
                  <a>Услуги</a>
                  <div class="dropdown-menu">
                    <a href="organization-ved/">Все этапы ВЭД под ключ</a>
                    <a href="trucking/">Грузоперевозки</a>
                    <ul>
                      <li><a href="avto-dostavka/">Авто доставка</a></li>
                      <li><a href="avia-dostavka/">Авиа доставка</a></li>
                      <li><a href="zhd-perevozka/">Ж/д доставка</a></li>
                      <li><a href="morskaya-dostavka/">Морская доставка</a></li>
                      <li><a href="kargo/">Карго доставка</a></li>
                      <a href="export/">Экспорт грузов</a>
                    </ul>
                    <a href="tamozhennoe-oformlenie/">Таможенное оформление</a>
                    <a href="poisk-postavshchikov/">Бесплатный поиск товара</a>
                    <a href="autsorsing-ved/">Аутсорсинг ВЭД</a>
                    <a href="china-market/">Вывод продукции в Китай</a>
                  </div>
                </li>
                <li><a href="projects/">Проекты</a></li>
                <li><a href="about/">О компании</a></li>
				  <li><a href="blog/">Блог</a></li>
                <li><a href="contacts/">Контакты</a></li>
                <!--<li><a href="#">База знаний</a></li>-->
              </ul>

              <div class="top-menu-footer">
                <div class="phone">
                  <div class="phone-descr">Единый телефон в Китае</div>
                  <a href="tel:+8617757420843">+86 17 757-420-843</a>
                </div>

                <div class="phone">
                  <div class="phone-descr">Бесплатный звонок по РФ</div>
                  <a href="tel:88005558912">8 800 222-56-59</a>
                </div>
              </div>
            </nav>
          </div>
          
        </div>
      </div>

    </header>