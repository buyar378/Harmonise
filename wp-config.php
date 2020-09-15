<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'harmonise' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '>kXQR_+Zf*<&F$GvN=yJYXhr@9?QCiSJKAN)~wAjdsnlAg@sqzT[ZFyLm:Q{iZU9' );
define( 'SECURE_AUTH_KEY',  'NEy=3ru;} mK0&sE{R,V)0@7m*alq(`%! f.#G[+c^}TCinTPe@MuL%X-0}x`cc5' );
define( 'LOGGED_IN_KEY',    '@v/!^]`/-]ud<SHiI`-ZacBHH!mIg$8p}8*uXtLP5|pmQHrHG3,KE&0cy:Bf+J-+' );
define( 'NONCE_KEY',        '].aRX^fW}*eKnve%ww$#Dh{u}A26t~{SjeaoQII] Nkv`wpn^aOZD_|ExI?Tj<tX' );
define( 'AUTH_SALT',        'q;PxMrz>0oQT$_L?Wcs/wsw4^m=CPQ[I4IHZ;~|xB Tz4I<<^C}~KG{RekDXE:m.' );
define( 'SECURE_AUTH_SALT', '3s{YnarjK8eAL?Ki`ObPSGN)zxO%2xN+0k~v=[ge9zCrUgrf:,F o%sYA3YxBS_`' );
define( 'LOGGED_IN_SALT',   '!?%[G;)%E0eC!E|uH>ucZ/dZDHso45xao^mC]:4bl}n=x4u~F[qoe4F*Xs&FQ!Ew' );
define( 'NONCE_SALT',       '^4+<W!NY-1@?#./Tf.I*f*>BiGT|~SV3#.2M!]o<m?Sp2O$|n{~=yoNC75CF=t8-' );
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
