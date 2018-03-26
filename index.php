<?php echo head(array('bodyid'=>'home')); ?>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>Recently Added Items</h1>
					</header>

					<div class="flex ">
						<?php echo recent_items(3); ?>
					</div>

					<footer>
						<a href="#" class="button">View All Items</a>
					</footer>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper align-center">
				<div class="inner">
					<div class="flex flex-2">
						<article>
							<?php if (get_theme_option('Display Featured Collection') !== '0'): ?>
							<!-- Featured Item -->
							<div id="featured-collection">
							    <h2><?php echo __('Featured Item'); ?></h2>
							    <?php echo random_featured_collection(1); ?>
							</div><!--end featured-item-->
							<?php endif; ?>
							<footer>
								<a href="#" class="button">See More *should link to all collections page*</a>
							</footer>
						</article>

						<article>
							<div class="image round">
								<img src="images/pic02.jpg" alt="Pic 02" />
							</div>
							<header>
								<h3>Sed feugiat<br /> tempus adipicsing</h3>
							</header>
							<p>Pellentesque fermentum dolor. Aliquam quam lectus<br />facilisis auctor, ultrices ut, elementum vulputate, nunc<br /> blandit ellenste egestagus commodo.</p>
							<footer>
								<a href="#" class="button">Learn More</a>
							</footer>
						</article>
					</div>
				</div>
			</section>


		<!-- Footer -->
			<footer id="footer">
				<div class="inner">

					<h3>Get in touch</h3>

					<form action="#" method="post">

						<div class="field half first">
							<label for="name">Name</label>
							<input name="name" id="name" type="text" placeholder="Name">
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input name="email" id="email" type="email" placeholder="Email">
						</div>
						<div class="field">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
						</div>
						<ul class="actions">
							<li><input value="Send Message" class="button alt" type="submit"></li>
						</ul>
					</form>

					<div class="copyright">
						&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.
					</div>

				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

<?php echo foot(); ?>
