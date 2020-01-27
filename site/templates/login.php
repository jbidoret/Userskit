<?php snippet('header') ?>

<main class="main" role="main">

  <h1 class="center"><?= $page->title() ?></h1>

  <?php if($error): ?>
  <div class="alert error">
    <p><?= $error ?></p>
  </div>
  <?php endif ?>

  <form method="POST">

    <div class="field">
      <label for="username"><?= t('Email') ?> <abbr title="<?= t('label.title.required') ?>">•</abbr></label>
      <input type="text" id="username" name="username" value="<?= esc(get('username')) ?>" required>
    </div>

    <div class="field">
      <label for="password">
      <?= t('Password') ?> <abbr title="<?= t('label.title.required') ?>">•</abbr>
        <small><a href="<?= url('account/reset') ?>"><?= t('Forgot password ?') ?></a></small>
      </label>
      <input type="password" id="password" name="password" required>
    </div>

    <div class="submit">
      <button type="submit" name="login" value="login"><?= t('Sign in') ?></button>
      <p><abbr title="<?= t('Required fields.') ?>">•</abbr> </p>
    </div>

  </form>

  <div class="otherlink"><?= tt("Not a member? Sign up now", ['signupUrl' => url('account/signup') ]) ?></div>

</main>

<?php snippet('footer') ?>