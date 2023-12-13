<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cwt
 */

get_header();
?>
    <div id="content" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

            <h1><?php the_field('heading-pen'); ?></h1>     
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
