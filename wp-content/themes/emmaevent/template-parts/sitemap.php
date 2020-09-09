<!-- AUTHOR -->
<h2 class="sitemap__title"><?php _e('Author', 'emmaevent'); ?></h2>
<!-- <ul>
    <?php //wp_list_authors(array(
    //'exclude_admin' => false
    //)); 
    ?>
</ul> -->
<ul>
  Emmanuelle Berthereau
</ul>

<!-- CPT -->
<?php
foreach (get_post_types(array('public' => true)) as $post_type) {
  if (in_array($post_type, array('post', 'page', 'attachment'))) {
    continue;
  }

  $pt = get_post_type_object($post_type);

  echo '<h2 class="sitemap__title">' . $pt->labels->name . '</h2>';
  echo '<ul>';
  query_posts('post_type=' . $post_type . '&posts_per_page=-1');
  while (have_posts()) {
    the_post();
    echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
  }
  echo '</ul>';
}
?>


<!-- PAGES -->
<h2 class="sitemap__title"><?php _e('Pages', 'emmaevent'); ?></h2>
<ul>
  <?php
  wp_list_pages(array(
    'exclude' => '',
    'title_li' => '',
  )); ?>
</ul>


<!-- BLOG -->
<h2 class="sitemap__title"><?php _e('Blog', 'emmaevent'); ?></h2>
<?php
$cats = get_categories('exclude=');
foreach ($cats as $cat) {
  echo '<h3>' . $cat->cat_name . '</h3>';
  echo '<ul>';
  query_posts('posts_per_page=-1&cat=' . $cat->cat_ID);
  while (have_posts()) {
    the_post();
    $category = get_the_category();
    if ($category[0]->cat_ID == $cat->cat_ID) {
      echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
    }
  }
  echo '</ul>';
}
?>