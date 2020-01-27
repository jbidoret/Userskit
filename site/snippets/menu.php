<nav role="navigation">
	<ul class="menu cf">
		<?php foreach($pages->visible() as $p): ?>
		<li><a<?php e($p->isOpen(), ' class="active"') ?> href="<?= $p->url() ?>"><?= $p->title()->h() ?></a></li>
		<?php endforeach ?>

		<?php if($user = $kirby->user()): ?>

		<?php if($user->isAdmin()): ?>
		<li><a href="<?= url('panel') ?>"><?= t('Panel') ?></a></li>
		<?php endif ?>

		<li><a<?php e($pages->find('account')->isOpen(), ' class="active"') ?>  href="<?= url('account') ?>"><?= t('Account') ?></a></li>
		<li><a href="<?= url('logout') ?>"><?= t('Logout') ?></a></li>

		<?php else: ?>

		<li><a<?php e($pages->find('login')->isOpen(), ' class="active"') ?>  href="<?= url('login') ?>"><?= t('Sign in') ?></a></li>
		<li><a<?php e($pages->find('account/signup')->isOpen(), ' class="active"') ?>  href="<?= url('account/signup') ?>"><?= t('Sign up') ?></a></li>
    <li><a<?php e($pages->find('account/registrationbyemail')->isOpen(), ' class="active"') ?>  href="<?= url('account/registrationbyemail') ?>"><?= t('Activate by email') ?></a></li>

		<?php endif ?>
	</ul>
</nav>
