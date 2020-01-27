<?php snippet('header') ?>

<main class="main" role="main">

	<?php if(isset($success)): ?>
  <h1 class="center">🎉 Successfully updated 🎉</h1>
  <div class="alert success">
    <p><?= $success ?></p>
  </div>
  <?php else: ?>

  <h1 class="center"><?= $page->title() ?></h1>

  <?php if(isset($error)): ?>
  <div class="alert error">
  	<p><?= $error ?></p>
  </div>
  <?php endif ?>

	<form method="POST">

		<div class="field">
			<label for="password"><?= t('New password') ?> <abbr title="<?= t('label.title.required') ?>">•</abbr></label>
			<input type="password" id="password" name="password" required>
		</div>

    <div class="field">
    	<label for="validate"><?= t('Retype your password') ?> <abbr title="<?= t('label.title.required') ?>">•</abbr></label>
    	<input type="password" id="validate" name="validate" required>
    </div>

    <div class="submit">
      <button type="submit" name="update" value="update"><?= t('') ?></button>
      <p><abbr title="<?= t('label.title.required') ?>">•</abbr> <?= t('Required fields.') ?></p>
    </div>

  </form>

  <div class="otherlink"><a href="<?= url('account') ?>"><?= t('Back to account') ?></a></div>

	<?php endif ?>

</main>

<?php snippet('footer') ?>