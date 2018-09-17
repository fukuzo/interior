<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package SoSimple
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel='stylesheet' id='sosimple-style-css'  href='https://interior-yamashita.com/wp/wp-content/themes/sosimple/my_style.css' type='text/css' media='all' />
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sosimple' ); ?></a>

	<header class="l-header">
		<section class="hdRow1">
			<div class="l-inner">
				<h1><a href="/"><img src="https://interior-yamashita.com/wp/wp-content/uploads/2018/09/logo.png" alt=""></a></h1>

				<div class="inqs">
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
					<div class="mail">
						<a class="u-btn withIcn type1 clr1" href="#"><i class="fas fa-envelope"></i><span class="txt">お問い合わせ</span></a>
					</div>
				</div>

				<a class="spNavBtn" href="#"><i class="fas fa-bars"></i></a>
			</div><!--/.l-inner-->
		</section>

		<div class="spNav">
			<section class="hdRow2">
				<div class="l-inner">
					<nav class="u-nav1">
						<span><a href="">ご挨拶</a></span>
						<span><a href="">会社概要・沿革</a></span>
						<span><a href="">事業内容・営業品目・取り扱いメーカー</a></span>
					</nav>
				</div>
			</section>

			<section class="hdRow3">
				<div class="l-inner">
					<dl class="gyosyu">
						<dt><i class="fas fa-search"></i>業種別で見る</dt>
						<dd>
							<nav>
								<span><a href="#">すべて</a></span>
								<span><a href="#">学校</a></span>
								<span><a href="#">公共機関</a></span>
								<span><a href="#">店舗</a></span>
							</nav>
						</dd>
					</dl>
					<dl class="naiyo">
						<dt><i class="fas fa-search"></i>内容別で見る</dt>
						<dd>
							<nav>
								<span><a href="#">すべて</a></span>
								<span><a href="#">カーテン</a></span>
								<span><a href="#">椅子</a></span>
								<span><a href="#">ブラインド</a></span>
								<span><a href="#">そのほか</a></span>
							</nav>
						</dd>
					</dl>
					<div class="btnMore"><a href="#"></a></div>
				</div><!--/.l-inner-->
			</section>
		</div>
	</header>
<!--
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php if ( function_exists( 'jetpack_the_site_logo' ) ) jetpack_the_site_logo(); ?>
			
			<?php if ( get_theme_mod( 'sosimple_logo' ) ) : ?>
		    
		    <div class='site-logo'>
		        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'sosimple_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
		    </div>
			<?php else : ?>
			    <hgroup>
			        <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
			        <h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
			    </hgroup>
			<?php endif; ?>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'sosimple' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav>
	</header>
-->




	<div class="sosimple-breadcrumbs">
		<?php
			if ( !(is_home()) || !(is_front_page())) {
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('
					<p id="breadcrumbs">','</p>
					');
				}
			}
		?>
	</div><!-- .sosimple-breadcrumbs -->

	

	<div id="content" class="site-content">
