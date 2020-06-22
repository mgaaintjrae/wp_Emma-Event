<?php
require_once('inc/supports.php');
require_once('inc/assets.php');
require_once('inc/apparence.php');
require_once('inc/menus.php');
require_once('inc/images.php');
require_once('inc/style.php');
require_once('inc/query/posts.php');
require_once('inc/query/event.php');
require_once('inc/comments.php');


function emmaevent_icon(string $name): string {
  $spriteUrl = get_template_directory_uri() . '/assets/img/facebook.svg';
  return <<<HTML
  <svg class="icon"><use xlink:href="{$spriteUrl}#{$name}"></use></svg>
  HTML;
}

function emmaevent_paginate(): string {
  return '<div class="pagination">' . paginate_links(['prev_text' => emmaevent_icon('arrow'), 'next_text' => emmaevent_icon('arrow')]) . '</div>';
}

function emmaevent_paginate_comments(): void {
  echo '<div class="pagination">';
  paginate_comments_links(['prev_text' => emmaevent_icon('arrow'), 'next_text' => emmaevent_icon('arrow')]);
  echo '</div>';
}

/* Admin bar footer */
// function emmaevent_move_admin_bar() {
//   echo '
//   <style type="text/css">
//   body {
//   margin-top: -28px;
//   padding-bottom: 28px;
//   }
//   body.admin-bar #wphead {
//   padding-top: 0;
//   }
//   body.admin-bar #footer {
//   padding-bottom: 28px;
//   }
//   #wpadminbar {
//   top: auto !important;
//   bottom: 0;
//   }
//   #wpadminbar .quicklinks .menupop ul {
//   bottom: 28px;
//   }
//   </style>';
//   }
//   // on backend area
//   add_action( 'admin_head', 'emmaevent_move_admin_bar' );
//   // on frontend area
//   add_action( 'wp_head', 'emmaevent_move_admin_bar' );