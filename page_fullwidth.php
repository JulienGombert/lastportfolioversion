<?php
/**
 * 
 * Template name: Fullwidth Template
 * Template Page Type: Page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolioJG
 */

get_header();
?>

    <div id="primary" class="site-main content-area">

        <main id="main" class="site-main" role="main">

            <?php
            while ( have_posts() ) :
                the_post();

                get_template_part( 'template-parts/content', 'page' );

            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->

    </div>

<?php
get_footer();