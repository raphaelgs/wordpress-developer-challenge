<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

	<footer id="footer" role="contentinfo">
		<section class="container">				
			<a href="<?php echo esc_url( home_url( 'home' ) ); ?>" alt="Play" title="Play"><img  src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-play.svg" alt="Play"/></a>	
			<p>© 2020 — Play — Todos os direitos reservados.</p>
		</section>
	</footer><!-- #footer -->
	<?php wp_footer(); ?>
</body>
</html>
