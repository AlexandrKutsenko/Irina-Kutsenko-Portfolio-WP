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
define('DB_NAME', 'WP');

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
define('AUTH_KEY',         'Gc|T|9c@_rr,N*[}nykftC3!W{,)I(GZ}{UvyL/#@B%=2fxjy|W>#$86,R8y]XvW');
define('SECURE_AUTH_KEY',  't*GJ)y1)T;-?4RVjBvyybkBjB0pa?P@ nd[9x#du#Bz8p[|LkG@.iS(myy/1M`qq');
define('LOGGED_IN_KEY',    '$;YoIURfja+#|>x^Cmc:D@UQY>7dQj1FhW+CV~m u2@p)qNPkm@a,X4%X_CGxGKO');
define('NONCE_KEY',        '#s.T8sITb8}Q-T /Go5IFpIDNk uWtElPA-e@Vg(>m]??v)pfuH[]*[:co}@wc~J');
define('AUTH_SALT',        ',J3UiI5duN(SR[+_t*VElc4[~zUH ;;}KHH%lh+&75p<b[U9ox7,]S&3Q5p,efA9');
define('SECURE_AUTH_SALT', 'q:f`ZJV?A^_)^>e)`}k=p*a?]!^Dfm*Vh$)8C({=<#/cT_:1/5|}sO9pH?DzHWCx');
define('LOGGED_IN_SALT',   '}a!9079^u+9SQ,`,7Jd8{eFDNx>)bPeYQO`nI-|xna4r7m1@6}|zw RUu1WA^s?J');
define('NONCE_SALT',       '4g?Jq.7LqK<CM7>,Wp%PU2]ygcy/UJzYPGpfUaOHSX?0ilOg%l9t}kh/R>[fvO$K');

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
