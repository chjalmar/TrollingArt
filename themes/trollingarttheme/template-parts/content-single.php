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
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php trollingarttheme_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'trollingarttheme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php
		$datosArtists[] = get_field('artist');
		//print_r($datosArtists);
		foreach ($datosArtists as $key) {
			$idUsr = $key['ID'];
			$wikiPic = esc_attr( get_the_author_meta( 'wikiPicfile', $idUsr ) );
			echo "<img src=$wikiPic>"."<br><br>".$key['user_description'];
		}

	?>
	<footer class="entry-footer">
		<?php trollingarttheme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
