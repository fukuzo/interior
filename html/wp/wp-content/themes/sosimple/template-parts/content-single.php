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
				<dd class="c-wsNw"><?php the_field('sekonen'); ?>年</dd>
			</dl>
			<dl>
				<dt class="c-wsNw">施行内容</dt>
				<dd><?php the_field('sekonaiyo'); ?></dd>
			</dl>
		</div>
	</section>

	<div class="entry-content">
		<div class="l-inner">
			<?php if(get_field('detailimg_1') || get_field('detailimg_2') || get_field('detailimg_3') || get_field('detailimg_4') || get_field('detailimg_5') || get_field('detailimg_6')) : ?>
				<section class="u-thumList1">
					<ul>
						<?php
							$dtlImgCount = 1;
							while($dtlImgCount <= 6){
						?>
							<?php if(get_field('detailimg_' . $dtlImgCount)) : ?>
								<li><img src="<?php echo get_field('detailimg_' . $dtlImgCount); ?>" alt=""></li>
							<?php endif; ?>
						<?php
							$dtlImgCount++;
						}
						?>
					</ul>
				</section>
			<?php endif; ?>

			<div class="u-txt1 c-MB30 c_sp-MB15">
				<?php the_content(); ?>
			</div>

			<?php if(get_field('client_name') || get_field('client_url')) : ?>
				<section class="u-tbl2">
					<table>
						<tbody>
							<?php if(get_field('client_name')) : ?>
								<tr>
									<th class="c-wsNw c_sp-wsNr">クライアント名</th>
									<td><?php echo get_field('client_name'); ?></td>
								</tr>
							<?php endif; ?>
							<?php if(get_field('client_url')) : ?>
								<tr>
									<th>URL</th>
									<td><a href="<?php echo get_field('client_url'); ?>" target="_blank"><?php echo get_field('client_url'); ?></a> [別ウィンドウで開きます]</td>
								</tr>
							<?php endif; ?>
						</tbody>
					</table>
				</section>
			<?php endif; ?>


			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sosimple' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- /.l-inner -->
	</div><!-- .entry-content -->

	<?php if( 1==2 ) : ?>
	<footer class="entry-footer">
		<?php sosimple_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->

