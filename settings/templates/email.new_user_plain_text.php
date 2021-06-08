<?php
print_unescaped($l->t("Dear user,\n\nyour ownCloud account at CESNET Data Storage has been successfully created for you.\n\nDetails about your account are listed below.\n\nYour username: %s\nServer address: %s\nUser manual: https://du.cesnet.cz/en/navody/owncloud/start\n\nIf you have any questions or problems, feel free to contact us at support@cesnet.cz.\n\n", array($_['username'], 'https://owncloud.cesnet.cz')));

// TRANSLATORS term at the end of a mail
p($l->t("Your CESNET Storage Department Team"));
?>

	--
<?php p($theme->getName() . ' - ' . $theme->getSlogan()); ?>
<?php print_unescaped("\n".$theme->getBaseUrl());
