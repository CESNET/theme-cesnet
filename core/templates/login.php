<?php /** @var $l \OCP\IL10N */ ?>
<?php
vendor_script('jsTimezoneDetect/jstz');
script('core', [
	'visitortimezone',
	'lostpassword',
	'login',
	'browser-update'
]);
?>

<!--[if IE 8]><style>input[type="checkbox"]{padding:0;}</style><![endif]-->
<?php if (!empty($_['alt_login'])) { ?>
<form id="alternative-logins">
	<fieldset>
		<ul>
			<?php foreach($_['alt_login'] as $login): ?>
					<li><a id="login-button" class="button" href="<?php print_unescaped($login['href']); ?>" ><?php p($login['name']); ?></a></li>
			<?php endforeach; ?>
			<li>
				<div id="legal-notice">
					<p class="info"><?php p($l->t('By logging in you agree with the ')); ?>
					<a href="<?php p($l->t('https://du.cesnet.cz/en/provozni_pravidla/start')); ?>" ><?php p($l->t('terms of use')); ?></a>
					<p class="info"><?php print_unescaped($l->t(' and with the <a href="https://www.cesnet.cz/sdruzeni/ochrana-osobnich-udaju/" target="_blank">Privacy policy</a> for the service.')); ?></p>
					</p>
				</div>
			</li>
		</ul>

	</fieldset>
</form>

<?php }
