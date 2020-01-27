<?php $site = site(); ?>
<?= tt('Hi Name,', ['name' => $name]) ?>

<?= $text ?>
<?= tt('Active link: tokenUrl', ['tokenUrl' => $site->url() ."/token/". $token]) ?>