<?php snippet('header') ?>

<main class="main" role="main">

	<?php if(isset($success)): ?>
  <h1 class="center"><?= t('Reset successfully') ?></h1>
	<div class="alert success">
		<p><?= $success ?></p>
	</div>
	<?php else: ?>

  <h1 class="center"><?= $page->title() ?></h1>

	<?php if($error): ?>
	<div class="alert error">
	  <p><?= $error ?></p>
	</div>
	<?php endif ?>

	<form method="POST">

		<div class="field">
			<label for="email"><?= t('Email Address') ?> <abbr title="<?= t('label.title.required') ?>">•</abbr></label>
			<input type="email" id="email" name="email" value="<?= esc(get('email')) ?>" required>
		</div>

		<div class="field honeypot">
			<label for="subject"><?= t('Honeypot') ?></label>
			<input type="text" id="subject" name="subject">
		</div>

    <div class="submit">
      <button type="submit" name="reset" value="reset"><?= t('Send Instructions') ?></button>
      <p><abbr title="<?= t('label.title.required') ?>">•</abbr> <?= t('Required fields.') ?></p>
    </div>

  </form>

	<?php endif ?>

</main>

<?php snippet('footer') ?>