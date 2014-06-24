<?php
/*
Template Name: Default Content Page
*/
?>
<?php get_header(); ?>

<?php
    global $post;
 
    if($post->post_parent) {
        $parent_id = get_post_ancestors($post->ID);
        $id = end($parent_id);
    } else {
        $id = $post->ID;
    }
    wp_list_pages('title_li=&child_of=' . $id);
?> 


    <div id="container" class="cf" style="background-image:url(<img src="<?php bloginfo('template_directory'); ?>/images/heroimage1920x1080.jpg)">
            <div id="content">
                <div id="content-copy">
					<div id="page-nav-wrapper" class="cf">
						<header>
							<nav id="page-nav">
								<ul>
									<li id="page-title"><a href="">Sub Nav 1</a></li>
									<li id="page-nav-item"><a href="">Sub Nav 2</a></li>
									<li id="page-nav-item"><a href="">Sub Nav 3</a></li>
									<li id="page-nav-item"><a href="">Sub Nav 4</a></li>
									<li id="page-nav-item"><a href="">Sub Nav 5</a></li>
								</ul>
							</nav>
						</header>
					</div>
					<?php if (have_posts()) : while (have_posts()) : the_post();?>
						<?php the_content(); ?>
					<?php endwhile; endif; ?>
                </div>
            </div>
    </div>
<?php get_footer(); ?>