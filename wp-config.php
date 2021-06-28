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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpresstest' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'ADhqUljW]F`Hh*(&G3zt3n#3SstM;ql#$Aa+y<pI(+2X64UisWyUJ_wy~$s,,V2=' );
define( 'SECURE_AUTH_KEY',  '>J$TTUu`lP27regcM}H_#CM5[b@YlC}eg<Qz2pZf%Wl?M(6!/E]>,PYb1~HN]/4D' );
define( 'LOGGED_IN_KEY',    'E*I<2LUcJ/s]Ya2Di;Qy81$v*U#PzRPNtM9$%}IhBbFZ0;qfWVi}:Jj,?dZLUu^a' );
define( 'NONCE_KEY',        '{ZjHmT#DKK`%K%F?KZ`RK^)Tr5Iu6JyD-?>F[U(_Frad(|:inn/yA0/BeK/qUnh$' );
define( 'AUTH_SALT',        'K(Ta b@I=$=p7O`HV}?jj.*hFxy:O #8@[L;ysNN<OCz,mb$ZsQ.51+tjc*>b)gE' );
define( 'SECURE_AUTH_SALT', 'OVx *>DBXw3}s,&dty{ghW3^}jE1~fY*suB$oekJe54*!$3:F6_W#7YMt~=6){DS' );
define( 'LOGGED_IN_SALT',   'W$`wF5WbVqpqXzAY{e5~<m~+9idcmjTO=Sh.RI<*`}aH9h_wk-}tFLY^6/^oZ/J5' );
define( 'NONCE_SALT',       's/xK99EHC13]XSRdma`5iSY9hni]N.T9qWti^i%#J<%QI%>67,S`*?]t3^Au?E*]' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_test';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
