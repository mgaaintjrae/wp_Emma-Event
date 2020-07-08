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
require_once('inc/connexion.php');



function emmaevent_icon(string $name): string {
  $spriteUrl = get_template_directory_uri() . '/assets/img/svg/sprite.svg';
  return <<<HTML
  <svg class="icon"><use xlink:href="{$spriteUrl}#{$name}"></use></svg>
  HTML;
}

function emmaevent_paginate(): string {
  return '<div class="pagination">' . paginate_links(['prev_text' => emmaevent_icon('arrow-right-emeraude'), 'next_text' => emmaevent_icon('arrow-left-emeraude')]) . '</div>';
}

function emmaevent_paginate_comments(): void {
  echo '<div class="pagination">';
  paginate_comments_links(['prev_text' => emmaevent_icon('arrow'), 'next_text' => emmaevent_icon('arrow')]);
  echo '</div>';}