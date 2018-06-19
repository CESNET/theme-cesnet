<?php
// @codeCoverageIgnoreStart
if(!isset($_)) {//also provide standalone error page
	require_once '../../lib/base.php';

	$tmpl = new OC_Template( '', '403', 'guest' );
	$tmpl->printPage();
	exit;
}
// @codeCoverageIgnoreEnd
?>
<ul>
	<li class='error'>
		<h1><b><?php p($l->t('Access forbidden')); ?></b></h1>
	<li class='error'>
	<?php if(isset($_['file'])): ?>
		<p class='hint'><?php p($_['file'])?></p>
	<?php elseif(isset($_['unresolved_uids'])): ?>
		<div class="hint">
		<p class="hint">
		<?php p($l->t('You have multiple identities associated with a different ownCloud accounts. Because of that, we were unable to reliably determine to which ownCloud account we should log you in.')); ?>
		<br><br>
		<?php p($l->t('The problematic identities are')); ?>
		</p><br><ul>
		<?php foreach ($_['unresolved_uids'] as $uid => $ocuid): ?>
			<li class="warning"><?php p($uid); ?> &rarr; <?php p($ocuid); ?></li>
		<?php endforeach; ?>
		</ul>
		<p class="notice">
		(<?php p($l->t('eduID identity')); ?> &rarr; <?php p($l->t('ownCloud account')); ?>)
		</p>
		<br><br>
		<p class="hint">
		<?php p($l->t('Please contact us on ')); ?><a href="mailto:support@cesnet.cz">support@cesnet.cz</a>
		<?php p($l->t(' to resolve this situation.')); ?>
		</p>
		</div>
	<?php else: ?>
		<p class="hint"><?php p($l->t('To use ownCloud service it is required to have valid affiliation (employee, student) with one of the membership organization that are fulfilling the Access Policy (AP) for the CESNET Large Infrastructure.')); ?></p>
		<br>
		<p class="hint"><?php p($l->t('Based of those requirements, our services cannot be used by, e.g. former employees, graduates or library readers. If you have been denied access but you consider yourself to be eligible to use our services, please feel free to contact us at ')); ?>
			<a href="mailto:support@cesnet.cz?Subject=OwnCloud Access error #<?php p(\OC::$server->getRequest()->getId()); ?>">support@cesnet.cz</a>
		</p>
	<?php endif; ?>
	</li>
	<li><a class="button" <?php print_unescaped(OC_User::getLogoutAttribute()); ?>><?php p($l->t('Return to login page')); ?></a></li>
</ul>
