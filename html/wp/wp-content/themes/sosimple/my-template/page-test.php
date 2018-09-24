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
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<p>ページャーテスト</p>

		<?php if ( have_posts() ) : ?>

<div class="pager_test">

<section	>

			<?php /* Start the Loop */ ?>
			<?php
					global $post;
					$args = array( 'posts_per_page' => 4 );
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) {
						setup_postdata($post);
				?>
				<h5><?php the_title() ?></h5>
				<?php } wp_reset_postdata(); ?>
				</section>

<!--
	上記はpage-list.phpから
	下記はindex.phpから
	固定ページにて投稿数を下記ページャーに渡せない？
	或いは他の方法が必要
-->


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





</div>


		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
