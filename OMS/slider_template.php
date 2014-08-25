<?php
/*
Template Name: Slider Template
*/
?>

<?php get_header(); ?>

<ul class="bxslider">
	<?php
		$pages = get_pages("child_of=".$post->ID);
		foreach($pages as $child) { ?>
			<li>
				<div id="container" class="cf" style="background-image:url(<?php the_field('background_image', $child->ID); ?>); background-size:cover;">	
					<div id="content">
						<div id="content-copy-wrapper">
							<div class="appointment">
										<a href="" class="link">Request an Appointment</a>
										<div class="mobile-phone">888.867.5309</div>
										<div class="formDrop">
											<script type="text/javascript" src="https://www.formstack.com/forms/js.php?1775342-pDLbSvuQMj-v3"></script><noscript><a href="https://www.formstack.com/forms/?1775342-pDLbSvuQMj" title="Online Form">Online Form - THPG - Orthopedic Medicine Specialist Appointment Request</a></noscript>
										</div>
							
							</div>
							<div id="content-copy">                
								<div id="page-nav-wrapper" class="cf">
									<header>
										<div class="mobile-title"><?php echo get_the_title($child->ID); ?></div>
										<nav id="page-nav">
											<span id="page-title"><?php echo get_the_title($child->ID); ?></span>
											
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
									<?php 
									$id=$child->ID; 
									$post = get_post($id); 
									$content = apply_filters('the_content', $post->post_content); 
									echo $content;  
									?>
							</div>
						</div>
					</div>
				</div>
			</li>
	<?php
		} 
	?>
</ul>

<!--
<ul class="bxslider">


  <li><img src="/images/pic1.jpg" />hi</li>
  <li><img src="/images/pic2.jpg" />hi2</li>
  <li><img src="/images/pic3.jpg" />hi3</li>
  <li><img src="/images/pic4.jpg" />hi4</li>
</ul>


<div id="container" class="cf" style="background-image:url(<?php the_field('background_image'); ?>); background-size:cover;">	
	<div id="content">
    <div class="arrow-left"><?php echo ruab_prev_page_link(); ?></div>
	<div class="arrow-right"><?php echo ruab_next_page_link(); ?></div>
		<div id="content-copy-wrapper">
        <div class="appointment">
                    <a href="" class="link">Request an Appointment</a>
                    <div class="mobile-phone">888.867.5309</div>
                    <div class="formDrop">
                        <script type="text/javascript" src="https://www.formstack.com/forms/js.php?1775342-pDLbSvuQMj-v3"></script><noscript><a href="https://www.formstack.com/forms/?1775342-pDLbSvuQMj" title="Online Form">Online Form - THPG - Orthopedic Medicine Specialist Appointment Request</a></noscript>
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
-->
<?php get_footer(); ?>