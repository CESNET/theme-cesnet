<?php
/** @var OC_L10N $l */
/** @var array $_ */
$l = $_['overwriteL10N'];

p($l->t('Hello %s,', array($_['username'])));
p("\n");
p("\n");

p($l->t("we are sending you a summary of recent activities on your account:", array($_['owncloud_installation'])));
p("\n");
p("\n");

foreach ($_['activities'] as $activityData) {
	p($l->t('* %1$s - %2$s', $activityData));
	p("\n");
}
if ($_['skippedCount']) {
	p($l->n('* and %n more ', '* and %n more ', $_['skippedCount']));
	p("\n");
}
p("\n");
p("\n");
p($l->t("You can configure, which notifications you wish to receive, on the website under your 'Personal' settings."));
p("\n");
p("\n");
p($l->t("Your CESNET Storage Department Team"));
p("\n--\n");
p($theme->getName());
print_unescaped("\n".$theme->getBaseUrl());
