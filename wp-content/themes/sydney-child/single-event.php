<?php
/**
 * The template for displaying single event post.
 *
 * @package Sydney child
 */

get_header(); ?>

<?php if (get_theme_mod('fullwidth_single')) { //Check if the post needs to be full width
    $fullwidth = 'fullwidth';
} else {
    $fullwidth = '';
} ?>

<?php do_action('sydney_before_content'); ?>

    <div id="primary" class="content-area col-md-9 <?php echo $fullwidth; ?>">
        <main id="main" class="post-wrap" role="main">

            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'content', 'single' ); ?>

                <?php
                    if (get_post_meta($post->ID, 'wpcf-location', true)) {
                        get_template_part( 'content', 'map' );
                    }
                ?>

                <?php sydney_post_navigation(); ?>

                <h6>Artist(s): </h6>
                <?php get_template_part( 'content', 'event-artists' ); ?>

                <?php
                // If comments are open or we have at least one comment, load up the comment template
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
                ?>

            <?php endwhile; // end of the loop. ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php do_action('sydney_after_content'); ?>

<?php if ( get_theme_mod('fullwidth_single', 0) != 1 ) {
    get_sidebar();
} ?>
<?php get_footer(); ?>