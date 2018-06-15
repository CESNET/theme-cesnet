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
<form method="post" name="login">
	<fieldset>
	<?php if (!empty($_['redirect_url'])) {
		print_unescaped('<input type="hidden" name="redirect_url" value="' . \OCP\Util::sanitizeHTML($_['redirect_url']) . '">');
	} ?>
		<?php foreach($_['messages'] as $message): ?>
			<div class="warning">
				<?php p($message); ?><br>
			</div>
		<?php endforeach; ?>
		<?php if (isset($_['internalexception']) && ($_['internalexception'])): ?>
			<div class="warning">
				<?php p($l->t('An internal error occurred.')); ?><br>
				<small><?php p($l->t('Please try again or contact your administrator.')); ?></small>
			</div>
		<?php endif; ?>
		<div id="message" class="hidden">
			<img class="float-spinner" alt=""
				src="<?php p(image_path('core', 'loading-dark.gif'));?>">
			<span id="messageText"></span>
			<!-- the following div ensures that the spinner is always inside the #message div -->
			<div style="clear: both;"></div>
		</div>

		<?php if (!empty($_['csrf_error'])) { ?>
		<p class="warning">
			<?php p($l->t('You took too long to login, please try again now')); ?>
		</p>
		<?php } ?>
		<?php if (!empty($_['accessLink'])) { ?>
			<p class="warning">
				<?php p($l->t("You are trying to access a private link. Please log in first.")) ?>
			</p>
		<?php } ?>
		<?php if ($_['rememberLoginAllowed'] === true) : ?>
		<div class="remember-login-container">
			<?php if ($_['rememberLoginState'] === 0) { ?>
			<input type="checkbox" name="remember_login" value="1" id="remember_login" class="checkbox checkbox--white">
			<?php } else { ?>
			<input type="checkbox" name="remember_login" value="1" id="remember_login" class="checkbox checkbox--white" checked="checked">
			<?php } ?>
			<label for="remember_login"><?php p($l->t('Stay logged in')); ?></label>
		</div>
		<?php endif; ?>
		<input type="hidden" name="timezone-offset" id="timezone-offset"/>
		<input type="hidden" name="timezone" id="timezone"/>
		<input type="hidden" name="requesttoken" value="<?php p($_['requesttoken']) ?>">
	</fieldset>
</form>
<?php if (!empty($_['alt_login'])) { ?>
<form id="alternative-logins">
	<fieldset>
		<ul>
			<?php foreach($_['alt_login'] as $login): ?>
				<?php if (isset($login['img'])) { ?>
					<li><a href="<?php print_unescaped($login['href']); ?>" ><img src="<?php p($login['img']); ?>"/></a></li>
				<?php } else { ?>
					<li><a class="button" href="<?php print_unescaped($login['href']); ?>" ><?php p($login['name']); ?></a></li>
				<?php } ?>
			<?php endforeach; ?>
		</ul>
	</fieldset>
</form>
<div id="legal-notice">
	<p class="info"><?php p($l->t('By logging in you agree with the ')); ?>
	<a href="<?php p($l->t('https://du.cesnet.cz/en/provozni_pravidla/start')); ?>" ><?php p($l->t('terms of use')); ?></a>
	</p>
</div>
<?php }
