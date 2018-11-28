<?php
print_unescaped($l->t("Dear user,\n\nwe inform you that %s shared %s with you.\nView file here: %s\n\n", array($_['user_displayname'], $_['filename'], $_['link'])));
if ( isset($_['expiration']) ) {
	print_unescaped($l->t("The share will expire on %s.", [$_['expiration']]));
	print_unescaped("\n\n");
}
// TRANSLATORS term at the end of a mail
p($l->t("Your CESNET Storage Department Team"));
?>

--
<?php p($theme->getName() . ' - ' . $theme->getSlogan()); ?>
<?php print_unescaped("\n".$theme->getBaseUrl());
