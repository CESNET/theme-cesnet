<?php

/**
 * Author: Miroslav Bauer <bauer@cesnet.cz>
 *
 * CESNET customizations to some default OC values
 * See lib/private/defaults.php for a list of possible defaults
 */

class OC_Theme {
	
	function __construct() {
		$this->ThemeName = 'cesnet';
		$this->l = OC_L10N::get('core');
//		OCP\Util::writeLog('t', 'translator:'. var_export($this->l, TRUE), OCP\Util::WARN);
	}
	
	public function getDefaultEntity() {
		return 'ownCloud@CESNET';
	}

	public function getSlogan() {
		return $this->l->t("This service is a part of CESNET E-infrastructure\nhttp://www.cesnet.cz/services/?lang=en");
	}
	
	public function getShortFooter() {
		return $this->l->t("This service is a part of CESNET <a href=\"http://www.cesnet.cz/services/?lang=en\">e-infrastructure</a>");
	}

	public function getLongFooter() {
		return $this->getShortFooter();
	}
}
