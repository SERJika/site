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
define('DB_NAME', 'infoweb');

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
define('AUTH_KEY',         'F,G$2d[vL7]6sw;]ipBcNTDv_(i{M<uFZT:b f7<m_?pKI;{BFf LM7#f!<0V2-3');
define('SECURE_AUTH_KEY',  'W(TgB/THWKV,/X,-;-Xg+<..-e&F_+C7$c8Z|~?A-T*~68D06B51jc=<(?clAWNH');
define('LOGGED_IN_KEY',    ']IF<U6FgMQ*D5pR=03gCoylf+~KqAN@ZMMFgs2YCD4A}LBO.3B0#~CtT;;!Dqn A');
define('NONCE_KEY',        'ZI1fP@/Qw7f9j;Grk|F>B6DD,S$2{bGhba6NXs a`H5=B^&XgWC9y9>YTOH^wa9p');
define('AUTH_SALT',        '=fZ 7*(uq<DVc@9tG|g(GL5?oqb$v})9ox`Z+3$XOeyED{7`S9E&BT8a?d+aY,!N');
define('SECURE_AUTH_SALT', ':0R]qP1<>ZZjH@>.m<KQ!#%`bq)<~!RE`5<@q-/:2Z,jTxiUeSGz@L;0nju[dFCK');
define('LOGGED_IN_SALT',   'xFVdlcKH[50F+AdeA+SzJ^>vCY;Bf)[fS#=-%K`y$)F.#jPtu`lKeHr7]kUoFw|e');
define('NONCE_SALT',       '-_AbtJ9V2zH.! _zP35oP%enwi9?pQ#@,{u_}GB!YC?Fq0xUg/:zHvMsjx/j%nW:');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'sjwp_';

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
