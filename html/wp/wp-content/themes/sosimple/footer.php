<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SoSimple
 */
?>

</div><!-- #content -->
	<!-- Some more link css -->

	<footer class="l-footer">
		<section class="inqs">
			<div class="l-inner">
				<div class="txts">
					<h2>お問い合わせ</h2>
					<p>実績に関するお問い合わせや、お仕事の相談など、こちらからお問い合わせください。</p>
					<div class="tels">
						<dl>
							<dt class="u-lbl type1 clr1">TEL</dt>
							<dd>025-241-3421</dd>
						</dl>
						<dl>
							<dt class="u-lbl type1 clr1">FAX</dt>
							<dd>025-241-3425</dd>
						</dl>
					</div>
				</div>
				<div class="mail">
					<a class="u-btn withIcn type2 clr1" href="#"><i class="fas fa-envelope"></i><span class="txt">お問い合わせ</span></a>
				</div>
			</div><!--/.l-inner-->
		</section>
		<section class="infos">
			<div class="l-inner">
				<nav class="u-nav1">
					<span><a href="">ご挨拶</a></span>
					<span><a href="">会社概要・沿革</a></span>
					<span><a href="">事業内容・営業品目・取り扱いメーカー</a></span>
				</nav>
				<p id="copyright">copyright Interior Yamashita All rights reserved.</p>
			</div><!--/.l-inner-->
		</section>
	</footer>
<!--
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'sosimple' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'sosimple' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php $sosimple_theme = wp_get_theme(); ?>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'sosimple' ), 'sosimple', '<a href="'.$sosimple_theme->get( 'AuthorURI' ).'" rel="designer">Fernando Villamor Jr.</a>' ); ?>
		</div><!-- .site-info
	</footer><!-- #colophon
-->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
