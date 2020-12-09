<?php
if (!empty($_GET['msg'])) {
	$msg = unserialize(urldecode($_GET['msg']));
	foreach ($msg as $key => $value) {
		echo '<span style="color:blue;font-weight:bold;">' . $value . '</span>';
	}
}
?>
<div class="grid_10">
	<div class="box round first grid">
		<h3>Slider List</h3>
		<div class="block">
			<?php
			if (isset($del_slider)) {
				echo $del_slider;
			}
			?>
			<table class="data display datatable" id="example">
				<thead>
					<tr>
						<th>No.</th>
						<th>Slider Title</th>
						<th>Slider Image</th>
						<!-- <th>Type</th> -->
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 0;
					foreach ($list_slider as $key => $list) {
						$i++;
					?>
						<tr class="odd gradeX">
							<td><?php echo $i; ?></td>
							<td><?php echo $list['sliderName']; ?></td>
							<td><img src="<?php echo BASE_URL ?>/public/uploads/slider/<?php echo $list['slider_image'] ?>" height="40px" width="60px" /></td>

							<td>
								<a href="<?php echo BASE_URL ?>/slider/delete_slider/<?php echo $list['sliderId'] ?>" onclick="return confirm('Do you want to delete this item?');">Delete</a>

							</td>
						</tr>
					<?php
					}
					?>
				</tbody>
			</table>

		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		setupLeftMenu();

		$('.datatable').dataTable();
		setSidebarHeight();
	});
</script>