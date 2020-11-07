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
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'wordpress' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         'l7Ud52 O,of)U<~!qu*5E[>pOoB.x7}7@9s-!/9C^rvH|7`fe`-}#R^fan;1>_rl' );
define( 'SECURE_AUTH_KEY',  'o!+{)LQtW9XAbu/TqTX[HP/;nhs32<S>~q];BHx!m&yp-h;9hgB.Zn8G!V>iI83g' );
define( 'LOGGED_IN_KEY',    'r;^2nbZ,ocoY6H:SO~t1B-I-m$uBf*i3/rY?c~(R9WMligTspKgLLKGooIKf[bp=' );
define( 'NONCE_KEY',        'f<6T@llW^Og>CC@n&(UNW@uoVp ,ja6Wd@<Bs/b@#bPZ:mlv?tusH+sE#~B,15Bf' );
define( 'AUTH_SALT',        '7kQ Gw]}nFf&I67}od^j3m7-#x0OKbBA/%`r%vxL<=broX:w;r f%C;5`pZv{fMb' );
define( 'SECURE_AUTH_SALT', '3;q8{{9Ah>Nl-yP]+_{6<1)i1_#ufhP{EF/,24=Q0C@#A8+UT2INB(I?{q`2O|N/' );
define( 'LOGGED_IN_SALT',   'IR`}$j*;IYUTfOMk:,b{QtZNuQKA!O4u10C<VK#%0KT5gFk}0o9?$ nAjwf;}{Hd' );
define( 'NONCE_SALT',       'l|;a3*-iFoE5#,?d&{J F:svCqwni%+VI6&,$6|n+|>SH*kr:4Fh1~}]a)ug;*I}' );

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
