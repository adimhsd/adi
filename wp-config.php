<?php
/**
 * Konfigurasi dasar WordPress.
 *
 * Berkas ini berisi konfigurasi-konfigurasi berikut: Pengaturan MySQL, Awalan Tabel,
 * Kunci Rahasia, Bahasa WordPress, dan ABSPATH. Anda dapat menemukan informasi lebih
 * lanjut dengan mengunjungi Halaman Codex {@link http://codex.wordpress.org/Editing_wp-config.php
 * Menyunting wp-config.php}. Anda dapat memperoleh pengaturan MySQL dari web host Anda.
 *
 * Berkas ini digunakan oleh skrip penciptaan wp-config.php selama proses instalasi.
 * Anda tidak perlu menggunakan situs web, Anda dapat langsung menyalin berkas ini ke
 * "wp-config.php" dan mengisi nilai-nilainya.
 *
 * @package WordPress
 */

// ** Pengaturan MySQL - Anda dapat memperoleh informasi ini dari web host Anda ** //
/** Nama basis data untuk WordPress */
define( 'DB_NAME', 'adi' );

/** Nama pengguna basis data MySQL */
define( 'DB_USER', 'root' );

/** Kata sandi basis data MySQL */
define( 'DB_PASSWORD', '' );

/** Nama host MySQL */
define( 'DB_HOST', 'localhost' );

/** Set Karakter Basis Data yang digunakan untuk menciptakan tabel basis data. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Jenis Collate Basis Data. Jangan ubah ini jika ragu. */
define('DB_COLLATE', '');

/**#@+
 * Kunci Otentifikasi Unik dan Garam.
 *
 * Ubah baris berikut menjadi frase unik!
 * Anda dapat menciptakan frase-frase ini menggunakan {@link https://api.wordpress.org/secret-key/1.1/salt/ Layanan kunci-rahasia WordPress.org}
 * Anda dapat mengubah baris-baris berikut kapanpun untuk mencabut validasi seluruh cookies. Hal ini akan memaksa seluruh pengguna untuk masuk log ulang.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';||,j#Nxlyt6siNZ59.^,og;y~@NB&dAGhOFNWTYs<hr5~f+H5@I<5zc}^7JkOg3' );
define( 'SECURE_AUTH_KEY',  '#xn.{kftJSl/AGZT~u*C&OJ}C:66 +0a[$>baCXDeeh+S`<1#6rw@NYe/=RmtB`,' );
define( 'LOGGED_IN_KEY',    '$g%x9gNi~aah~0^1})#rpS[zdjbDj94aji~>0S%Y:R/vhY$!&Ab@huv*D9heF7kS' );
define( 'NONCE_KEY',        '!dP*x7E];lh{+O/`H|M{V#m<|;&iNO;Q8a9GgM8_@{fDgGqDZ^FEkTFdkGfs;8Di' );
define( 'AUTH_SALT',        '9,!@jM2:u>C]hW;>-$w0aY7GZDk5f~J#-_/P&dVp!g_J0~6i+pV3M3h~I-Msp#0x' );
define( 'SECURE_AUTH_SALT', '/M:)?vQer):ZU^5[o(%?z%|RekGOi[{mmGT1?4}7SzEjhatVw&qaef!wq4R}N#<T' );
define( 'LOGGED_IN_SALT',   'O8oRtLKei0<U;5nVEZ9N~8A`Io2.`~yk5tt|QFBfrWty* 1w;EyF 8J7bSBt{Bzm' );
define( 'NONCE_SALT',       'ZLbboh2J?dk{/uluAmPRsNsM-s550&+-RXhWYX5aoG!/hU7QC1|Qf%(Sfn7o63M]' );

/**#@-*/

/**
 * Awalan Tabel Basis Data WordPress.
 *
 * Anda dapat memiliki beberapa instalasi di dalam satu basis data jika Anda memberikan awalan unik
 * kepada masing-masing tabel. Harap hanya masukkan angka, huruf, dan garis bawah!
 */
$table_prefix = 'wp_';

/**
 * Untuk pengembang: Moda pengawakutuan WordPress.
 *
 * Ubah ini menjadi "true" untuk mengaktifkan tampilan peringatan selama pengembangan.
 * Sangat disarankan agar pengembang plugin dan tema menggunakan WP_DEBUG
 * di lingkungan pengembangan mereka.
 */
define('WP_DEBUG', false);

/* Cukup, berhenti menyunting! Selamat ngeblog. */

/** Lokasi absolut direktori WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Menentukan variabel-variabel WordPress berkas-berkas yang disertakan. */
require_once(ABSPATH . 'wp-settings.php');
