<?php

/**
Template Name: Contact Page
**/

get_header();

?>

<main>
	<section class="bg-white padding8050">
		<div class="container-s text-center">
			<h2><?php the_title();?></h2>
			<?php the_content();?>
			<div class="contact-wrap">
				<?php echo do_shortcode('[contact-form-7 id="1318" title="Contact form 1"]'); ?>
			</div>
		</div>
	</section>



</main>

<?php get_footer();?>