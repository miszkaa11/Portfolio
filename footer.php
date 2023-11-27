<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">

			<!-- Footer -->

			<section id="footer" class="footer">
				<div class="container-md">
					<div class="ask-me-socials s-p-1">
						<div class="ask-me-socials__content d-flex-between">
							<div class="social-example">
								<a href="https://www.facebook.com/michallukaszewicz11/" class="logo"><i class="fab fa-facebook-square fa-6x"></i></a>
							</div>
							<div class="social-example">
								<a href="https://www.linkedin.com/in/micha%C5%82-%C5%82ukaszewicz-970634160/" class="logo"><i class="fab fa-linkedin-in fa-6x"></i></a>
							</div>
							<div class="social-example">
								<a href="mailto:lukaszewicz08@gmail.com" class="logo"><i class="fab fa-google fa-6x"></i></a>
							</div>
							<div class="social-example">
								<a href="tel:731540795" class="logo"><i class="fas fa-mobile-alt fa-6x"></i></a>
							</div>
							<div class="social-example">
								<a href="https://www.instagram.com/michallukaszewicz11/" class="logo"><i class="fab fa-instagram fa-6x"></i></a>
							</div>
						</div>
					</div>
					<div class="footer__content d-flex-center s-p-1">
						<div class="privacy-policy">
							<a href="/portfolio/polityka-prywatnosci/" class="privacy-policy__link f-style-primary f-text c-secondary">.privacyPolicy</a>
						</div>
						<div class="copyrights">
							<p class="copyrights__paragraph f-style-primary f-text c-secondary">Copyrights &copy; 2021 Michał Łukaszewicz</p>
						</div>
					</div>
				</div>
			</section>

			<!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'portfolio' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'portfolio' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'portfolio' ), 'portfolio', '<a href="http://underscores.me/">Underscores.me</a>' );
				?> -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
