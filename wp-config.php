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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/i/iokhtr/test/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'iokhtr_test'); //word

/** Имя пользователя MySQL */
define('DB_USER', 'iokhtr_test'); //root

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'anabolik1'); //root

/** Имя сервера MySQL */
define('DB_HOST', 'localhost'); //localhost

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
define('AUTH_KEY',         'n,R]x&HrRY&2Q{!;T7kl$q0D?.Y-oD2C#gs#Hcj-&`tIw`&Lwv<+,rZ-EDNsYgs.');
define('SECURE_AUTH_KEY',  '%NG0sDKmR9]!KAtin_SCTB$?MHxn!rnnF(?+nmx^+YB#A_$)6]J$(tsfN^b8EzC3');
define('LOGGED_IN_KEY',    'qt4N:mtJV|[+w*!>duj#<4`eHJqK!ve:En9OM/Bq|`vO{h_<hM,qZiM:f+L7xxTV');
define('NONCE_KEY',        ',A&p/Gb>wL=.h9r&Ao8i2Y$lV>|oU`;9DTsuqyd9$$ E~*M+vN~HuIRiK-^EGZ?J');
define('AUTH_SALT',        '^KR--OUJg}ubI:e.RBN+}/ 7BGqu:-+J^0/K{theh)2a|%Tm|K[6~OgW_+>{8y?h');
define('SECURE_AUTH_SALT', ',0@Io`}e4U91D;}EUWT^pT7F`weZ|uWl/z(F@4z,H78,zUMFXcd=]Fa)4*S^J3_.');
define('LOGGED_IN_SALT',   'eG)Id#s_>FeN-0~ s;vI 7dw:+{D?U-ZKC]%3PS)p&Ox&=z0ACW|3MPmk[+5ac~b');
define('NONCE_SALT',       'm3tWGs~dY4n),,_jiCU&LYf?Y?,,+G+d? 5T&M?3[lwY0=>x2G,Q$uDB.o0CU]fP');

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

define('FS_CHMOD_FILE', 0755); //права доступа к записываемым файлам, выставляемые по-умолчанию
define('FS_CHMOD_DIR', 0755);
define('FS_METHOD', 'direct');
define('FTP_USER', 'add'); //FTP-логин
define('FTP_PASS', 'add'); //FTP-пароль
define('FTP_HOST', '54.148.189.99:21'); //адрес FTP
