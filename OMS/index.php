<?php
/*
Template Name: Default Content Page
*/
?>
<?php get_header(); ?>
    <div id="container" class="cf" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/heroimage1920x1080.jpg)">
            <div id="content">
                <div id="content-copy">
					<div id="page-nav-wrapper" class="cf">
						<header>
							<nav id="page-nav">
								<span id="page-title"><?php wp_title(); ?></span>
								<?php
								  if($post->post_parent) {
									$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
									$var1 = '<a';
									$var2 = '<span class="testClass" id="page-nav-item"><a';
									$var3 = '</a>';
									$var4 = '</a></span>';
									$children = str_replace($var1, $var2, $children);
									$children = str_replace($var3, $var4, $children);									
								  } else {
									$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
									$var1 = '<a';
									$var2 = '<span class="testClass" id="page-nav-item"><a';
									$var3 = '</a>';
									$var4 = '</a></span>';
									$children = str_replace($var1, $var2, $children);
									$children = str_replace($var3, $var4, $children);
								  }
								  if ($children) { ?>
								  <ul>
								  <?php echo $children; ?>
								  </ul>
								<?php } ?>							
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