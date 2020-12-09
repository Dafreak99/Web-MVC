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
        <h3>Product List</h3>
        <div class="block">  
		<?php
			// if(isset($Delpro))
			// {
			// 	echo $Delpro;
			// }
		?>
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>ID</th>
					<th>Product Name</th>
					<th>Product Price</th>
					<th>Product Image</th>
					<th>Category</th>
					<th>Brand</th>
					<th>Description</th>
					<th>Type</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					// $pdlist = $pd->show_product();
					// if($pdlist)
					// {
					// 	$i = 0;
					// 	while($result = $pdlist->fetch_assoc())
					// 	{
					// 		$i++;
					// $stt = 1; foreach($page_product as $result): 
						$i =0;
						foreach($listproduct as $key => $listpro)
						{
						  $i++;
					
				?>
				<tr class="odd gradeX">
					<td><?php echo $i ?></td>
					<td><?php echo $listpro['productName'] ?></td>
					<td><?php echo $listpro['price'] ?></td>
					<td><img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $listpro['image'] ?>" width="80"></td>
					<td><?php echo $listpro['catId'] ?></td>
					<td><?php echo $listpro['brandId'] ?></td>
					<td><?php echo $listpro['product_desc']; ?></td>
					<td><?php 
						if($listpro['type']==0)
						{
							echo 'Feathered';
						}
						else
						{
							echo 'None-Featherd';
						}
					?></td>
					<td><a href="<?php echo BASE_URL ?>/product/delete_product/<?php echo $listpro['productId'] ?> ">Delete</a> || 
					<a href="<?php echo BASE_URL ?>/product/edit_product/<?php echo $listpro['productId'] ?>">Edit</a></td>
				</tr>
				<?php
						}
					// }
					// $stt++; endforeach
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

											<?php 
											// for( $i = 1 ; $i <= $sotrang ; $i++) : 
												?>
                                                <?php 
                                                    // if(isset($_GET['page']))
                                                    // {
                                                    //     $p = $_GET['page'];
                                                    // }
                                                    // else
                                                    // {
                                                    //     $p = 1;
                                                    // }
                                                ?>
													<li class="<?php 
													// echo ($i == $p) ? 'active' : '' 
													?>">

														<a href="?page=<?php 
														// echo $i ;
														?>"><?php 
														// echo $i; 
														?></a>
                                                    </li>
											<?php 
											// endfor; 
											?>

                                            <li>
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