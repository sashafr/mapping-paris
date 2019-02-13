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
              
  <script type="text/javascript">
  jQuery(document).ready(function () {
      Omeka.showAdvancedForm();
      Omeka.skipNav();
      Omeka.megaMenu("#top-nav");
      Seasons.mobileSelectNav();
  });
  </script>
</body>
</html>
