<!-- Footer -->
      <footer id="footer">
        <div id="footer-text">
              <?php echo get_theme_option('Footer Text'); ?>
              <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
                  <p><?php echo $copyright; ?></p>
              <?php endif; ?>
              <p><?php echo __('A <a target="_blank" href="https://guides.library.upenn.edu/omeka">Penn Libraries Omeka</a> Site'); ?></p>
          </div>

          <?php fire_plugin_hook('public_footer', array('view'=>$this)); ?>
        </footer>
              
		<!-- Scripts -->
			<script src="<?php echo src('jquery.dropotron.min', 'javascripts', 'js'); ?>"></script>
			<script src="<?php echo src('jquery.scrollex.min', 'javascripts', 'js'); ?>"></script>
			<script src="<?php echo src('browser.min', 'javascripts', 'js'); ?>"></script>
			<script src="<?php echo src('breakpoints.min', 'javascripts', 'js'); ?>"></script>
			<script src="<?php echo src('util', 'javascripts', 'js'); ?>"></script>
			<script src="<?php echo src('main', 'javascripts', 'js'); ?>"></script>


</body>
</html>
