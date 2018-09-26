<?php
/**
 * Template Name: page-test
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package SoSimple
 */

get_header(); ?>
<h2 style="font-size: 30px;">page-test.php</h2>
	<div class="l-container">
	<div class="l-inner">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

	<?php
	$paged = get_query_var('paged', 1);
	$myposts = new WP_Query(
		array(
			'paged' => $paged,
			'numberposts' => 0,
			'posts_per_page' => 4
		)
	);
	?>

	<?php if($myposts->have_posts()): ?>
		<section class="u-thumTxtList1">
			<ul>
				<?php while($myposts->have_posts()) : $myposts->the_post() ;?>
				<li style="border-bottom:solid 1px #f00;padding:10px 0;">
					<?php the_title(); ?>
		<div class="seko">
			<?php the_field('sekonen'); ?>
		</div>
		<div class="aaa">
			<?php echo the_field('detailimg_1'); ?>
		</div>
				</li>
				<?php endwhile; ?>
			</ul>
		</section>
		<?php wp_pageNavi(array('query' => $myposts)); ?>
	<?php else : ?>

		<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif; wp_reset_postdata(); ?>




			<div class="u-pager1">
				
			</div>


		</main><!-- #main -->
	</div><!-- #primary -->
	</div><!-- /.l-inner -->
	</div><!-- /.l-container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
