<?php
print_unescaped($l->t("Hello,\n\nyour ownCloud account at Data Storage CESNET has been succesfully created for you.\n\nBelow are listed details about your account.\n\nYour username: %s\nServer address: %s\nUser manual: https://du.cesnet.cz/en/navody/owncloud/start\n\nIf you have any questions or problems, feel free to contact us at support@cesnet.cz.\n\n", array($_['username'], $_['url'])));

// TRANSLATORS term at the end of a mail
p($l->t("Your CESNET Storage Department Team"));
?>

	--
<?php p($theme->getName() . ' - ' . $theme->getSlogan()); ?>
<?php print_unescaped("\n".$theme->getBaseUrl());
