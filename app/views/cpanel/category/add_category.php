<?php
if (!empty($_GET['msg'])) {
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value) {
        echo '<span style="color:blue;font-weight:bold;">' . $value . '</span>';
    }
}
?>
<div class="col-10 section-padding">

    <h3>Add category</h3>


    <form action="<?php echo BASE_URL ?>/category/insert_category" method="post">
        <table class="form">
            <tr>
                <td>
                    <input type="text" name="catName" placeholder="Thêm danh mục sản phẩm..." class="medium" />
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" Value="Save" class="btn btn-primary" />
                </td>
            </tr>
        </table>
    </form>
</div>