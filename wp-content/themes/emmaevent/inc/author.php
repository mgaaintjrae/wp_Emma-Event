<?php
// Rediriger les liens des auteurs vers la page "/a-propos"
add_filter( 'author_link', 'wpm_author_page' );

function wpm_author_page() {
	return home_url( 'a-propos' );
}