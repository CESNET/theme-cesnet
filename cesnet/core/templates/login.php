<!--[if IE 8]><style>input[type="checkbox"]{padding:0;}</style><![endif]-->
<form method="post" name="login">
	<fieldset>
	<?php if (!empty($_['redirect_url'])) {
		print_unescaped('<input type="hidden" name="redirect_url" value="' . OC_Util::sanitizeHTML($_['redirect_url']) . '" />');
	} ?>
		<?php if (isset($_['invalidcookie']) && ($_['invalidcookie'])): ?>
		<div class="warning">
			<?php p($l->t('Automatic logon rejected!')); ?><br>
			<small><?php p($l->t('If you did not change your password recently, your account may be compromised!')); ?></small>
			<br>
			<small><?php p($l->t('Please change your password to secure your account again.')); ?></small>
		</div>
		<?php endif; ?>
		<?php if (isset($_['apacheauthfailed']) && ($_['apacheauthfailed'])): ?>
			<div class="warning">
				<?php p($l->t('Server side authentication failed!')); ?><br>
				<small><?php p($l->t('Please contact your administrator.')); ?></small>
			</div>
		<?php endif; ?>
		<p id="message" class="hidden">
			<img class="float-spinner" src="<?php p(\OCP\Util::imagePath('core', 'loading-dark.gif'));?>"/>
			<span id="messageText"></span>
			<!-- the following div ensures that the spinner is always inside the #message div -->
			<div style="clear: both;"></div>
		</p>
<!-- Modified / hidden login fields when saml app enabled -->	
		<?php if (\OC_App::isEnabled('user_saml')): ?>
		<?php $greeter=$l->t('Log in with your eduID account'); ?>
		<a id="login-saml-action"
			href="simplesamlphp/module.php/core/as_login.php?AuthId=default-sp&ReturnTo=<?php p(OCP\Util::linkToAbsolute('','index.php',array('app'=>'user_saml'))) ?>">
			<img id="login-saml-img" src="<?php p(image_path('core', 'eduid.png'));?>"
				title="<?php p($greeter); ?>" alt="<?php p($greeter); ?>"/>
		</a>
		<p id="greeter"><?php p($greeter); ?></p>
		<p class="info"><?php p($l->t('By logging in you agree with'));?>
			<a href="https://du.cesnet.cz/wiki/doku.php/cs/provozni_pravidla"><?php p($l->t('terms of use'));?></a>
		</p>
		<?php else: ?>
		<p class="infield grouptop">
			<input type="text" name="user" id="user" placeholder=""
				   value="<?php p($_['username']); ?>"<?php p($_['user_autofocus'] ? ' autofocus' : ''); ?>
				   autocomplete="on" required/>
			<label for="user" class="infield"><?php p($l->t('Username')); ?></label>
			<img class="svg" src="<?php print_unescaped(image_path('', 'actions/user.svg')); ?>" alt=""/>
		</p>

		<p class="infield groupbottom">
			<input type="password" name="password" id="password" value="" placeholder=""
				   required<?php p($_['user_autofocus'] ? '' : ' autofocus'); ?> />
			<label for="password" class="infield"><?php p($l->t('Password')); ?></label>
			<img class="svg" id="password-icon" src="<?php print_unescaped(image_path('', 'actions/password.svg')); ?>" alt=""/>
		</p>

		<?php if (isset($_['invalidpassword']) && ($_['invalidpassword'])): ?>
		<a class="warning" href="<?php print_unescaped(OC_Helper::linkToRoute('core_lostpassword_index')) ?>">
			<?php p($l->t('Lost your password?')); ?>
		</a>
		<?php endif; ?>
		<?php if ($_['rememberLoginAllowed'] === true) : ?>
		<input type="checkbox" name="remember_login" value="1" id="remember_login" checked />
		<label for="remember_login"><?php p($l->t('remember')); ?></label>
		<?php endif; ?>
<!-- End of modifications -->
		<input type="submit" id="submit" class="login primary" value="<?php p($l->t('Log in')); ?>"/>
		<?php endif; ?>
		<input type="hidden" name="timezone-offset" id="timezone-offset"/>
	</fieldset>
</form>
<?php if (!empty($_['alt_login'])) { ?>
<form id="alternative-logins">
	<fieldset>
		<legend><?php p($l->t('Alternative Logins')) ?></legend>
		<ul>
			<?php foreach($_['alt_login'] as $login): ?>
				<li><a class="button" href="<?php print_unescaped($login['href']); ?>" ><?php p($login['name']); ?></a></li>
			<?php endforeach; ?>
		</ul>
	</fieldset>
</form>
<?php } ?>

<?php
OCP\Util::addscript('core', 'visitortimezone');

