<?php
$networks = [
  'facebook' => 'Facebook',
  'instagram' => 'Instagram'
];
?>
<div class="footer__social">
  <?php foreach ($networks as $name => $label) : ?>
    <?php if (!empty($instance[$name])) : ?>
      <a href="<?= esc_url($instance[$name]) ?>" title="<?= sprintf(esc_attr('Me suivre sur %s', 'emmaevent'), $label); ?>">
        <?= emmaevent_icon($name) ?>
      </a>
    <?php endif ?>
    <?php endforeach; ?>
</div>