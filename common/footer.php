<?php

/**
 * @package     omeka
 * @subpackage  neatline-NeatLight
 * @copyright   2014 Rector and Board of Visitors, University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 */

?>

<footer id="footer">
  <div id="custom-footer-text">
      <?php if ( $footerText = get_theme_option('Footer Text') ): ?>
      <p><?php echo $footerText; ?></p>
      <?php endif; ?>
      <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
          <p><?php echo $copyright; ?></p>
      <?php endif; ?>
  </div>

  <p><?php echo __('Proudly powered by <strong>Omeka<strong></a>.'); ?></p>

<?php fire_plugin_hook('public_footer', array('view' => $this)); ?>
</footer>

</div><!--end wrap-->

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
