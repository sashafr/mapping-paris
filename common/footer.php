<?php

/**
 * @package     omeka
 * @subpackage  neatline-NeatLight
 * @copyright   2014 Rector and Board of Visitors, University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 */

?>

<footer id="footer">
  <div class="inner">

    <h3>What are you looking for?</h3>

    <form action="#" method="post">
      <div id="search-container" role="search">
          <?php if (get_theme_option('use_advanced_search') === null || get_theme_option('use_advanced_search')): ?>
          <?php echo search_form(array('show_advanced' => true)); ?>
          <?php else: ?>
          <?Php echo search_form(); ?>
          <?php endif; ?>
      </div>
    <div class="copyright">
      &copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.
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
