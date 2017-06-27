<?php

/**
 * @package     omeka
 * @subpackage  neatline
 * @copyright   2014 Rector and Board of Visitors, University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 */

?>

<!-- Texts. -->
<div class="tester"><?php echo all_element_texts('item'); ?></div>

<!-- Files. -->
<?php if (metadata('item', 'has files')): ?>
  <h3><?php echo __('Files'); ?></h3>
    <div class="lightbocks"></div>

        <?php
        $files = $item->Files;
        if($files) {
            foreach($files as $file) {
                if(preg_match('#^image#', $file->mime_type)) {
                    echo file_image('fullsize', array('data-lightbox' => 'image'), $file);
                }
            }
        }
        ?>
        
     <?php echo files_for_item(
          array('imageSize' => 'fullsize', 'linkAttributes' => array('data-lightbox' => 'image'))); ?>
<?php endif; ?>        
    </div>
  

<hr />

<!-- Link. -->
<?php echo link_to(
  get_current_record('item'), 'show', 'View the item in Omeka'
); ?>