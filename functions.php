<?php
/** Theme setup and assets. */
function kaniz_journal_setup() {
	load_theme_textdomain( 'kaniz-journal', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'custom-logo', array( 'height' => 80, 'width' => 260, 'flex-height' => true, 'flex-width' => true ) );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'align-wide' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );
	register_nav_menus( array( 'primary' => __( 'Primary menu', 'kaniz-journal' ) ) );
}
add_action( 'after_setup_theme', 'kaniz_journal_setup' );
function kaniz_journal_enqueue_styles() {
	$theme = wp_get_theme();
	wp_enqueue_style( 'kaniz-journal-style', get_stylesheet_uri(), array(), $theme->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'kaniz_journal_enqueue_styles' );
function kaniz_journal_excerpt_length( $length ) { return 24; }
add_filter( 'excerpt_length', 'kaniz_journal_excerpt_length', 99 );
function kaniz_journal_excerpt_more() { return '…'; }
add_filter( 'excerpt_more', 'kaniz_journal_excerpt_more' );
