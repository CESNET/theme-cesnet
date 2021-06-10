<!DOCTYPE html>
<html class="ng-csp" data-placeholder-focus="false" lang="<?php p($_['language']); ?>">
<head data-requesttoken="<?php p($_['requesttoken']); ?>">
    <meta charset="utf-8">
    <title><?php p($theme->getTitle()); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="referrer" content="never">

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

    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, maximum-scale=1.0">
    <meta name="theme-color" content="<?php p($theme->getMailHeaderColor()); ?>">
    <link rel="icon" href="<?php print_unescaped(image_path('', 'favicon.ico')); /* IE11+ supports png */ ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php print_unescaped(image_path('', 'favicon-touch.png')); ?>">
    <link rel="mask-icon" sizes="any" href="<?php print_unescaped(image_path('', 'favicon-mask.svg')); ?>"
          color="#1B223D">
	<?php foreach ($_['cssfiles'] as $cssfile): ?>
        <link rel="stylesheet" href="<?php print_unescaped($cssfile); ?>">
	<?php endforeach; ?>
	<?php foreach ($_['printcssfiles'] as $cssfile): ?>
        <link rel="stylesheet" href="<?php print_unescaped($cssfile); ?>" media="print">
	<?php endforeach; ?>
	<?php foreach ($_['jsfiles'] as $jsfile): ?>
        <script src="<?php print_unescaped($jsfile); ?>"></script>
	<?php endforeach; ?>
	<?php print_unescaped($_['headers']); ?>
</head>
<body id="body-public">
<?php include('layout.noscript.warning.php'); ?>
<?php print_unescaped($_['content']); ?>
</body>
</html>