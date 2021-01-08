<?php
/**
 * إعدادات الووردبريس الأساسية
 *
 * عملية إنشاء الملف wp-config.php تستخدم هذا الملف أثناء التنصيب. لا يجب عليك
 * استخدام الموقع، يمكنك نسخ هذا الملف إلى "wp-config.php" وبعدها ملئ القيم المطلوبة.
 *
 * هذا الملف يحتوي على هذه الإعدادات:
 *
 * * إعدادات قاعدة البيانات
 * * مفاتيح الأمان
 * * بادئة جداول قاعدة البيانات
 * * المسار المطلق لمجلد الووردبريس
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** إعدادات قاعدة البيانات - يمكنك الحصول على هذه المعلومات من مستضيفك ** //

/** اسم قاعدة البيانات لووردبريس */
define( 'DB_NAME', 'almth8f_db' );

/** اسم مستخدم قاعدة البيانات */
define( 'DB_USER', 'root' );

/** كلمة مرور قاعدة البيانات */
define( 'DB_PASSWORD', '' );

/** عنوان خادم قاعدة البيانات */
define( 'DB_HOST', 'localhost' );

/** ترميز قاعدة البيانات */
define( 'DB_CHARSET', 'utf8mb4' );

/** نوع تجميع قاعدة البيانات. لا تغير هذا إن كنت غير متأكد */
define( 'DB_COLLATE', '' );

/**#@+
 * مفاتيح الأمان.
 *
 * استخدم الرابط التالي لتوليد المفاتيح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'AU81&qD/7iWBEv0TOd8(em4Oc^0}2`HcdueA>Ypy>|_8mvpz33Ulh~[iEC~8K!(Q' );
define( 'SECURE_AUTH_KEY',  'VG<6K!S@Em_)z@3TWKo`}>D7Xrz|4?u1[?pkGav$r}qnMs<;6]])eQKVB16y4`O_' );
define( 'LOGGED_IN_KEY',    'vr,Ojs$w*DS|&%_QBkTck]0Mc2rlDz*sz1~w4k(H0L*_vID#AB*wX ,.=s}`IYxa' );
define( 'NONCE_KEY',        '~yY]Yb87d7E>DmXUvKQ7pcp402L>g8Z+%2@!8H`e.<G2Z8>&hht,nF;niaO8E02/' );
define( 'AUTH_SALT',        's3#U3`R4M0f3Sxsc~l7b8Y?)7qHnHkmD>Yq5mTIoWjra%8.jPMI*m:&>s=+%cf]v' );
define( 'SECURE_AUTH_SALT', 'eT297|7y&->gZ2zL8ti[]tg3lQOeujO4B[1Q&o@ZRzr,-MWO/N<ZbAIh$ mMbx<a' );
define( 'LOGGED_IN_SALT',   '#H>Cp@&LpIozNRW@T@82tqF%2Vn-L0!A3$MK/usq8]@N|@;}ZF,GS*([<(j$)3B*' );
define( 'NONCE_SALT',       'J&qQ^lB}(+Nqlej1.|d>7`,0UV@[&#@B,As[Sd#q} MB>EZc(4=&R;t>^{U3B}9U' );

/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix = 'wp_';

/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */

/** المسار المطلق لمجلد ووردبريس. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once ABSPATH . 'wp-settings.php';
