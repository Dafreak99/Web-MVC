<div class="main">
	<div class="content">
		<div class="content_top">
			<h3>Sản phẩm nối bật</h3>
		</div>
		<div class="section group row first">
			<?php

			foreach ($productfeathered as $key => $feathered) {
			?>


				<div class="col-6 col-md-6 col-xl-3 product product">
					<a href="<?php echo BASE_URL ?>/product/productdetails/<?php echo $feathered['productId'] ?>">
						<div class="card">
							<img class="card-img-top" src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $feathered['image'] ?>" alt="" />
							<div class="card-body">
								<h5 class="card-title"><?php echo $feathered['productName'] ?></h5>
								<p><span class="price"><?php echo "$" . $feathered['price'] ?></span></p>
							</div>
						</div>
					</a>

				</div>


			<?php
			}
			// }
			?>
		</div>
		<div class="content_bottom">
			<h3>Sản phẩm mới</h3>
		</div>
		<div class="section group row">
			<?php

			foreach ($productnew as $key => $new) {
			?>
				<div class="col-6 col-md-6 col-xl-3 product product">
					<a href="<?php echo BASE_URL ?>/product/productdetails/<?php echo $new['productId'] ?>">
						<div class="card">
							<img class="card-img-top" src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $new['image'] ?>" alt="" />
							<div class="card-body">
								<h5 class="card-title"><?php echo $new['productName'] ?></h5>
								<p><span class="price"><?php echo number_format($new['price'], 0, ',', '.') . ' VNĐ' ?></span></p>
							</div>
						</div>
					</a>

				</div>
			<?php
			}
			// }
			?>
		</div>
	</div>
</div>
<?php
