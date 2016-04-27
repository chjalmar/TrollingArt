<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package trollingarttheme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="panel panel-default panel-google-plus">
			<!--
      <div class="dropdown">
          <span class="dropdown-toggle" type="button" data-toggle="dropdown">
              <span class="[ glyphicon glyphicon-chevron-down ]"></span>
          </span>
          <ul class="dropdown-menu" role="menu">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
              <li role="presentation" class="divider"></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
          </ul>
      </div>
			-->
      <div class="panel-google-plus-tags">
          <ul>
              <li>#<?php getFirstCat($post_id); ?></li>
          </ul>
      </div>
      <div class="panel-heading">
          <img class="img-circle pull-left" src="<?php $email = get_avatar( get_the_author_meta('email') , 65 ); echo getGravatarUrl($email); ?>" alt="<?php the_author_meta('display_name') ?>">
          <h3><?php the_author_meta('display_name'); ?></h3>
          <h5><span>Shared publicly</span> - <span><?php echo get_the_date('Y, m, d');?></span> </h5>
      </div>
      <div class="panel-body">
					<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
          <!--<p>Just created a new snippet inspired by the Svbtle Menu. Find it here: <a href="http://bootsnipp.com/snippets/MaWrA">http://bootsnipp.com/snippets/MaWrA</a></p>-->
          <a class="panel-google-plus-image" href="<?php echo get_permalink(); ?>">
							<?php $imageMeme = getMemeName(wp_get_attachment_url( get_post_thumbnail_id($post_id))); ?>
              <img src="<?php echo $imageMeme; ?>" alt="<?php echo get_the_title(); ?>">
          </a>
					<p class="panel-tags"><?php $posttags = get_the_tags(); if ($posttags) { foreach($posttags as $tag) { echo '<span class="tags">#'.$tag->name . '</Span> '; } } ?></p>
      </div>
			<div class="panel-footer">
		      <?php share(); ?>
					<a href="<?php echo get_permalink(); ?>" class="btn btn-default"><span class="fa fa-plus" aria-hidden="true"></span> Read more</a>
			</div>
  </div>
</article><!-- #post-## -->
