<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div class="newsletter">
			<div class="row">
				<div class="medium-6 columns">
					<p>Inscrivez-vous à notre newsletter pour recevoir<br /> nos nouveautés et actualités par email.</p>
				</div>
				<div class="medium-6 columns">
					<input type="email" placeholder="email@gmail.com" /><input type="submit" value="S'inscrire" />
				</div>
			</div>
		</div>
		<div id="footer-container">
			<footer id="footer">
				<div class="row">
					<div class="medium-6 columns">
						<img src="<?php echo get_template_directory_uri () ?>/assets/images/matrel-logo.png" alt="<?php bloginfo( 'name' ); ?>" class="logo" />
						<div class="row">
							<div class="medium-6 columns">
								<p>129, rue des marronniers</p>
								<p>BP 50464 - 38304 Bourgoin-Jallieu Cedex</p>
							</div>
							<div class="medium-6 columns">
								<p>Tél : 04 74 93 42 42</p>
								<p>Fax : 04 74 93 44 88</p>
							</div>
						</div>
					</div>
					<div class="medium-6 columns">
						<?php wp_nav_menu( array('footer nav' => 'Navigation footer') ); ?>
					</div>
				</div>
			</footer>
		</div>
		<div class="copyright text-center">
			<div class="row">
				<div class="small-12 columns">
					Copyright Matrel © 2016 - All right reserved.
				</div>
			</div>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
