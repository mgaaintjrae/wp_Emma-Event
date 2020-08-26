<?php  // FOR PREVIOUS POST
$prev_post = get_previous_post();
$id = $prev_post->ID;
$permalink = get_permalink($id);
?>
<?php // FOR NEXT POST
$next_post = get_next_post();
$nid = $next_post->ID;
$permalink = get_permalink($nid);
?>
<div class="next-timeline">
    <?php next_post_link('%link', __('Next <span class="meta-nav">&rarr;</span>', 'emmaevent')); ?>
    <div class="title-secondary"><?php echo $next_post->post_title; ?></div>
</div>
<div class="previous-timeline">
    <?php previous_post_link('%link', __('<span class="meta-nav">&larr;</span> Previous', 'emmaevent')); ?>
    <div class="title-secondary"><?php echo $prev_post->post_title; ?></div>
</div>