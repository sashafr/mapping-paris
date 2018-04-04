<?php

/**
 * @package     omeka
 * @subpackage  neatline-NeatLight
 * @copyright   2014 Rector and Board of Visitors, University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 */

?>

<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>">

  <head>

    <meta charset="utf-8">

    <title>
      <?php echo option('site_title');
      echo isset($title) ? ' | ' . $title : ''; ?>
    </title>

    <!-- Google analytics. -->
    <?php fire_plugin_hook('public_head', array('view'=>$this)); ?>

    <!-- CSS/JS. -->
    <?php queue_css_file('paris'); ?>
    <?php queue_css_file('record_images'); ?>
    <?php queue_css_file('lightbox');?>
    <?php queue_js_file('lightbox', 'js');?>
    <?php queue_css_file('neatlite-najay');?>
    <!--?php queue_css_file('lightbox.min', 'all', false, 'lightbox/css'); ?-->
    <?php echo head_css(false); ?>
    <?php echo head_js(false); ?>

    <!-- Typekit. -->
    <script src="//use.typekit.net/ray7ejh.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>

  </head>

  <?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <div class="container">

      <!-- Header -->
      <header id="header">
        <div class="inner">
          <a href="index.php" class="logo">The <strong>Playground</strong></a>
          <nav id="nav">
            <?php echo link_to_items_browse("Browse Items") ?>
            <?php echo link_to("Collections", "browse", "Browse Collections") ?>
            <?php echo link_to("NeatlineExhibit", "browse", "Neatline") ?>
          </nav>
          <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
        </div>

      </header>
