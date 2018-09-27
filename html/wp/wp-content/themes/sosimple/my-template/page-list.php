<?php
/**
 * Template Name: page-list
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package SoSimple
 */

get_header(); ?>
	<div id="primary" class="content-area">
	<div class="l-container">
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
		<section class="u-thumTxtList2">
			<ul>
				<?php while($myposts->have_posts()) : $myposts->the_post() ;?>
				<li>
					<div class="l-inner clearfix">
						<div class="colR">
							<h2 class="u-ttl2"><?php the_title(); ?></h2>
							<div class="tags">
								<dl>
									<dt>施行年</dt>
									<dd><?php the_field('sekonen'); ?></dd>
								</dl>
								<dl>
									<dt>施行内容</dt>
									<dd><?php the_field('sekonaiyo'); ?></dd>
								</dl>
							</div>
						</div>
						<div class="showImg colL"><img src="<?php the_field('detailimg_1'); ?>" alt=""></div>
						<div class="thum_btn colR">
							<div class="clkImgs">
								<a class="show" href=""><img src="<?php the_field('detailimg_1'); ?>" alt=""></a>
								<a href=""><img src="<?php the_field('detailimg_2'); ?>" alt=""></a>
								<a href=""><img src="<?php the_field('detailimg_3'); ?>" alt=""></a>
							</div>
							<div class="btn">
								<a class="u-btn withArwR1 type3 clr1" href="<?php the_permalink(); ?>"><span class="txt">詳細を見る</span></a>
							</div>
						</div>
					</div>
				</li>
				<?php endwhile; ?>
			</ul>
		</section>

		<div class="l-inner c-PB40 c_sp-PB30">
			<?php wp_pageNavi(
				array(
					'query' => $myposts,
					'wrapper_class' => 'u-pager1'
				)
			); ?>
		</div>
	<?php else : ?>

		<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif; wp_reset_postdata(); ?>

		</main><!-- #main -->
	</div><!-- /.l-container -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
