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

    <?php wp_list_comments(['style' => 'div', 'walker' => new EmmaeventCommentWalker()]); ?>

    <?php if (comments_open()) : ?>
        <?php comment_form(['title_reply' => '']); ?>
    <?php endif ?>
</div>