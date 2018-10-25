<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mohamed_sh
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'mohamed_sh' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'mohamed_sh' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'mohamed_sh' ), 'mohamed_sh', '<a href="http://underscores.me/">Underscores.me</a>' );
				?> -->
		</div><!-- .site-info -->


	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
	<script src="<?php bloginfo('template_directory') ?>/assets/js/jQueryv3.3.1"></script>
    <script src="<?php bloginfo('template_directory') ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/assets/js/wow.min.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/assets/js/isotope.pkgd.min.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/assets/js/mixitup.min.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/assets/js/custom.js"></script>
</body>
</html>
