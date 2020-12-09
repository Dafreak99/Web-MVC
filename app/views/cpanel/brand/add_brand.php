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
        <h3>Add brand</h3>
        <div class="block copyblock">
            <form action="<?php echo BASE_URL ?>/brand/insert_brand" method="post">
                <table class="form">
                    <tr>
                        <td>
                            <input type="text" name="brandName" placeholder="Thêm thương hiệu sản phẩm..." class="medium" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="btn btn-primary" type="submit" name="submit" Value="Save" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>