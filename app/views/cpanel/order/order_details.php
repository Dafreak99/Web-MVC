

<div class="grid_10">
            <div class="box round first grid">
                <h3>Thông tin đơn hàng</h3>
                <div class="block">
				    
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>ID</th>
                            <th>Tên người đặt</th>
							<th>Email</th>
							<th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Ghi chú</th>
						</tr>
					</thead>
					<tbody>
                    <?php
                        $i =0;
                        // $total = 0;
                        foreach($order_info as $key => $ord)
                        {
                            // $total+=$ord['product_quantity']*$ord['price_product'];
                            $i++;
                        
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $ord['name'] ?></td>
                        <td><?php echo $ord['email'] ?></td>
                        <td><?php echo $ord['sodienthoai'] ?></td>
                        <td><?php echo $ord['diachi'] ?></td>
                        <td><?php echo $ord['noidung'] ?></td>
                        </tr>
                    <?php
                        }
                    ?>
					</tbody>
				</table>
               </div>
            </div>
        </div>
        

<div class="grid_10">
            <div class="box round first grid">
                <h3>Danh sách đơn hàng</h3>
                <div class="block">
				    
                    <table class="data display datatable" id="example">
					<thead>
                    <tr>
                        <th>Id</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Thành tiền</th>
                    </tr>
					</thead>
					<tbody>
                    <?php
                        $i =0;
                        $total = 0;
                        foreach($order_details as $key => $ord)
                        {
                            $total+=$ord['product_quantity']*$ord['price'];
                            $i++;
                        
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $ord['productName'] ?></td>
                        <td><img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $ord['image'] ?>" height="100" width="100" alt=""></td>
                        
                        <td><?php echo $ord['product_quantity'] ?></td>
                        <td><?php echo number_format($ord['price'],0,',','.').'đ' ?></td>
                        <td><?php echo number_format($ord['product_quantity']*$ord['price'],0,',','.').'đ' ?></td>
                        </tr>
                    <?php
                        }
                    ?>
                    <form action="<?php echo BASE_URL ?>/order/order_confirm/<?php echo $ord['order_code'] ?>" method="POST">
                    <tr>
                        <td><input type="submit" name="update_order" value="Xác nhận đơn hàng cho khách" class="btn btn-default"></td>
                        <td colspan="6">Tổng tiền:<?php 
                        echo number_format($total,0,',','.').'đ' 
                        ?></td>
                    </tr>
                    </form>
					</tbody>
				</table>
				
               </div>
            </div>
        </div>
