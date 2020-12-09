<?php
if (!empty($_GET['msg'])) {
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value) {
        echo '<span style="color:blue;font-weight:bold;">' . $value . '</span>';
    }
    // unset($msg);
}
?>
<div class="col-10 section-padding">
    <div>
        <h3>Category List</h3>

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
                $i = 0;
                foreach ($listcategory as $key => $list) {
                    $i++;
                ?>
                    <tr class="odd gradeX">
                        <td><?php echo $i; ?></td>
                        <td><?php echo $list['catName'] ?></td>
                        <td><a href="<?php echo BASE_URL ?>/category/delete_category/<?php echo $list['catId'] ?>">Delete</a> || <a href="<?php echo BASE_URL ?>/category/edit_category/<?php echo $list['catId'] ?>">Edit</a></td>
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


                    <li class="<?php echo ($i == $p) ? 'active' : '' ?>">
                        <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
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
<script type="text/javascript">
    $(document).ready(function() {
        setupLeftMenu();

        $('.datatable').dataTable();
        setSidebarHeight();
    });
</script>