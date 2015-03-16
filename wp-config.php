<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Ten plik zawiera konfiguracje: ustawień MySQL-a, prefiksu tabel
 * w bazie danych, tajnych kluczy i ABSPATH. Więcej informacji
 * znajduje się na stronie
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Kodeksu. Ustawienia MySQL-a możesz zdobyć
 * od administratora Twojego serwera.
 *
 * Ten plik jest używany przez skrypt automatycznie tworzący plik
 * wp-config.php podczas instalacji. Nie musisz korzystać z tego
 * skryptu, możesz po prostu skopiować ten plik, nazwać go
 * "wp-config.php" i wprowadzić do niego odpowiednie wartości.
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('DB_NAME', 'wordpress');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'root');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', '');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'localhost');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'A230}M@*|6S=oPx1*TO Q|3qEVE#l$7L!3Z9+/$0+WU;,{~:9+3sM~&]4`D}+}SY');
define('SECURE_AUTH_KEY',  '!Rxh-,w=sR)vZ#Ezl%h$KE%tEM_=8o$|,IiAA0Pz,k_|ZZkQjz] ` W&7F/?DeL-');
define('LOGGED_IN_KEY',    'D7^f7yRVd$pF`|,zfN7;+Ln`P%lIH7tS%ADGdN6. r+UWI#P!dpae-4xo9>]Ti9@');
define('NONCE_KEY',        'jo^k-rA|u9ut)JOd<Q~Vrhu2,A)u$6om$HKI}DiEw-2!mP+DdF-u50yI03=}rXqK');
define('AUTH_SALT',        '^>n.eYTVHUp|D|j+jZCm+{.-~I#p@KgCYadxbL=BVn9h~W%60~GwPYGu&r2E.0v0');
define('SECURE_AUTH_SALT', 'rLvb~b0DOj-{u[{Kw+EKE[T++Hy<i}+wQd?c1WV0HJ&KDaj;g.~gqw khXzHpF(#');
define('LOGGED_IN_SALT',   '0I 5DEG_HLOLvoGH:F<lI`f/;W~;+RuoL:TlXX*&oUA=6QvfCq>Kr%<f<Z/P2:a{');
define('NONCE_SALT',       'TK]Rb-@xINqKj)@j<K?9(-sJb{k1!6cas]RH_|mQ.G:(YMI+Ph^-.8awN2l#EoAb');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'wp_';

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie ostrzeżeń
 * podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG w miejscach pracy nad nimi.
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');
