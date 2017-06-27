<?php

/**
 * @package     omeka
 * @subpackage  neatline-NeatLight
 * @copyright   2014 Rector and Board of Visitors, University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 */

?>
<?php queue_css_file('lightbox');?>
<?php queue_js_file('lightbox');?>
<?php queue_css_file('lightbox.min', 'all', false, 'lightbox/css'); ?>
<?php queue_css_file('style'); ?>

<?php echo head(array(
  'title' => nl_getExhibitField('title'),
  'bodyclass' => 'neatline show'
)); ?>

<!-- Exhibit -->
<div class="exhibit">
  <?php echo nl_getExhibitMarkup(); ?>
</div>

<?php echo js_tag('lightbox.min', 'lightbox/js'); ?>

<?php echo foot(); ?>
