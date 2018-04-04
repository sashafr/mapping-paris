<?php echo head(array('bodyid'=>'home')); ?>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">

					<header>
						<h1>Recently Added Items</h1>
					</header>

					<div class="flex">
						<?php echo recent_items(3); ?>
					</div>

					<footer>
						<a href="items/browse" class="button">View All Items</a>
					</footer>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper align-center">
				<div class="inner">
					<div class="flex flex-2">
						<article>
							<?php if (get_theme_option('Display Featured Collection') !== '0'): ?>
							<!-- Featured Collection -->
							<div id="featured-collection">
							    <h2><?php echo __('Featured Collection'); ?></h2>
							    <?php echo random_featured_collection(1); ?>
							</div><!--end featured-collection-->
							<?php endif; ?>
							<footer>
								<a href="collections/browse" class="button">See More</a>
							</footer>
						</article>

						<article>
							<?php if (get_theme_option('Display Featured Item') !== '0'): ?>
							<!-- Featured Item -->
							<div id="featured-item">
							    <h2><?php echo __('Featured Item'); ?></h2>
							    <?php echo random_featured_items(1); ?>
							</div><!--end featured-item-->
							<?php endif; ?>
							<footer>
								<a href="items/browse" class="button">See More</a>
							</footer>
						</article>
					</div>
				</div>
			</section>


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

<?php echo foot(); ?>
