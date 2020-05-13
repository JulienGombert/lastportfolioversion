<?php
/**
 * 
 * Template name: Left SideBar Template
 * Template Page Type: Page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolioJG
 */

get_header();
?>

<div class="row">

    <div id="primary" class="site-main content-area col-md-8">

        <main id="main" class="site-main" role="main">

            <?php
            while ( have_posts() ) :
                the_post();

                get_template_part( 'template-parts/content', 'page' );

            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->

    </div>

    <div class="col-md-4">
		<?php get_sidebar(); ?>
	</div>

</div>

<?php
get_footer();