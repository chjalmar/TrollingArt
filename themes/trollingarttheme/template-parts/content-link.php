<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package trollingarttheme
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<hr>
	<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" class="img-responsive">
	<hr>
</article><!-- #post-## -->
