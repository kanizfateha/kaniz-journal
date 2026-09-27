<?php /** Site header. */ ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="screen-reader-text" href="#main-content"><?php esc_html_e( 'Skip to content', 'kaniz-journal' ); ?></a>
<header class="site-header"><div class="site-shell header-inner">
	<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<span class="brand-mark" aria-hidden="true">&gt;_</span>
		<span class="brand-copy"><span class="brand-name"><?php bloginfo( 'name' ); ?></span><span class="brand-tagline">kanizfatiha.sh · linux-minded journal</span></span>
	</a>
	<nav class="primary-nav" aria-label="<?php esc_attr_e( 'Primary menu', 'kaniz-journal' ); ?>">
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_id' => 'primary-menu', 'fallback_cb' => 'wp_page_menu', 'depth' => 1 ) ); ?>
	</nav>
	<?php $write_url = is_user_logged_in() ? admin_url( 'post-new.php' ) : wp_login_url( admin_url( 'post-new.php' ) ); ?>
	<a class="write-link" href="<?php echo esc_url( $write_url ); ?>"><?php esc_html_e( 'Write a post', 'kaniz-journal' ); ?> <span aria-hidden="true">↗</span></a>
</div></header>
