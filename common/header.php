<!DOCTYPE HTML>
<html lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8" />
    <?php if ( $description = option('description')): ?>
        <meta name="description" content="<?php echo $description; ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php endif; ?>
    <?php
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <!-- Plugin Stuff -->
    <?php fire_plugin_hook('public_head', array('view'=>$this)); ?>

    <!-- CSS -->
    <?php
        queue_css_file(array( 'style'));
        echo head_css();
    ?>

    <!-- JavaScripts -->
    <?php
        queue_js_file(array( 'jquery.min','jquery.dropotron.min', 'jquery.scrollex.min', 'browser.min', 'breakpoints.min', 'util', 'main'));
        echo head_js();
    ?>
</head>

<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>

    <!-- Header -->
    <header id="header" class="alt">
        <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>
        <h1> <?php echo link_to_home_page(option('site_title')); ?> </h1>

        <!--
        <div id="search-container" role="search">
          <?php echo search_form(array()); ?>
        </div>
        -->

        <section id="cta">
          <div id="search-container" role="search">
            <div class="row gtr-50 gtr-uniform">
              <div class="col-8 col-12-mobilep">
                <?php echo search_form(array()); ?>
              </div>
              <div class="col-4 col-12-mobilep">
                <input type="submit" value="Sign Up" class="fit" />
              </div>
            </div>
          </div>

        </section>

        <nav id="nav">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li>
              <a href="#" class="icon fa-angle-down">Menu</a>
              <ul>
                <?php echo public_nav_main(); ?>
                <li>
                  <a href="#">Submenu</a>
                  <ul>
                    <li><a href="#">Option One</a></li>
                    <li><a href="#">Option Two</a></li>
                    <li><a href="#">Option Three</a></li>
                    <li><a href="#">Option Four</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#" class="button">Sign Up</a></li>
          </ul>
        </nav>
    </header>
