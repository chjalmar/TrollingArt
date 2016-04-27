<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package trollingarttheme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php
	if (is_home() || is_front_page()){
		$tags = 'Art memes, Art jokes, Art gif and Art';
	}else {
		// Crea estructura de metas si el post es original trollingArt
		if (!get_post_format($post->ID)) {
			$datosArtists[] = get_field('artist');
			$post = get_post($post->ID);
			$tags = preg_replace('/[^A-Za-z0-9\-]/', ' ', get_field('masterpiece'));
			$tags .= ' - '.$datosArtists[0]['display_name'].". ".$post->post_content;
		}else {
			$tags = "";
		}
	}
	//http://www.bootply.com/render/85779
?>
<meta name="description" content="<?php echo mb_strimwidth($tags, 0, 155, "..."); ?>"/>

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<header class="masthead">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo-trollingart.jpg" class="img-responsive">
				</a>
      </div>
      <div class="col-md-6">
        <div class="well pull-right">
          <img class="img-responsive" src="//placehold.it/500x100/E7E7E7">
        </div>
      </div>
    </div>
  </div>
</header>
