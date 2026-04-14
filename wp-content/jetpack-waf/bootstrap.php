<?php
define( 'DISABLE_JETPACK_WAF', false );
if ( defined( 'DISABLE_JETPACK_WAF' ) && DISABLE_JETPACK_WAF ) return;
define( 'JETPACK_WAF_MODE', 'silent' );
define( 'JETPACK_WAF_SHARE_DATA', false );
define( 'JETPACK_WAF_SHARE_DEBUG_DATA', false );
<<<<<<< HEAD
define( 'JETPACK_WAF_DIR', 'D:\\xampp\\htdocs\\Truong_Thi_Thu_Chuc/wp-content/jetpack-waf' );
define( 'JETPACK_WAF_WPCONFIG', 'D:\\xampp\\htdocs\\Truong_Thi_Thu_Chuc/wp-content/../wp-config.php' );
define( 'JETPACK_WAF_ENTRYPOINT', 'rules/rules.php' );
require_once 'D:\\xampp\\htdocs\\Truong_Thi_Thu_Chuc\\wp-content\\plugins\\jetpack/vendor/autoload.php';
=======
define( 'JETPACK_WAF_DIR', 'E:\\xampp\\htdocs\\Truong_Thi_Thu_Chuc/wp-content/jetpack-waf' );
define( 'JETPACK_WAF_WPCONFIG', 'E:\\xampp\\htdocs\\Truong_Thi_Thu_Chuc/wp-content/../wp-config.php' );
define( 'JETPACK_WAF_ENTRYPOINT', 'rules/rules.php' );
require_once 'E:\\xampp\\htdocs\\Truong_Thi_Thu_Chuc\\wp-content\\plugins\\jetpack/vendor/autoload.php';
>>>>>>> d6e17f77e0f2793f108ad5e59212c9512f9da475
Automattic\Jetpack\Waf\Waf_Runner::initialize();
