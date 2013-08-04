<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package jacksonthatsme
 */
?>
	</div><!--l-container-->
	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="l-container">
			<div class="site-info">
				<?php do_action( 'jacksonthatsme_credits' ); ?>
				<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'jacksonthatsme' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'jacksonthatsme' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>