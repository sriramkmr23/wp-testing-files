
<?php
/**
 * Template Name: Home Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

get_header(); ?>
 		<div class="carousel-slider">
		<?php get_template_part('template-parts/carousel-slider'); ?>
		</div>
		
    <div id="content" role="main">
        <?php while ( have_posts() ) : the_post(); ?>     
			<?php // Get Standard Comp	onents
				if( have_rows('standard-content') ):

					while ( have_rows('standard-content') ) : the_row();

						$section_path = 'template-parts/'.get_row_layout();

						get_template_part($section_path);

					endwhile;

				endif; ?>	



        <?php endwhile; // end of the loop. ?>

    </div><!-- #content -->

<?php
//get_sidebar();
get_footer();
