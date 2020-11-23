<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', "woodbag" );


/** Имя пользователя MySQL */
define( 'DB_USER', "root" );


/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', "root" );


/** Имя сервера MySQL */
define( 'DB_HOST', "localhost" );


/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );


/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*n<rx<*BG+f~>hQocsK`arG|D|v.):Q@{|B%KD^h{^Qg91@|6$* }x5W=9C,yO#]' );

define( 'SECURE_AUTH_KEY',  '7))2h60A-T+$Py/6!g}.s[*?9{@lbcPIcqix9:WP1;N7yQ_M342kJlRnwn)_J$3A' );

define( 'LOGGED_IN_KEY',    '&>WCe$2oBgxX1EF.[DM,aSF7!<cE7x>wI~CT]G]Vk.b!srR@dAR,nM/q.I0f-Vew' );

define( 'NONCE_KEY',        'II.7osc[~r)@n4S5U-&!a-ZqP0~CZ2qlGgx>%,Sk|c0}_{f7azvaPgKz<zmoq*Nf' );

define( 'AUTH_SALT',        '3ktn ``FWb;9vr9ovq^W5>c7z81GN3b0Qsfjk|l?BfqCIFBY+&o$LX-Sh-;06qsH' );

define( 'SECURE_AUTH_SALT', 'Y0!iw,e&(d!(X_XB[v|8pj!Tn~H;p$A,0Ka7s/Bs4nh>B{SJ!A{fSr7H@7Q})b-R' );

define( 'LOGGED_IN_SALT',   ':8g+gAL!7VDxFECjF>`!qV*lj)u4o5p$zQ8LR!m5e01#O_nV&AlX6<e$.:e=Ms5L' );

define( 'NONCE_SALT',       '[/>;Dutw=`}WZn`9:M/ueK6;f B-J@r-8B,+e-vnmS>S4zgn/^S8p2{YT=$Vqh4z' );


/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';


/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
