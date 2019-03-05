<?php echo head(array('bodyid'=>'home')); ?>

	<!-- Banner -->
		<section id="banner" <?php echo 'style="background-image: url('.WEB_ROOT.'/files/theme_uploads/'.get_theme_option('banner_image').')"' ?>>
			<h2><?php echo option('site_title') ?></h2>
			<?php if (get_theme_option('Homepage Text')): ?>
			    <p><?php echo get_theme_option('Homepage Text'); ?></p>
			<?php endif; ?>
		</section>

	<!-- Main -->
		<section id="main" class="container">
		    
            <?php if (plugin_is_active('Neatline')): ?>
		    
    			<section class="box special features">
    		        <?php set_loop_records('NeatlineExhibits', get_records('NeatlineExhibit')); ?>
    		        <?php $loop_index = 0; ?>
    		        <?php foreach (loop('NeatlineExhibits') as $e): ?>
    		            <?php if ($loop_index % 2 == 0): ?><div class="features-row"><?php endif ?>
        					<section>
        						<a href="<?php echo nl_getExhibitUrl($e, 'fullscreen') ?>"><h3><?php echo nl_getExhibitField('title') ?></h3></a>
    					        <p><?php echo snippet_by_word_count(strip_formatting(nl_getExhibitField('narrative')), 50, '...') ?></p>
    				        </section>
				        <?php if ($loop_index % 2 == 1): ?></div><?php endif ?>
				        <?php $loop_index++; ?>
				    <?php endforeach ?>
				    <?php if (count(get_records('NeatlineExhibit')) % 2 == 1): ?><section>&nbsp;</section></div><?php endif ?> <!-- have to add a blank section if number of neatline exhibits is odd to make the formatting consistent -->
				</section>

            <?php endif; ?>

			<div class="row">
				<div class="col-6 col-12-narrower">

					<section class="box special">
						<span class="image featured"><img src="images/pic02.jpg" alt="" /></span>
						<h3>Sed lorem adipiscing</h3>
						<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
						<ul class="actions special">
							<li><a href="#" class="button alt">Learn More</a></li>
						</ul>
					</section>

				</div>
				<div class="col-6 col-12-narrower">

					<section class="box special">
						<span class="image featured"><img src="images/pic03.jpg" alt="" /></span>
						<h3>Accumsan integer</h3>
						<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
						<ul class="actions special">
							<li><a href="#" class="button alt">Learn More</a></li>
						</ul>
					</section>

				</div>
			</div>

		</section>

	<!-- CTA -->
		<section id="cta">

			<h2>Sign up for beta access</h2>
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