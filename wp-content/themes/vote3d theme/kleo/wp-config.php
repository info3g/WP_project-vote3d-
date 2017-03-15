<?php
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_LOG', false ); 

// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'votethrd_332');

/** MySQL database username */
define('DB_USER', 'votethrd_332');

/** MySQL database password */
define('DB_PASSWORD', 'XxFLvO(F+K8T');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define( 'AUTOMATIC_UPDATER_DISABLED', true );

define('AUTH_KEY',         'X(3-w;WV&4C[5B_`<q x+FgS `+?J &vV3lswh1xXR$*a=3Pm1->fh@EI=?`5-Ha');
define('SECURE_AUTH_KEY',  'I0SdK4p+jbu2M(]?s;HfcP(&<[]X11BcKD$f<ux(~n[)y7qYWO{AQ{5ox]X;qW:5');
define('LOGGED_IN_KEY',    'J:Im~v=uPH2VlG&4Y~mFS&%)uooLxq690h>Pk`qObZh.>Y|8s:YUn9+qo`z?}C+L');
define('NONCE_KEY',        'EmXUXxDpm`4HrCrv/adu]/b2oYAG?$MZIFTTWycBMN #p_iLa8oq>XwxbWjI;P~H');
define('AUTH_SALT',        'sUJ7>GBM.lg-!N!RMSZ=GthNf&j{IFxEd:3z|kj>+P7XPoT?a9=~}dwa_Q-RRzn]');
define('SECURE_AUTH_SALT', '/Lyk-~=Ud[gGRcN&M_$00<Yl|gwvdi,k<@LTOob?ZQ0Mbd(lo_yH`H-efEUv#.u>');
define('LOGGED_IN_SALT',   '>3W:2^ag+l;BN|WY?5NB@!+,|(r#-kk?<aVkftXP:@pfxu I_9 aG/^Ka$0@rHP8');
define('NONCE_SALT',       '.,-%9oP+jGnFn#VWYH127$^n.7qZ !+yXo-,!bL{,]n&K||EH|_kc|F8{)as|RBT');


$table_prefix = '332_';





/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');