<?php

/**
Template Name: about Page
**/

get_header();

?>

<main>
	<?php
		get_template_part('template-parts/inner-banner');
	?>
<section class="service_section_wrap"> 
		<div class="container">
			<div class=" text-center">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>	
			</div>
		</div>
	</section>




</main>



<?php get_footer();?>