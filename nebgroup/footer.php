<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>



			<footer id="site-footer" role="contentinfo" class="header-footer-group">
				<div class="footer-top container">
					<?php dynamic_sidebar( 'sidebar-1' ); ?>

				</div>
				</div><!-- .section-inner -->
				<div class="footercopyright">
					<p>	Copyright &copy; <script>document.write(new Date().getFullYear())</script></p>
				</div>
			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>
