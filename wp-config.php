<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ultetriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'landingjeep');

/** Nome utente del database MySQL */
define('DB_USER', 'root');

/** Password del database MySQL */
define('DB_PASSWORD', '');

/** Hostname MySQL  */
define('DB_HOST', '127.0.0.1');

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8mb4');

/** Il tipo di Database Collation. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/** URL del sito in locale. */
define('WP_HOME','http://localhost/landingjeep/');
define('WP_SITEURL','http://localhost/landingjeep/');

/** Installare plugin da back end senza le credenziali FTP. */
define('FS_METHOD','direct');

/** Espande il limite della memoria utilizzabile. */
define('WP_MEMORY_LIMIT', '256M');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salt.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{V`JA!Ct.B+W_8e-5Re{-4ZpM*_al7:p@_TQ8<<#f-&,4LA8v!u1ARK_^ Na]uV3');
define('SECURE_AUTH_KEY',  '^D$3>Fb>wu#AODq;yQanl18%;2Yv3Dgc0^>/dlKQ6BD<-v?&v<ShR!q]cGeof?AD');
define('LOGGED_IN_KEY',    'fT3s>(*q ,Xp9xi/zFqsciFvl,IrK5xqOiO:nt4s:Vo{W:CecO[;6=n$AN#0item');
define('NONCE_KEY',        '_2$cEKZWE<AocFS]z0`9{sU:Wbk@BIGGWbhD#bd1KS:uh`.,;<v>H3H~Gm]@;h2A');
define('AUTH_SALT',        '~YPnD55tiK~R7Yzz^|h+K^L:?73g]_8Bf93=aD!. 82N+qjvlz/0PHa?jgl:cXB/');
define('SECURE_AUTH_SALT', 'oUM?.,V`xC]|&5U:%Ij_6b1%OG#JKTC;EKUZmxp1~%_ZG$7q.~x:IusW+|7Y{sO^');
define('LOGGED_IN_SALT',   '`Xx{7CB/X%7<=Y&$K;-.d%};Oai] |Zp+oSYvo:cFC.C{6$H<,*8%)*qt<a{<1+T');
define('NONCE_SALT',       '`^lgs}8TN8Ugq;J5y?5/lu)Rqz[?GyDswC8j+EN(9A3kr(jL*MYJ3<j QpfrJ*ZC');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', true);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
