<?php
/**
 * Template name: homepage con banner
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package welt_theme
 */

get_header();
// get_template_part( 'template-parts/content', 'banner' );
?>

	<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
	<div id="contattaci-home" class="form-contattaci">
			<?php echo do_shortcode( '[contact-form-7 id="42" title="Modulo di contatto"]' ); ?>
	</div>
<?php
get_footer();
