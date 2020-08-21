<?php
require_once('inc/walkers/CommentWalker.php');
$count = absint(get_comments_number());
?>
<div class="comments">
    <div class="comments__title">
        <?php if (get_comments_number() > 0) : ?>
            <?= sprintf(_n('%d Commentaire', '%d Commentaires', $count), $count); ?>
        <?php else : ?>
            <?= __('Leave a reply', 'emmaevent'); ?>
        <?php endif; ?>
    </div>

    <div class="comments__list">
    <?php wp_list_comments(['style' => 'div', 'walker' => new EmmaeventCommentWalker()]); ?>
    </div>

    <?php emmaevent_paginate_comments(); ?>

    <?php if (comments_open()) : ?>
        <?php comment_form(); ?>
    <?php endif ?>
</div>