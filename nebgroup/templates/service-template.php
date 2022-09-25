<?php

/**
Template Name: Service Page
**/

get_header();

?>

<main>
	<?php
		get_template_part('template-parts/inner-banner');
	?>

	<section class="services bg-blue"> 
		<div class="container text-center">
			<h2 class="section-title pb-4"><?php the_field('service_section_title'); ?></h2>	
				<?php echo do_shortcode('[servicesShortcode]') ?>	
		</div>
	</section>
	<!--/////////////////////////////////////--->
		<section class="service_section_wrap"> 
		<div class="container">
			<div class="row text-center">
				<?php if( get_field('service_section_wrap') ): ?>
				<?php while( the_repeater_field('service_section_wrap') ): ?>
					<div class="col-md-12 col-lg-6 mt-5">
						<?php 
						$image = get_sub_field('service_image');
						if( !empty( $image ) ): ?>
							<img src="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_attr($image['alt']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
						<h1 class="m-title pt-4"><?php the_sub_field('service_title'); ?></h1>
						<div class="section-info pt-3"><?php the_sub_field('service_info'); ?></div>
					</div>
				<?php endwhile; ?>
				<?php endif;?>	
			</div>
		</div>
	</section >
	<!--/////////////////////////////////////--->
	<section class="bg-blue"> 
		<div class="container">
			<div class="row align-items-center text-center">
				<div class="col-md-8 text-md-left">
					<h1 class="section-title"><?php the_field('book_appointment_title'); ?></h1>
					<p class="mb-0 pt-2"><?php the_field('book_appointment_text'); ?></p>
				</div>
				<div class="col-md-4 text-md-right mt-4 mt-md-0">
					<?php 
					$link = get_field('book_appointment_button');
					if( $link ): 
						$link_url = $link['url'];
						$link_title = $link['title'];
						$link_target = $link['target'] ? $link['target'] : '_self';
						?>
						<a class="d-btn" href="<?php echo esc_url( $link_url ); ?>" title="<?php echo esc_html( $link_title ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>


</main>



<?php get_footer();?>