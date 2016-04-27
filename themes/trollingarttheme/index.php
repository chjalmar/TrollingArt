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
			<?php get_sidebar('thin'); ?>
		<!--/end left column-->
  	<!--mid column-->
			<?php get_sidebar(); ?>
		<!--/end mid column-->
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
