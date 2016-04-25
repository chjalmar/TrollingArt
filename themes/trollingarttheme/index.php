<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package trollingarttheme
 */

get_header(); ?>

<!-- Begin Body -->
<div class="container">
	<div class="no-gutter row">
      		<!-- left side column -->
  			<div class="col-md-2">
              	<div class="panel panel-default" id="sidebar">
                <div class="panel-heading" style="color: rgb(255, 255, 255); background-color: rgb(136, 136, 136);">Sidebar</div>
                <div class="panel-body">
      			<ul class="nav nav-stacked">
                    <li><a href="#">Link</a></li>
          			<li><a href="#">Link</a></li>
                  	<li><a href="#">Link</a></li>
          			<li><a href="#">Link</a></li>
                  	<li><a href="#">Link</a></li>
          			<li><a href="#">Link</a></li>
				</ul>
                <div class="accordion" id="accordion2">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" href="#collapseOne" data-toggle="collapse" data-parent="#accordion2">
                                Accordion
                            </a>
                        </div>
                        <div class="accordion-body collapse in" id="collapseOne">
                            <div class="accordion-inner">
                                Content here for links, ads, etc..
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" href="#collapseTwo" data-toggle="collapse" data-parent="#accordion2">
                                    Accordion
                                </a>
                            </div>
                            <div class="accordion-body collapse" id="collapseTwo">
                                <div class="accordion-inner">
                                    Another collapse panel. Content here for links, ads, etc..
                                </div>
                            </div>
                        </div>
               	</div><!--/acc-->

                  <hr>

                <div class="col col-span-12">
                  <i class="icon-2x icon-facebook"></i>&nbsp;
                  <i class="icon-2x icon-twitter"></i>&nbsp;
                  <i class="icon-2x icon-linkedin"></i>&nbsp;
                  <i class="icon-2x icon-pinterest"></i>
                </div>

                </div><!--/panel body-->
              </div><!--/panel-->
      		</div><!--/end left column-->

      		<!--mid column-->
      		<div class="col-md-3">
              <div class="panel" id="midCol">
                <div class="panel-heading" style="color: rgb(238, 238, 238); background-color: rgb(85, 85, 85);">New Stories</div>
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
      		</div><!--/end mid column-->

      		<!-- right content column-->
      		<div class="col-md-7" id="content">
            	<div class="panel">
    						<div class="panel-heading" style="color: rgb(255, 255, 255); background-color: rgb(17, 17, 17);">Top Stories</div>
              	<div class="panel-body">
									<?php while ( have_posts() ) : the_post(); ?>
									<?php
										/*
										 * Include the Post-Format-specific template for the content.
										 * If you want to override this in a child theme, then include a file
										 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
										 */
										get_template_part( 'template-parts/content', get_post_format() );
										?>
									<?php endwhile; ?>
                </div><!--/panel-body-->
              </div><!--/panel-->
              	<!--/end right column-->
							<div class="pull-right">
								<?php numericPagination(); ?>
							</div>
      		</div>
  	</div>
</div>
<?php get_footer(); ?>
