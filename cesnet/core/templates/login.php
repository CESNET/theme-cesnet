<?php /** @var $l OC_L10N */ ?>
<?php
vendor_script('jsTimezoneDetect/jstz');
script('core', [
	'visitortimezone',
	'lostpassword',
	'login'
]);
?>

<!--[if IE 8]><style>input[type="checkbox"]{padding:0;}</style><![endif]-->
<?php if (!empty($_['alt_login'])) { ?>
<form id="alternative-logins">
	<fieldset>
		<ul>
			<?php foreach($_['alt_login'] as $login): ?>
				<?php if ((string)$login['name'] === 'Shibboleth Login') : ?>
					<li class="login-button">
					<a class="eduid-logo png button" href="<?php print_unescaped($login['href']); ?>">
						<span><?php p($l->t('EduID Federated Login')); ?></span>
					</a>
					</li>
					<li><p class="info"><a href="<?php print_unescaped($login['href']); ?>" >
						<?php p($l->t('Log-in with your eduID account')); ?></a></p></li>
				<?php else: ?>
					<li><a class="button" href="<?php print_unescaped($login['href']); ?>" ><?php p($login['name']); ?></a></li>
				<?php endif; ?>
			<?php endforeach; ?>
		</ul>
	</fieldset>
</form>
<div class="legal-notice">
	<p class="info"><?php p($l->t('By logging in you agree with the ')); ?>
	<a href="https://du.cesnet.cz/cs/provozni_pravidla/start"><?php p($l->t('terms of use')); ?></a>
	</p>
</div>
<?php }
