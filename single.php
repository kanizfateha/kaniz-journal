<?php
/** Single blog post. */
get_header();
?>
<main id="main-content" class="main-content">
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class( 'article-wrap' ); ?>>
			<header class="article-header">
				<p class="eyebrow post-categories"><?php echo wp_kses_post( get_the_category_list( ' · ' ) ); ?></p>
				<h1 class="article-title"><?php the_title(); ?></h1>
				<div class="post-meta article-byline"><span><?php echo esc_html( get_the_date() ); ?></span><span><?php printf( esc_html__( 'By %s', 'kaniz-journal' ), esc_html( get_the_author() ) ); ?></span></div>
			</header>
			<?php if ( has_post_thumbnail() ) : ?><figure class="article-featured"><?php the_post_thumbnail( 'full' ); ?></figure><?php endif; ?>
			<div class="entry-content"><?php the_content(); ?></div>
			<?php wp_link_pages( array( 'before' => '<nav class="page-links">' . esc_html__( 'Pages:', 'kaniz-journal' ), 'after' => '</nav>' ) ); ?>
			<?php if ( has_tag() ) : ?><div class="article-tags"><?php esc_html_e( 'Filed under:', 'kaniz-journal' ); ?> <?php the_tags( '', ' ' ); ?></div><?php endif; ?>
			<nav class="post-navigation" aria-label="<?php esc_attr_e( 'Post navigation', 'kaniz-journal' ); ?>"><div><?php previous_post_link( '%link', '← %title' ); ?></div><div class="nav-next"><?php next_post_link( '%link', '%title →' ); ?></div></nav>
		</article>
		<?php if ( comments_open() || get_comments_number() ) : comments_template(); endif; ?>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
