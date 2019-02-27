<?php echo head(array('bodyid'=>'home')); ?>

<!-- Banner -->
	<section id="banner">
		<h2>Alpha</h2>
		<p>[this is where we will explain what this project is - mapping paris is... (not too sure)].</p>
		<ul class="actions special">
			<li><a href="#" class="button primary">Sign Up</a></li>
			<li><a href="#" class="button">Learn More</a></li>
		</ul>
	</section>

<!-- Main -->
	<section id="main" class="container">

		<section class="box special">
			<header class="major">
				<h2>[info]
				<br />
				</h2>
				<p>[subtext]</p>
			</header>
			<span class="image featured"><img src="images/pic01.jpg" alt="" /></span>
		</section>

		<section class="box special features">
			<div class="features-row">
				<section>
					<span class="icon major fa-bolt accent2"></span>
					<p><?php echo recent_items(1); ?></p>
				</section>

				<section>
					<span class="icon major fa-area-chart accent3"></span>
					<p><?php echo recent_items(1); ?></p>
				</section>
			</div>

			<div class="features-row">
				<section>
					<p><?php echo recent_items(1); ?></p>
				</section>

				<section>
					<span class="icon major fa-lock accent5"></span>
					<p><?php echo recent_items(1); ?></p>
				</section>
			</div>
		</section>

		<div class="row">
			<div class="col-6 col-12-narrower">

				<section class="box special">
					<span class="image featured"><img src="images/pic02.jpg" alt="" /></span>
				<?php if (get_theme_option('Display Featured Item') !== '0'): ?>
					<!-- Featured Item -->
					<div id="featured-item">
							<h2><?php echo __('Featured Item'); ?></h2>
							<?php echo random_featured_items(1); ?>
					</div><!--end featured-item-->
					<?php endif; ?>
					<ul class="actions special">
						<li><a href="#" class="button alt">Learn More</a></li>
					</ul>
				</section>

			</div>
			<div class="col-6 col-12-narrower">

				<section class="box special">
					<span class="image featured"><img src="images/pic03.jpg" alt="" /></span>
					<?php if (get_theme_option('Display Featured Collection') !== '0'): ?>
					<!-- Featured Collection -->
					<div id="featured-collection">
							<h2><?php echo __('Featured Collection'); ?></h2>
							<?php echo random_featured_collection(1); ?>
					</div><!--end featured-collection-->
					<?php endif; ?>
					<ul class="actions special">
						<li><a href="#" class="button alt">Learn More</a></li>
					</ul>
				</section>

			</div>
			<a href="items/browse" class="button">View All Items</a>
		</div>

	</section>

<!-- CTA -->
	<section id="cta">

		<h2>What are you looking for?</h2>
		<p>Blandit varius ut praesent nascetur eu penatibus nisi risus faucibus nunc.</p>

		<form>
			<div class="row gtr-50 gtr-uniform">
				<div class="col-8 col-12-mobilep">
					<input type="email" name="email" id="email" placeholder="Email Address" />
				</div>
				<div class="col-4 col-12-mobilep">
					<input type="submit" value="Sign Up" class="fit" />
				</div>
			</div>
		</form>

	</section>


<?php echo foot(); ?>
