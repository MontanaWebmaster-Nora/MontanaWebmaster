<?php
/**
 * The Header
 *
 * Displays all of the <head> section and everything up till <main>
 *
 * @package Kahuna
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php cryout_meta_hook(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123967654-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-123967654-1');
</script>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0"></script>

<?php
	cryout_header_hook();
	wp_head();
?>
</head>

<body <?php body_class(); cryout_schema_microdata( 'body' );?>>
	<?php cryout_body_hook(); ?>
<div id="site-wrapper">
	<header id="masthead" class="cryout" <?php cryout_schema_microdata( 'header' ) ?> role="banner">

		<div id="site-header-main">
			<div id="site-header-main-inside">

				<nav id="mobile-menu">
					<span id="nav-cancel"><i class="icon-cancel"></i></span>
					<?php cryout_mobilemenu_hook(); ?>
				</nav> <!-- #mobile-menu -->

				<div id="branding">
					<?php cryout_branding_hook();?>
				</div><!-- #branding -->

				<div id="sheader-container">
					<?php cryout_header_socials_hook();?>
				</div>

				<a id="nav-toggle"><i class="icon-menu"></i></a>
				<nav id="access" role="navigation"  aria-label="<?php esc_attr_e( 'Primary Menu', 'kahuna' ) ?>" <?php cryout_schema_microdata( 'menu' ); ?>>
					<?php cryout_access_hook();?>
				</nav><!-- #access -->

			</div><!-- #site-header-main-inside -->
		</div><!-- #site-header-main -->

		<div id="header-image-main">
			<div id="header-image-main-inside">
				<?php cryout_headerimage_hook(); ?>
			</div><!-- #header-image-main-inside -->
		</div><!-- #header-image-main -->

	</header><!-- #masthead -->

	<?php if ( ! kahuna_header_title_check() ) cryout_breadcrumbs_hook(); ?>

	<?php cryout_absolute_top_hook(); ?>

	<div id="content" class="cryout">
		<?php cryout_main_hook(); ?>
