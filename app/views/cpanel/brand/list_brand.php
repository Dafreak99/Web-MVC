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
        <h3>Brand List</h3>
        <div class="block">

            <table class="data display datatable" id="example">
                <thead>
                    <tr>
                        <th>Serial No.</th>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // if(is_array($listbrand))
                    // {
                    $i = 0;
                    foreach ($listbrand as $key => $list) {
                        $i++;
                    ?>
                        <tr class="odd gradeX">
                            <td><?php
                                echo $i
                                ?></td>
                            <td><?php
                                echo $list['brandName']
                                ?></td>
                            <td><a href="<?php echo BASE_URL ?>/brand/delete_brand/<?php echo $list['brandId'] ?>">Delete</a> || <a href="<?php echo BASE_URL ?>/brand/edit_brand/<?php echo $list['brandId'] ?>">Edit</a></td>
                        </tr>
                    <?php
                        // }
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

                        <li class="<?php  ?>">

                            <a href="?page=<?php ?>"><?php  ?></a>
                        </li>

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
    <script type="text/javascript">
        $(document).ready(function() {
            setupLeftMenu();

            $('.datatable').dataTable();
            setSidebarHeight();
        });
    </script>