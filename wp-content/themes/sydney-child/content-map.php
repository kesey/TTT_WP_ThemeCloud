<?php
/**
 * The template part for displaying map
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sydney child
 */
?>
<article class="map">

    <div class="map_container">
        <iframe
            width="600"
            height="450"
            frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAFhlkMwBMqtQYqbLMq4tKY-aubZFe8ErU
            &q=<?php echo get_post_meta($post->ID, 'wpcf-location', true); ?>" allowfullscreen>
        </iframe>
    </div>

</article>