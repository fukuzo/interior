<?php
/**
 * Template part for displaying single posts.
 *
 * @package SoSimple
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title"><div class="l-inner">', '</div></h1>' ); ?>

		<?php if( 1==2 ) : ?>
		<div class="entry-meta">
			<?php sosimple_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( 1==2 && has_post_thumbnail() ) : ?>
		<div class="entry-thumbnail">
			<?php the_post_thumbnail( 'sosimple-featured' ); ?>
		</div>
	<?php endif; ?>

	<section class="u-tags1">
		<div class="l-inner">
			<dl>
				<dt class="c-wsNw">施行年</dt>
				<dd class="c-wsNw"><?php echo post_custom('施工年'); ?>年</dd>
			</dl>
			<dl>
				<dt class="c-wsNw">施行内容</dt>
				<dd><?php echo post_custom('施工内容'); ?></dd>
			</dl>
		</div>
	</section>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sosimple' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if( 1==2 ) : ?>
	<footer class="entry-footer">
		<?php sosimple_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->

