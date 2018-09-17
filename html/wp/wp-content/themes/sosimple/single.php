<?php
/**
 * The template for displaying all single posts.
 *
 * @package SoSimple
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

	<a class="u-fixBtnL1" href="#" onclick="history.back()">
		<div><i class="fas fa-bars"></i></div>
		<p>前へ戻る</p>
	</a>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

<?php if( 1==2 ) : ?>
			<?php the_post_navigation(); ?>
<?php endif; ?>

<p class="wpCate"><?php
	$category = get_the_category();
	$cat_name = $category[0]->name;
	echo $cat_name;
	?></p>
<p class="wpTags"><?php the_tags(); ?></p>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( 1==2 && comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
