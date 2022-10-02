<?php

/**
Template Name: Homepage
**/

get_header();

?>

<main class="homePage">
<section class="bg-white padding8040">
		<div class="container text-center">


<?php echo do_shortcode('[products]'); ?> 


</div>
</section>
	<section class="bg-white">
		<div class="container text-center">
<h2>
	<?php echo get_field('about_section_top_title'); ?>
</h2>

<?php echo get_field('about_section_content'); ?>
</div>
</section>
	<section class="bg-black">
		<div class="container-small text-center">

			<div class="form-wrap">
				<?php echo do_shortcode('[contact-form-7 id="1318" title="Contact form 1"]'); ?>
			</div>
		</div>
	</section>

	<section class="bg-white">
		<div class="container-small text-center">
			<?php echo do_shortcode('[WPSM_AC id=1513]'); ?>
		</div>
	</section>
</main>


<?php get_footer();?>