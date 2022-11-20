<?php
/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */

?>
<!DOCTYPE html>
<html class="<?php echo esc_attr( oceanwp_html_classes() ); ?>" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://use.typekit.net/fvo6ygi.css">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css ">
	<!-- indsæt vores stylesheet her - skrevet af silas -->
</head>
<p id="header"></p>
<body <?php body_class(); ?> <?php oceanwp_schema_markup( 'html' ); ?>>

	<?php wp_body_open(); ?>

	<?php do_action( 'ocean_before_outer_wrap' ); ?>

	<div id="outer-wrap" class="site clr">
		

		<a class="skip-link screen-reader-text" href="#main"><?php oceanwp_theme_strings( 'owp-string-header-skip-link', 'oceanwp' ); ?></a>

		<?php do_action( 'ocean_before_wrap' ); ?>

		<div id="wrap" class="clr">


			<?php do_action( 'ocean_top_bar' ); ?>


			<?php do_action( 'ocean_header' ); ?>


			<?php do_action( 'ocean_before_main' ); ?>

			<main id="main" class="site-main clr"<?php oceanwp_schema_markup( 'main' ); ?> role="main">


				<?php do_action( 'ocean_page_header' ); ?>
