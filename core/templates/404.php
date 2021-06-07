<?php
/** @var $_ array */
/** @var $l \OCP\IL10N */
/** @var $theme OC_Theme */
// @codeCoverageIgnoreStart
if (!isset($_)) {//also provide standalone error page
	require_once '../../lib/base.php';

	$tmpl = new OC_Template('', '404', 'guest');
	$tmpl->printPage();
	exit;
}
// @codeCoverageIgnoreEnd
?>
<?php if (isset($_['content'])): ?>
	<?php print_unescaped($_['content']) ?>
<?php else: ?>
	<h1 class="title is-1"><?php p($l->t('File not found')); ?></h1>
	<ul class="message is-danger">
		<li class="message-body">
			<p class="hint"><?php p($l->t('The specified document has not been found on the server.')); ?></p>
			<p class="hint"><a href="<?php p(\OC::$server->getURLGenerator()->linkTo('', 'index.php')) ?>"><?php p($l->t('You can click here to return to %s.', [$theme->getName()])); ?></a></p>
		</li>
	</ul>
<?php endif; ?>