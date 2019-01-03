<?php

/**
 * @package     omeka
 * @subpackage  neatline-NeatLight
 * @copyright   2014 Rector and Board of Visitors, University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 */

?>
</div>

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

    <!-- Footer -->
      <footer id="footer">
        <ul class="icons">
          <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
          <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
          <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
          <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
          <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
          <li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
        </ul>
        <ul class="copyright">
          <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
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
