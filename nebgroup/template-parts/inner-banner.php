<?php
/**
 * Displays the inner page banner
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
	<section class="inner-banner"  style="background-image: url('<?php echo $image[0]; ?>')">
			<div class="container text-center">
				<div class="innner-banner-content">
					<h2 class="banner-title mb-0"><?php the_title(); ?></h2>
				</div>
			</div>
	</section>
<?php endif; ?>

