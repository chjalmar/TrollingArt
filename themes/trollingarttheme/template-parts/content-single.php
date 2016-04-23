<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package trollingarttheme
 */

?>
<style>
  #map-canvas {
    height: 200px;
  }
</style>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="panel panel-primary">
		 <div class="panel-heading">
				 <h3 class="panel-title"><?php the_title(); ?></h3>
				 <span class="pull-right">
						 <!-- Tabs -->
						 <ul class="nav panel-tabs">
								 <li class="active"><a href="#tab1" data-toggle="tab">Tab 1</a></li>
								 <li><a href="#tab2" data-toggle="tab">Tab 2</a></li>
								 <li><a href="#tab3" data-toggle="tab" id="link3">Tab 3</a></li>
								 <!--<li><a href="#tab4" data-toggle="tab">Tab 4</a></li>-->
						 </ul>
				 </span>
		 </div>
		 <div class="panel-body">
				 <div class="tab-content">
						 <div class="tab-pane active" id="tab1">
							 <?php $imageMeme = getMemeName(wp_get_attachment_url( get_post_thumbnail_id($post_id))); ?>
							 <img src="<?php echo $imageMeme; ?>" class="img-responsive">
						 </div>
						 <div class="tab-pane" id="tab2">
							 <?php
								 $datosArtists[] = get_field('artist');
								 $museumField = get_field('museum');
								 $masterpieceField = get_field('masterpiece');
								 //print_r($datosArtists);
								 foreach ($datosArtists as $key) {
									 $idUsr = $key['ID'];
									 $wikiPic = esc_attr( get_the_author_meta( 'wikiPicfile', $idUsr ) );
									 //echo "<img src=$wikiPic>"."<br><br>".$key['user_description'];
									 $bio = $key['user_description'];
									 $nickName = $key['display_name'];
								 }
							 ?>
							 <div class="modal-content">
	                <div class="modal-body">
	                    <center>
	                    <img src="<?php echo $wikiPic; ?>" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
	                    <h3 class="media-heading"><?php echo $nickName; ?></h3>
	                    <span><strong>Skills: </strong></span>
	                        <span class="label label-warning">HTML5/CSS</span>
	                        <span class="label label-info">Adobe CS 5.5</span>
	                        <span class="label label-info">Microsoft Office</span>
	                        <span class="label label-success">Windows XP, Vista, 7</span>
	                    </center>
	                    <hr>
	                    <center>
	                    <p class="text-left"><strong>Bio: </strong><br>
												<?php echo $bio; ?>
											</p>
	                    <br>
	                    </center>
	                </div>
	                <div class="modal-footer">
	                    <center>
	                    <button type="button" class="btn btn-default" data-dismiss="modal">I've heard enough about Joe</button>
	                    </center>
	                </div>
		            </div>
						 </div>
						 <div class="tab-pane" id="tab3">
							 <?php getWikiInfo("$museumField", "$masterpieceField"); ?>
						 </div>
						 <!--<div class="tab-pane" id="tab4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.

								 Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet,
							 </div>-->
				 </div>
		 </div>
 </div>
</article><!-- #post-## -->
