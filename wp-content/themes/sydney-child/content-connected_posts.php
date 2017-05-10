<?php
/**
 * The template part for displaying connected posts
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sydney child
 */

$child_posts = types_child_posts('live');
if ($child_posts) { ?>
    <article class="connected_posts">

        <div class="posts_container">
            <?php
                foreach ($child_posts as $child_post) {
                    $artist_id = wpcf_pr_post_get_belongs($child_post->ID, 'artist');
                    $artist = get_post($artist_id);
                    ?>
                        <div>
                            <?php echo $artist->post_title; ?>
                        </div>
                    <?php
                }
            ?>
        </div>

    </article>
<?php }