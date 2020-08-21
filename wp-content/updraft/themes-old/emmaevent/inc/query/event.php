<?php
add_action('pre_get_posts', function (WP_Query $query) {
  if (
    is_admin() || 
    !$query->is_main_query() ||
    !is_post_type_archive('event')
  ) {
    return;
  }
  $query->set('posts_per_page', 3);
});
