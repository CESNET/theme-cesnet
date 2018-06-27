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
		<?php foreach ($_['unresolved_uids'] as $uid => $ocids): ?>
			<?php foreach ((array)$ocids as $ocid): ?>
				<li class="warning"><?php p($ocid->getSamlUid()); ?> &rarr; <?php p($uid); ?></li>
			<?php endforeach; ?>
		<?php endforeach; ?>
		</ul>
		<p class="notice">
		(<?php p($l->t('eduID identity')); ?> &rarr; <?php p($l->t('ownCloud account')); ?>)
		</p>
		<br><br>
		<p class="hint">
		<?php p($l->t('You have two options how to solve this issue ')); ?>
		</p><p class="hint">
		<?php p($l->t('A. We can merge you all identities into the one, then you can see all your data in one account ')); ?>
		<?php p($l->t('Please contact us on ')); ?><a class="underline" href="mailto:support@cesnet.cz">support@cesnet.cz</a>
		<?php p($l->t(' to resolve this situation.')); ?>
		</p><p class="hint">
		<?php p($l->t('B. If you have serious reasons to use two separate accounts in CESNET e-infrastructure, please contact user support at: du-support@cesnet.cz')); ?>
		<?php print_unescaped($l->t('Please continue to the following <a class="underline" href="https://du.cesnet.cz/en/navody/owncloud/oc_identity">tutorial</a>')); ?>
		</p>
		</div>
	<?php else: ?>
		<?php if(isset($_['missing_claims']) && in_array('IsCesnetEligibleLastSeen timestamp', $_['missing_claims'])): ?>
		<p class="hint"><?php p($l->t('To use ownCloud service it is required to have valid affiliation (employee, student) with one of the membership organization that are fulfilling the Access Policy (AP) for the CESNET Large Infrastructure.')); ?></p>
		<br>
		<p class="hint"><?php p($l->t('Based of those requirements, our services cannot be used by, e.g. former employees, graduates or library readers. If you have been denied access but you consider yourself to be eligible to use our services, please feel free to contact us at ')); ?>
			<a href="mailto:support@cesnet.cz?Subject=OwnCloud Access error #<?php p(\OC::$server->getRequest()->getId()); ?>">support@cesnet.cz</a>
		</p>
		<?php endif; ?>
		<?php if(isset($_['missing_claims'])): ?>
			<br>
			<p class="hint"><?php p($l->t('In order to access this service, we require you to provide the following missing information:')); ?></p>
			<br>
			<ul>
			<?php foreach ((array)$_['missing_claims'] as $hrClaim): ?>
				<li class="warning"><?php p($l->t($hrClaim)); ?></li>
			<?php endforeach; ?>
			</ul>
		<?php endif; ?>
		<br>

	<?php endif; ?>
	</li>
	<li><a class="button" <?php print_unescaped(\OC_User::getLogoutAttribute()); ?>"><?php p($l->t('Return to login page')); ?></a></li>
</ul>
