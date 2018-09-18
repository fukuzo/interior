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

	<div class="l-container">

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

<?php if( 1==2 ) : ?>
			<?php the_post_navigation(); ?>
<?php endif; ?>

		<div class="l-inner">
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

			<h2 class="u-ttl2 c-MT50 c_sp-MT30">カテゴリー</h2>
			<section class="u-cateList1">
				<ul>
					<?php wp_list_categories('title_li='); ?>
				</ul>
			</section>

			<h2 class="u-ttl2 c-MT50 c_sp-MT30">タグ</h2>
			<section class="u-tagList1">
				<ul>
					<?php
						$posttags = get_tags();
						if ($posttags) {
							foreach($posttags as $tag) {
								echo '<li><a href="'. get_tag_link($tag->term_id) .'">' . $tag->name . '</a></li>';
							}
						}
					?>
				</ul>
			</section>
		</div><!-- .l-inner -->
</div><!-- .l-container -->
		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
