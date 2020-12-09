<div class="main">
	<div class="cartoption">
		<!-- <div class="container"> -->

		<div class="cartpage">

			<div class="wrapper">
				<h2>Your Cart</h2>

				<div class="row">

					<table class="tblone col-8">
						<tr>
							<th width="15%">Product Name</th>
							<th width="20%">Image</th>
							<th width="15%">Price</th>
							<th width="25%">Quantity</th>
							<th width="15%">Total Price</th>
							<th width="10%">Action</th>
						</tr>
						<?php
						if (isset($_SESSION['shopping_cart'])) {
						?>
							<form action="<?php echo BASE_URL ?>/giohang/updategiohang" method="POST">
								<?php

								$total = 0;
								foreach ($_SESSION['shopping_cart'] as $key => $value) {
									$subtotal = $value['product_quantity'] * $value['product_price'];
									$total += $subtotal;
								?>
									<tr>
										<td><?php echo $value['product_name'] ?></td>
										<td><img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $value['product_image'] ?>" alt="" width="100px" /></td>

										<td><?php echo number_format($value['product_price'], 0, ',', '.') . ' VNĐ' ?></td>
										<td>
											<input type="hidden" name="cartId" value="" />
											<input type="number" name="qty[<?php echo $value['product_id'] ?>]" min="1" value="<?php echo $value['product_quantity'] ?>" />
											<button type="submit" style="box-shdow: none;" value="<?php echo $value['product_id'] ?>" name="update_cart" class="btn btn-sm btn-primary">Cập nhật</button>
										</td>

										<td><?php echo number_format($subtotal, 0, ',', '.') . ' VNĐ' ?></td>
										<td>
											<button type="submit" style="box-shdow: none;" value="<?php echo $value['product_id'] ?>" name="delete_cart" class="btn btn-sm btn-warning">Xóa</button>

										</td>
									</tr>
								<?php
								}
								?>
							</form>
							<!-- <div class="clear"></div> -->
					</table>

					<div class="col-3 totalcart">
						<div>
							<h5>Total : <span><?php
												echo number_format($total, 0, ',', '.') . ' VNĐ';

												?></span></h5>

						</div>
						<div>
							<div>VAT : <span>10%</span></div>

						</div>
						<div>
							<div>Grand Total : <span><?php
														echo number_format(($total * 0.9), 0, ',', '.') . ' VNĐ';
														?></span></div>

						</div>
					</div>

				</div>



				<div class="register_account">
					<form method="POST" autocomplete="off" action="<?php echo BASE_URL ?>/giohang/dathang/">

						<div class="form-group">
							<label for="name">Họ và tên</label>
							<input type="text" class="form-control" id="name" required>
						</div>
						<div class="form-group">
							<label for="sdt">Số điện thoại</label>
							<input type="text" class="form-control" id="sdt" required>
						</div>
						<div class="form-group">
							<label for="diachi">Địa chỉ</label>
							<input type="text" class="form-control" id="diachi" required>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" id="email" required>
						</div>
						<div class="form-group">
							<label for="noidung">Nội dung</label><br>
							<textarea type="text" name="noidung" required></textarea>
						</div>

						<!-- <input type="submit" class="btn-gui" name="frmSubmit" id="frmSubmit" value="Gửi đơn hàng"> -->
						<button type="submit" class="btn btn-primary" value="Gửi đơn hàng">Submit</button>
					</form>
					</form>
				</div>
			</div>

			<!--  -->
		<?php

						} else {
		?>
			<table style="float:right;text-align:left;" width="60%">
				<tr>
					<th style="width: 100px; height: 30px;">Giỏ hàng trống </th>

				</tr>

			</table>
		<?php
						}
		?>

		</div>
		<div class="shopping">
			<div class="shopleft">

				<a href="index.php"> <img src="images/shop.png" alt="" /></a>
			</div>
			<div class="shopright">
				<a href="payment.php"> <img src="images/checkout.jpg" alt="" /></a>
			</div>
		</div>
	</div>

	<div class="clear"></div>
</div>