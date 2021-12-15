<?php /** @var $l IL10N */

use OCP\IL10N;
use OCP\Util; ?>
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
<div class="columns px-4">
    <div class="column">
        <!-- Hero content -->
        <h1 class="hero-title title has-text-weight-bold is-size-1-desktop is-size-2-tablet is-size-3-mobile has-text-left">
            ownCloud @ <b>CESNET</b>
        </h1>
        <h2 class="subtitle is-size-3-desktop is-size-4-tablet has-text-weight-light has-text-left">
			<?php p($l->t('Sync, Share & Backup all of your academic data.')); ?>
        </h2>
        <div class="has-half-opacity has-text-left is-size-7 has-text-weight-bold">▘▘▖▘▘▘▘▘▘▘▖▘▘▘▘▘▖▘▘▘▖▘▘▖▖▖▘▘▘▘▖▘▘▖▖▘▘▖▘▘▘▘▘▘▘▖▘▖▘▘▘▖▖▘▖▖</div>
        <form class="has-text-left">
            <fieldset>
				<?php if (!empty($_['redirect_url'])) {
					print_unescaped('<input type="hidden" name="redirect_url" value="' . Util::sanitizeHTML($_['redirect_url']) . '">');
				} ?>
				<?php if (isset($_['apacheauthfailed']) && ($_['apacheauthfailed'])): ?>
                    <div class="warning">
						<?php p($l->t('Server side authentication failed!')); ?><br>
                        <small><?php p($l->t('Please contact your administrator.')); ?></small>
                    </div>
				<?php endif; ?>
				<?php foreach ($_['messages'] as $message): ?>
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
                         src="<?php p(image_path('core', 'loading-dark.gif')); ?>">
                    <span id="messageText"></span>
                    <!-- the following div ensures that the spinner is always inside the #message div -->
                    <div style="clear: both;"></div>
                </div>
				<?php if (isset($_['licenseMessage'])): ?>
                    <div class="warning">
						<?php print_unescaped($_['licenseMessage']); ?>
                    </div>
				<?php endif; ?>
				<?php if (!empty($_['csrf_error'])) {
					?>
                    <p class="warning">
						<?php p($l->t('You took too long to log in, please try again now')); ?>
                    </p>
					<?php
				} ?>
				<?php if (!empty($_['accessLink'])) {
					?>
                    <p class="warning">
						<?php p($l->t("You are trying to access a private link. Please log in first.")) ?>
                    </p>
					<?php
				} ?>
                <div class="level">
                    <div class="level-left">
                        <a class="button my-6 is-large level-item is-uppercase"
                           href="<?php print_unescaped($_['alt_login'][0]['href']); ?>"><?php p($l->t('Log in')); ?></a>
                    </div>
                </div>
                <article class="message is-xsmall">
                    <div class="message-body">
						<?php p($l->t('By logging in, you confirm that you have been informed of the ')); ?>
                        <a target="_blank" href="<?php p($l->t('https://du.cesnet.cz/en/provozni_pravidla/start')); ?>" >
							<?php p($l->t('terms of service')); ?>
                        </a>
						<?php print_unescaped($l->t(' and of the information about the <a href="https://www.cesnet.cz/sdruzeni/ochrana-osobnich-udaju/" target="_blank">processing of personal data</a>.')); ?>
                    </div>
                </article>

                <input type="hidden" name="timezone-offset" id="timezone-offset"/>
                <input type="hidden" name="timezone" id="timezone"/>
                <input type="hidden" name="requesttoken" value="<?php p($_['requesttoken']) ?>">
            </fieldset>
        </form>
    </div>
    <div class="column is-hidden-touch mr-6">
        <div class="tile">
            <!-- Hero Cubes: https://codepen.io/jonambas/pen/OPqbzx-->
            <div class="layer bottom">
                <div class="cube nw"></div>
                <div class="cube w"></div>
                <div class="cube n"></div>
                <div class="cube ne"></div>
                <div class="cube "></div>
                <div class="cube sw"></div>
                <div class="cube s"></div>
                <div class="cube e"></div>
                <div class="cube se"></div>
            </div>
            <div class="layer">
                <div class="cube nw"></div>
                <div class="cube w"></div>
                <div class="cube n"></div>
                <div class="cube ne"></div>
                <div class="cube "></div>
                <div class="cube sw"></div>
                <div class="cube s"></div>
                <div class="cube e"></div>
                <div class="cube se"></div>
            </div>
            <div class="layer top">
                <div class="cube nw"></div>
                <div class="cube w"></div>
                <div class="cube n"></div>
                <div class="cube ne"></div>
                <div class="cube "></div>
                <div class="cube sw"></div>
                <div class="cube s"></div>
                <div class="cube e"></div>
                <div class="cube se"></div>
            </div>
        </div>
    </div>
</div>
