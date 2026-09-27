<?php
/** Static page template. */
get_header();
?>
<main id="main-content" class="main-content">
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class( 'article-wrap page-content' ); ?>><header class="article-header"><h1 class="article-title"><?php the_title(); ?></h1></header>
			<?php if ( has_post_thumbnail() ) : ?><figure class="article-featured"><?php the_post_thumbnail( 'full' ); ?></figure><?php endif; ?>
			<div class="entry-content"><?php the_content(); ?></div>
		</article>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
