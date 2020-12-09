
<?php
    if(!empty($_GET['msg']))
    {
        $msg = unserialize(urldecode($_GET['msg']));
        foreach ($msg as $key => $value)
        {
            echo '<span style="color:blue;font-weight:bold;">'.$value.'</span>';
        }
    }
?>
<div class="grid_10">
            <div class="box round first grid">
                <h3>Danh sách đơn hàng</h3>
                <div class="block">
				    
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>ID</th>
                            <th>Đơn hàng</th>
							<th>Ngày đặt</th>
							<th>Tình trạng</th>
                            <th>Quản lí</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$i= 0 ;
                            foreach($order as $key => $ord )
                            {
                                $i++;
						?>
						<tr class="odd gradeX">
                        <td><?php echo $i ?></td>
                        <td><?php echo $ord['order_code'] ?></td>
                        <td><?php echo $ord['order_date'] ?></td>
                        <td><?php if($ord['order_status'] == 0){echo 'Chưa xác nhận';}else{echo 'Đã xác nhận';} ?></td>
                        <td><a href="<?php echo BASE_URL ?>/order/order_details/<?php echo $ord['order_code'] ?>">Xem đơn hàng</a></td>
						</tr>
						<?php
                            }
						?>
					</tbody>
				</table>
				<div class="pull-right">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>

                           
                            <li class="<?php 
                            // echo ($i == $p) ? 'active' : '' 
                            ?>">
                                <a href="?page=<?php 
                                // echo $i ;
                                ?>"><?php 
                                // echo $i; 
                                ?></a>
                            </li>
                           
                            	<a href="#" aria-label="Next">
                            	<span aria-hidden="true">&raquo;</span>
                            </a>
                            </li>
                        </ul>
                    </nav>
               </div>
               </div>
            </div>
        </div>
        <script type="text/javascript">
	$(document).ready(function () {
	    setupLeftMenu();

	    $('.datatable').dataTable();
	    setSidebarHeight();
	});
</script>