<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _tk
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h1 class="page-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="entry-content-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php the_content(); ?>

		<div class="home-page-columns">
			<?php dynamic_sidebar( 'home-col-1' ); ?>
			<?php dynamic_sidebar( 'home-col-2' ); ?>
			<?php dynamic_sidebar( 'home-col-3' ); ?>
			<?php dynamic_sidebar( 'home-col-4' ); ?>
			<?php dynamic_sidebar( 'home-col-5' ); ?>
		</div><!-- .home-page-columns -->

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '_tk' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', '_tk' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
