<?php $site = site(); ?>
<?= tt('Hi Name,', ['name' => $name]) ?>

<?= $text ?>
<?= tt('Reset your password: tokenUrl', ['tokenUrl' => $site->url() ."/token/". $token]) ?>