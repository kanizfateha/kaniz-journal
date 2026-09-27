<?php
/** Blog index, archives, and search results. */
get_header();
?>
<main id="main-content" class="main-content">
	<?php if ( is_home() && ! is_paged() ) : ?>
		<section class="intro site-shell">
			<p class="eyebrow">~/journal &nbsp;·&nbsp; <?php esc_html_e( 'OPEN SOURCE. OPEN STORIES.', 'kaniz-journal' ); ?></p>
			<h1><?php bloginfo( 'name' ); ?></h1>
			<p class="intro-description"><?php echo esc_html( get_bloginfo( 'description' ) ?: __( 'Notes, ideas, and stories from Kaniz Fatiha.', 'kaniz-journal' ) ); ?></p>
		</section>
	<?php else : ?>
		<header class="archive-heading site-shell">
			<p class="eyebrow">~/journal &nbsp;·&nbsp; <?php esc_html_e( 'BROWSING POSTS', 'kaniz-journal' ); ?></p>
			<h1><?php echo is_search() ? sprintf( esc_html__( 'Results for: %s', 'kaniz-journal' ), esc_html( get_search_query() ) ) : wp_kses_post( get_the_archive_title() ); ?></h1>
			<?php if ( is_archive() && get_the_archive_description() ) : ?><div class="archive-description"><?php the_archive_description(); ?></div><?php endif; ?>
		</header>
	<?php endif; ?>
	<div class="site-shell post-grid">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article <?php post_class( 'post-card' ); ?>>
				<a class="post-card-image" href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'large' ); } ?></a>
				<div class="post-card-body"><div class="post-meta"><span><?php echo esc_html( get_the_date() ); ?></span><?php if ( get_the_category_list( ', ' ) ) : ?><span class="post-categories"><?php echo wp_kses_post( get_the_category_list( ', ' ) ); ?></span><?php endif; ?></div>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p class="post-excerpt"><?php echo esc_html( get_the_excerpt() ); ?></p>
					<a class="read-more" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read the post', 'kaniz-journal' ); ?> <span aria-hidden="true">→</span></a>
				</div>
			</article>
		<?php endwhile; else : ?>
			<section class="empty-state"><h2><?php esc_html_e( 'Your first story starts here.', 'kaniz-journal' ); ?></h2><p><?php esc_html_e( 'Publish a post in WordPress and it will appear here.', 'kaniz-journal' ); ?></p><?php if ( current_user_can( 'publish_posts' ) ) : ?><a class="button-link" href="<?php echo esc_url( admin_url( 'post-new.php' ) ); ?>"><?php esc_html_e( 'Write your first post', 'kaniz-journal' ); ?></a><?php endif; ?></section>
		<?php endif; ?>
	</div>
	<?php the_posts_pagination( array( 'mid_size' => 1, 'prev_text' => esc_html__( '← Newer', 'kaniz-journal' ), 'next_text' => esc_html__( 'Older →', 'kaniz-journal' ) ) ); ?>
</main>
<?php get_footer(); ?>
