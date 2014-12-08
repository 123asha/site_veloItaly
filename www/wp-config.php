<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'veloitaly');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'xGYmG||[v+do*PvZ~:K(YyUbnB-Ll-_|AC!wZk3u|l]+@mu/_FKCgr/::Vhi#VX2');
define('SECURE_AUTH_KEY',  '^vU+u+cxaR:#nnJzqult{rf%-<5U6SJ}YX3eHs1)-SwWGL[^;?2y4:4lw:s@y}]t');
define('LOGGED_IN_KEY',    'IS?K#L`LtAX-W%b7+0XPYj[TweD-Y[ HrX~U9-{L&v^MH///}eNgHX?ue<%,U|B;');
define('NONCE_KEY',        'Cc[pdc]M:s[Yid==h53J4vFb,nzR5%%-C<C=~x*B$#X#>w3]A-l=><]|0PKN!Uvy');
define('AUTH_SALT',        '5AOQa,oD]*Ukf4XJD{*fYVYxgGhqSM{)3Id&d|Zm_EZ?n[Tx1Y&}+!ZEc ,xU/#*');
define('SECURE_AUTH_SALT', ')Bf-s:je+-A-0qwl8Sz^Rd}c5vU|VPwM{Q)CI> kOG(o+!DKw=Nfv+n#M]N_!rRq');
define('LOGGED_IN_SALT',   'LfZB69Alag/P=7n4i01_~|U*bv4`o`cv`sA_~%/P#c;yBqge>0%Mk:+!cxJ1F+pZ');
define('NONCE_SALT',       'u5CL|7{!@$B5D0;QFnALc-fU/a6s8ZT41d>!T%Vx&//:;$@3R`Y#A$_&.dY/->=*');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
