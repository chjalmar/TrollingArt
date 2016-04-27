
<?php
/**
 * Template part for displaying Quotes.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package trollingarttheme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="panel panel-default panel-google-plus">
      <div class="panel-google-plus-tags">
          <ul>
              <li>#<?php getFirstCat($post_id); ?></li>
          </ul>
      </div>
      <div class="panel-heading">
          <img class="img-circle pull-left" src="<?php $email = get_avatar( get_the_author_meta('email') , 65 ); echo getGravatarUrl($email); ?>" alt="<?php the_author_meta('display_name'); ?>">
          <h3><?php the_author_meta('display_name'); ?></h3>
          <h5><span>Shared publicly</span> - <span><?php echo get_the_date('Y, m, d');?></span> </h5>
      </div>
        <div class="panel-body">
  					<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
            <!--<p>Just created a new snippet inspired by the Svbtle Menu. Find it here: <a href="http://bootsnipp.com/snippets/MaWrA">http://bootsnipp.com/snippets/MaWrA</a></p>-->
            <blockquote>
              <p>
                <center>
                  <a class="panel-google-plus-image" href="<?php echo get_permalink(); ?>">
        							<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" class="img-responsive" alt="<?php echo get_the_title(); ?>">
                  </a>
                </center>
              </p>
            </blockquote>
  					<p class="panel-tags"><?php $posttags = get_the_tags(); if ($posttags) { foreach($posttags as $tag) { echo '<span class="tags">#'.$tag->name . '</Span> '; } } ?></p>
        </div>
  			<div class="panel-footer">
  		      <?php share(); ?>
  					<a href="<?php echo get_permalink(); ?>" class="btn btn-default"><span class="fa fa-plus" aria-hidden="true"></span> Read more</a>
  			</div>
      </blockquote>
  </div>
</article><!-- #post-## -->
