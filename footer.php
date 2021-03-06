<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package meitner
 * @version 1.0
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info wrapper">
			<?php if ( ! function_exists( 'meitner_site_info' ) ) : ?>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'meitner' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'meitner' ), 'WordPress' ); ?></a>
			<?php else:
				meitner_site_info();
			endif; ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
