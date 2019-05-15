<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ss_dbname_m4ca2mmido');

/** MySQL database username */
define('DB_USER', '13pqsf30W1saZP7');

/** MySQL database password */
define('DB_PASSWORD', 'IEFfrebhsgg8CznS');

/** MySQL hostname */
define('DB_HOST', 'hickoryonthehillcom.ipagemysql.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '|[@Bq!e}XsQ+&XJ(@?v@=oU=OpR>xUfxJ@])n&P@CHA(Tuh|!IUH!DVWlZl{l<ea=q>E-e*JGE<pvUwe_|VtL}mzP<lLlF)MzZ-<?y|-piscb>?hHw>*yxVSDGl!jeKw');
define('SECURE_AUTH_KEY', 'EpFPPvC>rpPGFxA{RHZo;%vsba<Ld^LqnCDqy_AkFO?x)qn+MXv%yH!AEfo!<Sr@hn&KTwc+[Wqygy]zt*t%LNe<mEeum?xhNLF/=K=hS_UnWXHZ+M];JttHq-&_u(Jn');
define('LOGGED_IN_KEY', 'gV@Vh![DyX^!cmvLeHo*hnFr(EQ+EvjCh)PwnBZFFHh&;O&KtL]bLV>QCJfsXy/nDpY|d!ZFXdlmT+Twn(QaVdhmGebW+<Gb[jer?EvOQiQebIiy/JtW@Dg{a<oEg]Vb');
define('NONCE_KEY', '-/>mISfTyHbx]LbD^lA==|Z-wZ<pqXdZuO</>=/Vl@Bn*PJoZM&^A=D?xh$qo}w*)=v-I;i<mh$cnG!>}QF*UF$%C==XAQFhQ[q]$KynMFXA|K%&<])jfqYMmDkuGI(g');
define('AUTH_SALT', 'J&e;As%A>@Z{ZJxN}HCE$ci?_ksaZqrf*tfX$/n^v!cw)?UhaKdHMGz*>&BJ&d{pDxn<;&$bI!|<ujc^Dnnw$f%%@gFz+qnRk<WwHY)A-i!vG=zRp(te%$LmA-c}GEF-');
define('SECURE_AUTH_SALT', 'uMpe%E+dxd)FnnlVExe|H{|-H>[Uk*>Atf(BOhjpBS(Y*j%Nx==z!=KvKE^O}O+T/Lx^XU(J=t<NORAuQSz*JS_cuwWCfS{o};xXEzZoM(PYSe?|&awhR|xY{FSxiHO^');
define('LOGGED_IN_SALT', 'YpSTFhISSdUi|)OjQoXlm?)yG|$E;&K};Et@u&IeerlbXnXPC;+^?XAn)RBwBap!cVkTG|cRYDBOSV?&]Sdiu+d{^U-UpqzZ-KxQgn=Lf{KmmD^IEJqa&-F|q]ZkJy}{');
define('NONCE_SALT', 'HGG+eEJ)g+MA%V$T>OhcB[Z{KB]^JCEnJFPqDRW$&=>*lfAoWF[=lMU(Os|Alv]/*hmpXSKtW_J{Zd]]={d-HfVQ[(vJohx(YFD&n^_Xi]<j%|e$YzdK}iVIBexP[oAf');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_pedy_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
