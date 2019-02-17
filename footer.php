<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_books_across
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="footer-info">
			<div id="footer-sidebar" class="footer-container container">
				<div class="row">
					<div id="footer-menu" class="footer-sidebar-section col-12 col-md-4">
						<h3 class="widget-title">The Books Across</h3>
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-menu',
								'menu_id'        => 'footer-menu',
							) );
						?>
					</div>
					<div id="footer-sidebar1" class="footer-sidebar-section col-12 col-md-4">
						<?php
							if(is_active_sidebar('footer-sidebar-1')){
								dynamic_sidebar('footer-sidebar-1');
							}
						?>
					</div>
					<div id="footer-sidebar2" class="footer-sidebar-section col-12 col-md-4">
						<?php
							if(is_active_sidebar('footer-sidebar-2')){
								dynamic_sidebar('footer-sidebar-2');
							}
						?>
					</div>
				</div>
			</div>
		</div><!-- .footer-info -->
		<div class="footer-bottom">
			<div class="footer-container container">
				<div class="row">
					<div class="menu-disclaimers col-xs-6">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-disclaimers',
								'menu_id'        => 'footer-disclaimers',
							) );
						?>
					</div>
					<div class="copyright col-xs-6">
						<?php
						printf( esc_html__( 'Copyright %1$s by %2$s.', 'the-books-across' ), date( 'Y' ), get_the_author_link() );
						?>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<!-- Mailchimp Subscribe Popup -->
<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us7.list-manage.com","uuid":"56f4d6bcd0cf35075f85e411e","lid":"5c5c5c38f7","uniqueMethods":true}) })</script>
<!-- End Mailchimp Subscribe Popup -->

<?php wp_footer(); ?>

<!-- Amazon Associates Script -->
<div id="amzn-assoc-ad-4317fdb6-19b8-4c6f-a5f4-4ceafe8c9330"></div><script async src="//z-na.amazon-adsystem.com/widgets/onejs?MarketPlace=US&adInstanceId=4317fdb6-19b8-4c6f-a5f4-4ceafe8c9330"></script>
<!-- End Amazon Associates Script -->

</body>
</html>
