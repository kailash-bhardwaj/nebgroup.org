<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content pt-0" role="main">

	<section class="section-inner thin error404-content bg-blue">
		<div class="container">
			<div class="row">
				<div class="col-md-6 mx-auto">
					<h1 class="entry-title section-title"><?php _e( 'Page Not Found', 'twentytwenty' ); ?></h1>
					<div class="intro-text"><p><?php _e( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', 'twentytwenty' ); ?></p></div>
					<a href="<?php echo get_site_url(); ?>" class="d-btn mt-2">Back to Home</a>
				</div>
			</div>
		</div>
	</section><!-- .section-inner -->

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
