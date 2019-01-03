<!DOCTYPE HTML>
<html lang="<?php echo get_html_lang(); ?>">
	<head>
		<meta charset="utf-8" />
    <?php if ( $description = option('description')): ?>
        <meta name="description" content="<?php echo $description; ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php endif; ?>
		<link rel="stylesheet" href="themes/mapping-paris/css/neatlite-najay.css" />
	</head>
	<body class="landing is-preload">
		<div id="page-wrapper">



      <?php
      if (isset($title)) {
          $titleParts[] = strip_formatting($title);
      }
      $titleParts[] = option('site_title');
      ?>
      <title><?php echo implode(' &middot; ', $titleParts); ?></title>

      <?php echo auto_discovery_link_tags(); ?>

      <?php
      $title = (isset($title)) ? $title : null;
      $item = (isset($item)) ? $item : null;
      $tour = (isset($tour)) ? $tour : null;
      $file = (isset($file)) ? $file : null;
      ?>

			<!-- Header -->
				<header id="header" class="alt">
					<h1><a href="index.php">Mapping Paris</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>
								<a href="#" class="icon fa-angle-down">Navigation Dropdown</a>
								<ul>
									<li><a href="generic.php">Generic</a></li>
									<li><a href="contact.php">Contact</a></li>
									<li><a href="elements.php">Elements</a></li>
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
							<li><a href="#" class="button">Sign In</a></li>
						</ul>
					</nav>
				</header>

		</div>

		<!-- Scripts -->
			<script src="themes/mapping-paris/js/jquery.min.js"></script>
			<script src="themes/mapping-paris/js/jquery.dropotron.min.js"></script>
			<script src="themes/mapping-paris/js/jquery.scrollex.min.js"></script>
			<script src="themes/mapping-paris/js/browser.min.js"></script>
			<script src="themes/mapping-paris/js/breakpoints.min.js"></script>
			<script src="themes/mapping-paris/js/util.js"></script>
			<script src="themes/mapping-paris/js/main.js"></script>

	</body>
</php>
