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
define( 'DB_NAME', 'industry' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         ' unsB;F[XSVbZE9IUg8hEcf=8n{-4Bc]EC:>4M)IuZ..]|dD&.bm4Y9yI-jrgcxz' );
define( 'SECURE_AUTH_KEY',  'JOuiL)[j1.7[Tg$N!#TL<U)ru2(k--%1b*&h|dm/=r3bA]ZNY#N,Md,phy1.YvjE' );
define( 'LOGGED_IN_KEY',    ']xl+2_aCpAs xo)w]ao#&_#aY3$HbmbZJGT@-VI1!E6,z`v-/#iLmEvHP+C`Z:XM' );
define( 'NONCE_KEY',        '.con:p_5@m%ZSEO|Y4fGK|3d)j7r9_BwvX<b-6!O#S56[lY@N_k@vII?xBu}-iy}' );
define( 'AUTH_SALT',        's&zAqL1`a;AeYZ6 ^h|3Wr0y9gcT*BYGeN,e&8[CC+F#Bi=fsh)E9cE7eFcYB!%C' );
define( 'SECURE_AUTH_SALT', '-I6|D8EVO{8pJQ/WPYDk/F3<FkrKUl27:{`t1z&UiW21Ly`$5}W43g{_<5 +7|8<' );
define( 'LOGGED_IN_SALT',   '1pU-X?z!?VT3j A/+E#:ibwF~JI)d|.+5P8L{GW25/2W&tH#D9Pn@:ZFRn_:t86&' );
define( 'NONCE_SALT',       'I|Ic0>PfAGY[P&^j/-:j%a#@YTkai}<co*pc({^/Z{zFJEGn:J5VA tKRG)Cj!MY' );

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
