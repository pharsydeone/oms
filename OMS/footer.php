    <div id="footer">
        <a href="<?php echo home_url(); ?>" id="footer-logo" title="Texas Health Physicians Group"><img src="<?php bloginfo('template_directory'); ?>/images/thpg-logo-footer.png"></a>
        <div id="footer-links">
			<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
        </div>
        <p class="copyright">&copy; <?php echo date("Y"); ?> Texas Health Physicians Group</p>
    </div>
</div>

<!-- <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script> -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.sidr.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/modernizr.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/respond.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/thpg.js"></script>

<script type="text/javascript" language="javascript">	
$(window).resize(function(){
   var height = $(this).outerHeight() - ($("#header-wrapper").outerHeight() + $("#footer").outerHeight() + $("#header-wrapper2").outerHeight());

    if($('#content-copy').height() < height) {
		$('#container').height(height);

		var topmargin = ((height - $('#content-copy').height()) / 2);
		$('#content-copy').css('margin-top',topmargin+'px');
   } else {
		$('#content-copy').css('margin-top','0px');
   } 
})

$(window).resize(); //on page load

</script>

</body>
</html>