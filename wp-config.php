<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
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
define( 'DB_NAME', 'site_wp_test' );

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
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';Y`-hfP?tQ=yFe#w8V-|dP<iQn9tvCYrmeHDIe.1Y ?KL8#4gq_mCl;lSl`RgF[Q' );
define( 'SECURE_AUTH_KEY',  'v^/yH:kE[m9]LPq%2e0H=fm[}nm@(o((jimWW).JiFB0LZ@t_=~+&T_LWZB9VhMo' );
define( 'LOGGED_IN_KEY',    'TL>`1kXPg0:uk~r,5=9@(r=:Q.aC5~Op8;~0g]Wt^N]^^}C`w$&UIZ^5$qsjcU&-' );
define( 'NONCE_KEY',        '%[w#UOc.qVy( b-]f&}zH/dWy_:aCM.:z;(T-iAN|c|p.={zN:R{5@_8vsVuejnV' );
define( 'AUTH_SALT',        '4xTOl%,2HdQ:t2Ypfh>p.aN| g4`z~ynx+Xl}W?4Hzc(G[c[jDDHRzx`u+VA7FHg' );
define( 'SECURE_AUTH_SALT', '2@H{EEV|Zqk`aG oGb*7`3d0o[9gVea(Qazu0TN*T`+5}4%b?aif4q:`qv@7,c0B' );
define( 'LOGGED_IN_SALT',   '}2mB9Rh/=#0snPA~yzpHjF&SU#y-@vaL@?0q~Qk%,7u2B1&!t&5+baFId)~a/AUG' );
define( 'NONCE_SALT',       'RSb!`Pbb>$S*gKQ[b]UN&-9B6q)hJsrIJ<4Z-S8gPuOoOs4t2Fw]ts-6pdm%u. V' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
