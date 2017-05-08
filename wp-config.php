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
define('DB_NAME', 'newbiewp');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         ')1jp7u#q(H,F3@!;o{g=q;pauQj:hE6D<A*/$~`V/81#Zh!EzL]ka,/<X(9GpTX4');
define('SECURE_AUTH_KEY',  '(7$2{@UYADRJeA$qA2aa:;?^2{)WH;73Np?8JLp+]}n%Sb?L+5@q:Ji#6E}V?[`L');
define('LOGGED_IN_KEY',    '^hn$a5UdYOPbAwrVZ;a_j%k2/ `##D A%-whQ>6BCBTXB.z~#4[{81?F$&+;9R1|');
define('NONCE_KEY',        'dRxp9Mb, -|%X(_ma1`+fxZ>wx&R(;AYu]EC$}Iox+gHXb-{|6tZQXd1yqS<&za-');
define('AUTH_SALT',        'Pji,B|7<NCD<I#W;vQ.OIb~nEr<W9 |%;qEZ76I mS%RJINi<Sx:,CKswbk`C%c)');
define('SECURE_AUTH_SALT', 'Eu#d{2<]/s_x:7@tZ88&+[8N TD)V2[-bm+t98Qe7g||<y,ESR-8|va5=.8y8TK!');
define('LOGGED_IN_SALT',   'd2HrGH:C<}~or0[)q!@zx7Jo 5MVwLigW-m8688l-j!=F269Px]#N^--VXy2T|7H');
define('NONCE_SALT',       '>k_/%QtAsucc.wH[A^Oo~tef/yP*woIfJaF!f&k+VoG3f#tpFz}aDNd8a;h(oUBQ');

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
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
