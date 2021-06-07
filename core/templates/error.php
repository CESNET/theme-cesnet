<h1 class="title is-1">Error</h1>
<ul class="message is-danger">
	<?php foreach ($_["errors"] as $error):?>
        <li class='message-body'>
			<?php p($error['error']) ?><br>
			<?php if (isset($error['hint']) && $error['hint']): ?>
                <p class='hint'><?php p($error['hint']) ?></p>
			<?php endif;?>
        </li>
	<?php endforeach ?>
</ul>
<a class="button" <?php print_unescaped(\OC_User::getLogoutAttribute()); ?>"><?php p($l->t('Return to login page')); ?></a>
