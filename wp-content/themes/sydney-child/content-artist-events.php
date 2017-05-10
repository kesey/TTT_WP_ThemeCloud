<?php
/**
 * The template part for displaying artist's event(s)
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sydney child
 */

$child_posts = types_child_posts('live');
?>
<article class="live">
    <?php if ($child_posts) { ?>
        <div class="live_container">
            <?php

            foreach ($child_posts as $child_post) {
                $post_id = wpcf_pr_post_get_belongs($child_post->ID, 'event');
                $post = get_post($post_id);
                ?>
                <div class="post_preview">
                    <a href="<?php echo get_permalink($post_id); ?>" class="link_cover"></a>
                    <?php echo get_the_post_thumbnail($post_id, array(200,200)); ?>
                    <h6>
                        <?php echo $post->post_title; ?>
                    </h6>
                </div>
                <?php
            }

            ?>
        </div>
    <?php } else { ?>
        <div class="display_infos">
            Rien à afficher
        </div>
    <?php } ?>
</article>
