<?php
/**
 * The template part for displaying release fields
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sydney child
 */
?>
<article class="release_fields">

    <div class="fields_container">
        <?php if (get_post_meta($post->ID, 'wpcf-audio', true)) { ?>
            <div class="audio_player">
                <audio controls controlsList="nodownload">
                    <source src="<?php echo get_post_meta($post->ID, 'wpcf-audio', true); ?>" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
        <?php } ?>
        <?php if (get_post_meta($post->ID, 'wpcf-video', true)) { ?>
            <div class="video_player">
                <video controls controlsList="nodownload">
                    <source src="<?php echo get_post_meta($post->ID, 'wpcf-video', true); ?>" type="video/mp4">
                    Your browser does not support HTML5 video.
                </video>
            </div>
        <?php } ?>
    </div>

</article>