<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package trollingarttheme
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>
<div class="col-md-2">
	<div class="panel panel-default" id="sidebar">
		<?php if(is_home() || is_front_page()) { ?>
				<div class="panel-heading" style="color: rgb(255, 255, 255); background-color: rgb(136, 136, 136);">Sidebar</div>
		<?php } ?>
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
	  <i class="fa-2x fa fa-facebook-square"></i>&nbsp;
	  <i class="fa-2x fa fa-twitter-square"></i>&nbsp;
	  <i class="fa-2x fa fa-instagram"></i>&nbsp;
	  <i class="fa-2x fa fa-github-square"></i>
	</div>

	</div><!--/panel body-->
	</div><!--/panel-->
</div>
