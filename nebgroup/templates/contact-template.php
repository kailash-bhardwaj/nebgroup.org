<?php

/**
Template Name: Contact Page
**/

get_header();

?>

<main>
	<?php
		get_template_part('template-parts/inner-banner');
	?>
	<!-- <section>
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6">
					<?php 
					$image = get_field('contact_detail_image');
					if( !empty( $image ) ): ?>
						<img src="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_attr($image['alt']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
				</div>
				<div class="col-md-6 contact-info">
						<?php the_field('contact_detail_info'); ?>
				</div>
			</div>
		</div>
	</section> -->
		<!--/////////////////////////////////////--->
	<section class="bg-black">
		<div class="container text-center">
			<div class="form-wrap">
				<?php echo do_shortcode('[contact-form-7 id="1318" title="Contact form 1"]'); ?>
			</div>
		</div>
	</section>



</main>

<?php get_footer();?>