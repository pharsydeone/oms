<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>


<div id="container" class="cf" style="background-image:url(<?php the_field('background_image'); ?>)">	
		<div id="content">
			<div class="home-spacer"></div>
			<div id="content-copy">
				<div class="home-title"><?php the_field('home_title'); ?></div>
				<div class="home-sub-title"><?php the_field('home_subtitle'); ?></div>
				<div class="home-copy">
					<?php if (have_posts()) : while (have_posts()) : the_post();?>
						<?php the_content(); ?>
					<?php endwhile; endif; ?>
				</div>
					   
				<p>&nbsp;</p>
		  </div>
		</div>
</div>

<?php get_footer(); ?>