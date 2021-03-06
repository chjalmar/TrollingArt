<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package trollingarttheme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div class="col-md-3">
	<div class="panel" id="midCol">
		<?php if(is_home() || is_front_page()) { ?>
			<div class="panel-heading" style="color: rgb(238, 238, 238); background-color: rgb(85, 85, 85);">New Stories</div>
		<?php } ?>
		<div class="panel-body">

			<img class="img-responsive" src="//placehold.it/300/77CCDD/66BBCC">

			<div class="well">
							<img class="img-responsive" src="http://s.bootply.com/assets/example/bg_iphone.png">
							<h3><a href="http://getbootstrap.com">Bootstrap 3 is Here.</a></h3>
							<p>
							In simple terms, a responsive web design figures out what resolution of
							device it's being served on. Flexible grids then size correctly to fit
							the screen.
							</p>
							<p><a href="http://www.bootply.com/bootstrap-3-migration-guide" target="ext">Read our migration guide for help with upgrading to Bootstrap 3.</a></p>
			</div>

			<hr>

			<h3>Top Members</h3>

			<h5><a href="#"><i class="glyphicon glyphicon-user"></i> John Chapman</a></h5>
			<h5><a href="#"><i class="glyphicon glyphicon-user"></i> Max Axleton</a></h5>
			<h5><a href="#"><i class="glyphicon glyphicon-user"></i> Devin Skelly</a></h5>
			<h5><a href="#"><i class="glyphicon glyphicon-user"></i> Katie Kowalski</a></h5>
			<h5><a href="#"><i class="glyphicon glyphicon-user"></i> Amet Deberge</a></h5>

			<hr>

			<img class="img-responsive" src="//placehold.it/300x200/FFF">

			<div class="media">
				<a class="pull-left" href="#">
					<img class="media-object" src="http://placehold.it/80/F0F0F0">
				</a>
				<div class="media-body">
					<h5 class="media-heading"><a class="pull-right" href="/tagged/modal" target="ext"><i class="glyphicon glyphicon-share"></i></a> <a href="#"><strong>Modal</strong></a></h5>
					<small>Examples using the Bootstrap modal.</small><br>
					<span class="badge">87</span>
				</div>
			</div>
			<div class="media">
				<a class="pull-left" href="#">
					<img class="media-object" src="http://placehold.it/80/F0F0F0">
				</a>
				<div class="media-body">
					<h5 class="media-heading"><a class="pull-right" href="/tagged/slider" target="ext"><i class="glyphicon glyphicon-share"></i></a> <a href="#"><strong>Carousel</strong></a></h5>
					<small>How to use the Bootstrap slider.</small><br>
					<span class="badge">322</span>
				</div>
			</div>
			<div class="media">
				<a class="pull-left" href="#">
					<img class="media-object" src="http://placehold.it/80/F0F0F0">
				</a>
				<div class="media-body">
					<h5 class="media-heading"><a class="pull-right" href="/tagged/typography" target="ext"><i class="glyphicon glyphicon-share"></i></a> <a href="#"><strong>Typography</strong></a></h5>
					<small>See the various textual elements and options.</small><br>
					<span class="badge">44</span>
				</div>
			</div>
			<div class="media">
				<a class="pull-left" href="#">
					<img class="media-object" src="http://placehold.it/80/F0F0F0">
				</a>
				<div class="media-body">
					<h5 class="media-heading"><a class="pull-right" href="/tagged/media" target="ext"><i class="glyphicon glyphicon-share"></i></a> <a href="#"><strong>@Media</strong></a></h5>
					<small>Use @media queries to get the layout you want.</small><br>
					<span class="badge">119</span>
				</div>
		 </div>

	 </div>
	 </div><!--/panel-->
</div>
