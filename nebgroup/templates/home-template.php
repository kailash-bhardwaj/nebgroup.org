<?php

/**
Template Name: Homepage
**/

get_header();

?>

<main class="homePage">
<section class="bg-white padding8040">
		<div class="container text-center">
<div class="dflex justicenter">

<?php 

                ob_start();
                global $post;
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array('posts_per_page' => -1, 'post_type' => 'products', 'order' => 'ASC', 'paged' => $paged);
                ?>
<?php
        query_posts($args);
        if (have_posts()) {
            while (have_posts()) : the_post();
                setup_postdata($post);
                ?>

<div class="productBox">
	<a href="<?php echo get_field('product_link'); ?>" target="_blank">
		<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']); ?>
	<h2><?php the_title() ?></h2>
	</a>
	</div>
                   

                <?php
            endwhile;
        }
        wp_reset_query();
        ?>  



</div>
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