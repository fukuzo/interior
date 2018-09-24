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
<!--<p>リストテンプレ</p>-->
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
			<section class="u-postList1">
				<ul>
				<?php
					global $post;
					$args = array( 'posts_per_page' => 4 );
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) {
						setup_postdata($post);
				?>
				<li class="liItem">
					<div class="l-inner clearfix">
						<div class="showImg"></div>
						<h2 class="u-ttl2"><?php the_title(); ?></h2>
						<?php remove_filter('the_content', 'wpautop'); ?>
						<?php the_content(); ?>
						<div class="btn">
							<a class="u-btn withArwR1 type3 clr1" href="<?php the_permalink() ?>"><span class="txt">詳細を見る</span></a>
						</div>
					</div>
				</li>
				<?php
				}
				wp_reset_postdata();
				?>
				</ul>
			</section>


			<div class="u-pager1">
				<?php global $wp_rewrite;
				$paginate_base = get_pagenum_link(1);
				if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
					$paginate_format = '';
					$paginate_base = add_query_arg('paged','%#%');
				}
				else{
					$paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
					user_trailingslashit('page/%#%/','paged');;
					$paginate_base .= '%_%';
				}
				echo paginate_links(array(
					'base' => $paginate_base,
					'format' => $paginate_format,
					'total' => $wp_query->max_num_pages,
					'mid_size' => 4,
					'current' => ($paged ? $paged : 1),
					'prev_text' => '',
					'next_text' => '',
				)); ?>
			</div>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
