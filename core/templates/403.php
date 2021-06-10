<?php
// @codeCoverageIgnoreStart
if (!isset($_)) {//also provide standalone error page
	require_once '../../lib/base.php';

	$tmpl = new OC_Template('', '403', 'guest');
	$tmpl->printPage();
	exit;
}
// @codeCoverageIgnoreEnd
?>
<h1 class="title is-1"><?php p($l->t('Access forbidden')); ?></h1>
<ul class="message is-danger">
	<li class='message-body'>
		<br>
		<p class='hint'><?php if (isset($_['file'])) {
				p($_['file']);
			}?></p>
	</li>
</ul>
<a class="button" <?php print_unescaped(\OC_User::getLogoutAttribute()); ?>"><?php p($l->t('Return to login page')); ?></a>
