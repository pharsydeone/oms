<?php get_header(); ?>

<div id="container" class="cf" style="background-image:url(<?php the_field('background_image'); ?>)">	
	<div class="arrow-left"><?php echo ruab_prev_page_link(); ?></div>
	<div class="arrow-right"><?php echo ruab_next_page_link(); ?></div>
	<div id="content">
		<div id="content-copy">
			<div id="page-nav-wrapper" class="cf">
				<header>
					<nav id="page-nav">
						<span id="page-title"><?php wp_title(); ?></span>
						<?php
						  if (!is_home()) {
							  if($post->post_parent) {
								$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
								$var1 = '<a';
								$var2 = '<span id="page-nav-item"><a';
								$var3 = '</a>';
								$var4 = '</a></span>';
								$children = str_replace($var1, $var2, $children);
								$children = str_replace($var3, $var4, $children);									
							  } else {
								$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
								$var1 = '<a';
								$var2 = '<span id="page-nav-item"><a';
								$var3 = '</a>';
								$var4 = '</a></span>';
								$children = str_replace($var1, $var2, $children);
								$children = str_replace($var3, $var4, $children);
							  }
							  if ($children) { ?>
						  <ul>
						  <?php echo $children; ?>
						  </ul>
						<?php }} ?>
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