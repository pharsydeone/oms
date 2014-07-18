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
   var height = $(this).height() - ($("#header-wrapper").height() + $("#footer").height() + $("#header-wrapper2").height() + 60)
   if($('#container').height() < height) {
		$('#container').height(height);
   }
})

$(window).resize(); //on page load
</script>

</body>
</html>