<?php
/**
 * Class LP_Settings_Profile
 *
 * @author  ThimPress
 * @package LearnPress/Admin/Classes/Settings
 * @version 4.0.0
 */

use LearnPress\Helpers\Config;

defined( 'ABSPATH' ) || exit;

class LP_Settings_Advanced extends LP_Abstract_Settings_Page {

	public function __construct() {
		$this->id   = 'advanced';
		$this->text = esc_html__( 'Advanced', 'learnpress' );

		parent::__construct();
	}

	public function get_settings( $section = '', $tab = '' ) {
		return Config::instance()->get( 'advanced', 'settings' );
	}
<<<<<<< HEAD

	/**
	 * Get sections for advanced settings.
	 *
	 * @return array<string, string>
	 */
	public function get_sections() {
		return array(
			'general' => esc_html__( 'General', 'learnpress' ),
		);
	}
=======
>>>>>>> d6e17f77e0f2793f108ad5e59212c9512f9da475
}

return new LP_Settings_Advanced();
