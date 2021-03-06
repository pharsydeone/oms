<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>


<div id="container" class="cf" style="background-image:url(<?php the_field('background_image'); ?>); background-size:cover;">	
		<div id="content">
		<div class="arrow-left"><?php echo ruab_prev_page_link(); ?></div>
		<div class="arrow-right"><?php echo ruab_next_page_link(); ?></div>
            <div id="content-copy-wrapper">
				<div class="appointment">
                    <a href="" class="link">Request an Appointment</a>
                    <div class="mobile-phone">888.867.5309</div>
                    <div class="formDrop">
<script type="text/javascript" src="https://www.formstack.com/forms/js.php?no_style=1&form=1775342&viewkey=pDLbSvuQMj&style_version=v3"></script><noscript><a href="https://www.formstack.com/forms/?1775342-pDLbSvuQMj" title="Online Form">Online Form - THPG - Orthopedic Medicine Specialist Appointment Request</a></noscript> 
                    </div>
                </div>
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
</div>

<?php get_footer(); ?>