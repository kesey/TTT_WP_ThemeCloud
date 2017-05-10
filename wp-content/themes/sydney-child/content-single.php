<?php
/**
 * The template part for displaying image and content of a post
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sydney child
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php do_action('sydney_inside_top_post'); ?>

    <header class="entry-header single_title">
        <?php the_title( '<h1 class="title-post entry-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->

    <?php if ( has_post_thumbnail() && ( get_theme_mod( 'post_feat_image' ) != 1 ) ) : ?>
        <div class="entry-thumb single_image easeInOut">
            <?php the_post_thumbnail('sydney-large-thumb'); ?>
        </div>
    <?php endif; ?>

    <div class="entry-content single_content">
        <?php the_content(); ?>
        <?php
        wp_link_pages( array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'sydney' ),
            'after'  => '</div>',
        ) );
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php sydney_entry_footer(); ?>
    </footer><!-- .entry-footer -->

    <?php do_action('sydney_inside_bottom_post'); ?>

</article><!-- #post-## -->
