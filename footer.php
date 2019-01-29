<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package welt_theme
 */

?>


	<footer id="colophon" class="site-footer">
		<div class="contact-info">
			<h3><img src="/../wp-content/uploads/2019/01/logowhite.png" alt="" class="logo-white"></h3>
			<h3><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></h3>
			<h3><?php echo get_post_meta('15', 'Indirizzo', true); ?></h3>
			<h3><?php echo get_post_meta('15', 'IVA', true); ?></h3>
		</div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'welt_theme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Sviluppato con passione con %s', 'welt_theme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Tema: %1$s by %2$s.', 'welt_theme' ), 'welt_theme', 'a partire da <a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
