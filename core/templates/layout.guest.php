<?php /** @var $l IL10N */

use OCP\IL10N; ?>
<!DOCTYPE html>
<html class="ng-csp" data-placeholder-focus="false" lang="<?php p($_['language']); ?>">
<head data-requesttoken="<?php p($_['requesttoken']); ?>">
    <meta charset="utf-8">
    <title><?php p($theme->getTitle()); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="referrer" content="never">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, maximum-scale=1.0">
	<?php if ($theme->getiTunesAppId() !== '') {
		?>
        <meta name="apple-itunes-app" content="app-id=<?php p($theme->getiTunesAppId()); ?>">
		<?php
	} ?>
    <!-- Primary Meta Tags -->
    <meta name="title" content="<?php p($theme->getTitle()); ?>">
    <meta name="description"
          content="Cloud storage sync&share service for eduID users built on top of the ownCloud software.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php p($theme->getBaseUrl()); ?>">
    <meta property="og:title" content="<?php p($theme->getTitle()); ?>">
    <meta property="og:description"
          content="Cloud storage sync&share service for eduID users built on top of the ownCloud software.">
    <meta property="og:image" content="">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php p($theme->getBaseUrl()); ?>">
    <meta property="twitter:title" content="<?php p($theme->getTitle()); ?>">
    <meta property="twitter:description"
          content="Cloud storage sync&share service for eduID users built on top of the ownCloud software.">
    <meta property="twitter:image" content="">

    <meta name="theme-color" content="<?php p($theme->getMailHeaderColor()); ?>">
    <link rel="icon" href="<?php print_unescaped(image_path('', 'favicon.ico')); /* IE11+ supports png */ ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php print_unescaped(image_path('', 'favicon-touch.png')); ?>">
    <link rel="mask-icon" sizes="any" href="<?php print_unescaped(image_path('', 'favicon-mask.svg')); ?>"
          color="#1B223D">
	<?php foreach ($_['cssfiles'] as $cssfile): ?>
        <link rel="stylesheet" href="<?php print_unescaped($cssfile); ?>">
	<?php endforeach; ?>
    <link rel="stylesheet" href="/apps/theme-cesnet/core/css/bulma.min.css">
    <link rel="stylesheet" href="/apps/theme-cesnet/core/css/cubes.min.css">
	<?php foreach ($_['printcssfiles'] as $cssfile): ?>
        <link rel="stylesheet" href="<?php print_unescaped($cssfile); ?>" media="print">
	<?php endforeach; ?>
	<?php foreach ($_['jsfiles'] as $jsfile): ?>
        <script src="<?php print_unescaped($jsfile); ?>"></script>
	<?php endforeach; ?>
	<?php print_unescaped($_['headers']); ?>
</head>
<body id="<?php p($_['bodyid']); ?>">
<?php include('layout.noscript.warning.php'); ?>
<section class="hero is-primary is-fullheight">
    <!-- Hero head: will stick at the top -->
    <div class="hero-head">
        <header role="banner" class="navbar">
            <div class="container">
                <div class="navbar-brand">
                    <!-- Navbar Logo -->
                    <a href="<?php p($theme->getBaseUrl()); ?>" class="navbar-item">
                        <div class="logo"></div>
                    </a>
                    <h1 class="hidden-visually">
						<?php print_unescaped($theme->getHTMLName()); ?>
                    </h1>
                    <div id="logo-claim"
                         style="display:none;"><?php print_unescaped($theme->getLogoClaim()); ?>
                    </div>
                    <!-- Navbar menu -->
                    <span class="navbar-burger" data-target="navbarMenu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </div>
                <!-- Navbar menu options -->
                <div id="navbarMenu" class="navbar-menu">
                    <div class="navbar-end">
                        <a class="navbar-item" target="_blank" href="https://du.cesnet.cz/en/navody/owncloud/start">
							<?php p($l->t('Documentation')); ?>
                        </a>
                        <a class="navbar-item"
                           target="_blank"
                           href="https://du.cesnet.cz/en/navody/faq/start#owncloud1">
                            FAQ
                        </a>
                        <a class="navbar-item" href="mailto:support@cesnet.cz">
							<?php p($l->t('Contact')); ?>
                        </a>
                        <span class="navbar-item">
                            <a href="/index.php/apps/cesnet-openidconnect/redirect"
                               class="button is-primary is-inverted">
                                <span class="icon icon-lock-open svg">
                                </span>
                                <span><?php p($l->t('Log in')); ?></span>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <!-- Hero content: will be in the middle -->
    <div class="hero-body">
        <div class="container has-text-centered">
			<?php print_unescaped($_['content']); ?>
        </div>
    </div>
    <footer class="hero-foot" role="contentinfo">
        <div class="content has-text-weight-light has-text-centered">
            <p class="is-xsmall">
				<?php print_unescaped($theme->getLongFooter()); ?>
            </p>
        </div>
    </footer>
</section>
</body>
</html>