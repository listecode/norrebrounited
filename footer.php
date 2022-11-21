<?php
/**
 * The template for displaying the footer.
 *
 * @package OceanWP WordPress theme
 */

?>

	</main><!-- #main -->

<!-- <img class="footerlogo" src="nbu-logo.jpg" alt="nbu-logo"> -->
<br>
<div class="footer">
<div class="nbulogobund">
<a href=#header><img class="nbufooterlogo" src="<?php echo get_stylesheet_directory_uri() ?>/nbu-logo.webp" alt="nbu-logo"></a>
</div>
<div>
<p class="footertekst">Nørrebro United</p>
<p class="footertekst">Tlf nr. 60 79 61 40 </p>
<p class="footertekst">kontor@nbunited.dk </p>
<p class="footertekst">Husumgade 44, baghuset - 2200 København N</p>
<p class="footertekst">cvr. 32435327 - Bank reg nr. 1551 konto nr. 4190286185</p>
</div>
<div class="socials">
	<a href="www.facebook.com"><img class="facelogo" src="<?php echo get_stylesheet_directory_uri() ?>/facebook-logo.svg" alt="Facebook-logo"></a>
	<a href="www.instagram.com"><img class="instalogo" src="<?php echo get_stylesheet_directory_uri() ?>/instagram-logo.svg" alt="Instagram-logo"></a>
	<!-- <img src="<?php echo get_stylesheet_directory_uri() ?>/nbu-logo.jpg" alt="billede"> -->

</div>
</div>

	<?php do_action( 'ocean_after_main' ); ?>

	<?php do_action( 'ocean_before_footer' ); ?>

	<?php
	// Elementor `footer` location.
	if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {
		?>

		<?php do_action( 'ocean_footer' ); ?>

	<?php } ?>

	<?php do_action( 'ocean_after_footer' ); ?>

</div><!-- #wrap -->

<?php do_action( 'ocean_after_wrap' ); ?>

</div><!-- #outer-wrap -->

<?php do_action( 'ocean_after_outer_wrap' ); ?>

<?php
// If is not sticky footer.
if ( ! class_exists( 'Ocean_Sticky_Footer' ) ) {
	get_template_part( 'partials/scroll-top' );
}
?>

<?php
// Search overlay style.
if ( 'overlay' === oceanwp_menu_search_style() ) {
	get_template_part( 'partials/header/search-overlay' );
}
?>

<?php
// If sidebar mobile menu style.
if ( 'sidebar' === oceanwp_mobile_menu_style() ) {

	// Mobile panel close button.
	if ( get_theme_mod( 'ocean_mobile_menu_close_btn', true ) ) {
		get_template_part( 'partials/mobile/mobile-sidr-close' );
	}
	?>

	<?php
	// Mobile Menu (if defined).
	get_template_part( 'partials/mobile/mobile-nav' );
	?>

	<?php
	// Mobile search form.
	if ( get_theme_mod( 'ocean_mobile_menu_search', true ) ) {
		ob_start();
		get_template_part( 'partials/mobile/mobile-search' );
		echo ob_get_clean();
	}
}
?>

<?php
// If full screen mobile menu style.
if ( 'fullscreen' === oceanwp_mobile_menu_style() ) {
	get_template_part( 'partials/mobile/mobile-fullscreen' );
}
?>



<?php wp_footer(); ?>
</body>
</html>
