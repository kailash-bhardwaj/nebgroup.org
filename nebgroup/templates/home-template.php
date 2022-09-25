<?php

/**
Template Name: Homepage
**/

get_header();

?>

<main class="homePage">

	<section class="bg-white">
		<div class="container text-center">
<h2>
	NEB GROUP OF ARIZONA 
RESPIRATORY CARE SOLUTIONS 
</h2>

<p>
	Neb Group of Arizona has you covered with more than 15 years experience in  supplying durable medical equipment to over 700 pediatric and family  medicine offices, urgent cares and emergency rooms nationwide. All products listed are prescription-only devices and can only be obtained through a prescription from a medical professional. Please have your primary care physician or other healthcare professional fax or email a prescription to get started!  If you need new tubing, mask, filters, etc. for your nebulizer machine please contact us.  Phone: (480)535-6933 Fax: (866)561-8331 Email: billing@nebgroupofaz.com  Have questions or comments on our products or the best way to obtain a nebulizer? Drop us a line below! 
	</p>
</div>
</section>
	<section class="bg-black">
		<div class="container text-center">

			<div class="form-wrap">
				<?php echo do_shortcode('[contact-form-7 id="1318" title="Contact form 1"]'); ?>
			</div>
		</div>
	</section>

	<section class="bg-white">
		<div class="container text-center">
			<?php echo do_shortcode('[WPSM_AC id=1513]'); ?>
		</div>
	</section>
</main>


<?php get_footer();?>