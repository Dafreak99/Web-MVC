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
        <h3>Sửa sản phẩm</h3>
        <div class="block">
            <?php
            if (isset($updateProduct)) {
                echo $updateProduct;
            }
            ?>
            <?php
            foreach ($productbyid as $key => $pro) {
            ?>
                <form action="<?php echo BASE_URL ?>/product/update_product/<?php echo $pro['productId'] ?>" method="post" enctype="multipart/form-data">
                    <table class="form">

                        <tr>
                            <td>
                                <label>Name</label>
                            </td>
                            <td>
                                <input type="text" name="productName" value="<?php echo $pro['productName'] ?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Category</label>
                            </td>
                            <td>
                                <select id="select" name="category">
                                    <option>------Select Category-------</option>
                                    <?php
                                    foreach ($category as $key => $cate) {
                                    ?>

                                        <option <?php
                                                if ($cate['catId'] == $pro['catId']) {
                                                    echo 'selected';
                                                }
                                                ?> value="<?php echo $cate['catId'] ?>"><?php echo $cate['catName'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Brand</label>
                            </td>
                            <td>
                                <select id="select" name="brand">
                                    <option>-------Select Brand-------</option>
                                    <?php
                                    foreach ($brand as $key => $bra) {

                                    ?>

                                        <option <?php
                                                if ($bra['brandId'] == $pro['brandId']) {
                                                    echo 'selected';
                                                }
                                                ?> value="<?php echo $bra['brandId'] ?>"><?php echo $bra['brandName'] ?></option>
                                    <?php

                                    }
                                    ?>
                                </select>

                            </td>
                        </tr>

                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Description</label>
                            </td>
                            <td>
                                <textarea name="product_desc" class="tinymce"><?php echo $pro['product_desc']; ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Price</label>
                            </td>
                            <td>
                                <input type="text" value="<?php echo $pro['price']; ?>" name="price" class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Upload Image</label>
                            </td>
                            <td>
                                <img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $pro['image'] ?>" width="90"><br>
                                <input type="file" name="image_product" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label>Product Type</label>
                            </td>
                            <td>
                                <select id="select" name="type">
                                    <option>Select Type</option>
                                    <?php
                                    if ($pro['type'] == 0) {
                                    ?>
                                        <option selected value="0">Featured</option>
                                        <option value="1">Non-Featured</option>
                                    <?php
                                    } else {
                                    ?>
                                        <option value="0">Featured</option>
                                        <option selected value="1">Non-Featured</option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" value="Save" class="btn btn-primary" />
                            </td>
                        </tr>
                    </table>
                </form>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<!-- Load TinyMCE -->
<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
</script>
<!-- Load TinyMCE -->