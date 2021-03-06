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
                <div id="page-nav-wrapper" class="cf">
                    <header>
                        <div class="mobile-title"><?php wp_title("", true); ?></div>
                        <nav id="page-nav">
                            <span id="page-title"><?php wp_title("", true); ?></span>
                            <?php
                              if (!is_home()) {
                                  if($post->post_parent) {
                                    $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
                                  } else {
                                    $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
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
</div>

<?php get_footer(); ?>