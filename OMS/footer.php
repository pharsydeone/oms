    <div id="footer">
        <a href="<?php bloginfo('stylesheet_url'); ?>" id="footer-logo" title="Texas Health Physicians Group"><img src="<?php bloginfo('template_directory'); ?>/images/thpg-logo-footer.png"></a>
        <div id="footer-links">
			<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
        </div>
        <p class="copyright">&copy; <?php echo date("Y"); ?> Texas Health Physicians Group</p>
    </div>
</div>
</body>
</html>