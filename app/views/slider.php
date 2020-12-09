<div class="wrapper">

	<div class="header_bottom row">
		<div class="col-3">
			<div class="category">
				<ul>
					<li>Shop by category</li>
					<?php foreach ($brands as $key => $brand) {

					?>
						<li><a href="<?php echo BASE_URL ?>/allproduct/brand/ <?php echo $brand['brandName'] ?>"><?php echo strtoupper($brand['brandName']) ?></a></li>


					<?php
					} ?>

				</ul>
			</div>
		</div>
		<div class=" col-9">

			<section class="slider">
				<div class="flexslider">
					<ul class="slides">

						<?php
						foreach ($slider_show as $key => $show) {
						?>
							<li><img src="<?php echo BASE_URL ?>/public/uploads/slider/<?php
																						echo $show['slider_image']
																						?>" alt="" /></li>

						<?php
						}
						?>
					</ul>
				</div>
			</section>
		</div>
	</div>