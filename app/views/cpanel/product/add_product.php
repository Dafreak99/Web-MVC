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
        <h3>Add product</h3>
        <div class="block">
            <?php

            ?>
            <form action="<?php echo BASE_URL ?>/product/insert_product" method="POST" enctype="multipart/form-data">
                <table class="form">

                    <tr>
                        <td>
                            <label>Name</label>
                        </td>
                        <td>
                            <input type="text" name="productName" placeholder="Enter Product Name..." class="medium" />
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
                                // $cat = new category();
                                // $catlist = $cat->show_category();
                                // if($catlist){
                                //     while($result = $catlist->fetch_assoc()){ 
                                foreach ($category as $key => $cate) {
                                ?>
                                    <option value="<?php
                                                    echo $cate['catId']
                                                    ?>"><?php
                                    echo $cate['catName']
                                ?></option>
                                <?php
                                }
                                // }
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
                                // $brand = new brand();
                                // $brandlist = $brand->show_brand();

                                // if($brandlist)
                                // {
                                //     while($result = $brandlist->fetch_assoc())
                                //     {
                                foreach ($brand as $key => $bra) {

                                ?>
                                    <option value="<?php
                                                    echo $bra['brandId']
                                                    ?>"><?php
                                    echo $bra['brandName']
                                ?></option>
                                <?php
                                }
                                // }
                                ?>
                            </select>

                        </td>
                    </tr>

                    <tr>
                        <td style="vertical-align: top; padding-top: 9px;">
                            <label>Description</label>
                        </td>
                        <td>
                            <textarea style="height:120px;" name="product_desc" class="tinymce"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Price</label>
                        </td>
                        <td>
                            <input type="text" name="price" placeholder="Enter Price..." class="medium" />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Upload Image</label>
                        </td>
                        <td>
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
                                <option value="0">Featured</option>
                                <option value="1">Non-Featured</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" Value="Save" class="btn btn-primary" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
<!-- Load TinyMCE -->
<!-- <script src="<?php
                    // echo BASE_URL 
                    ?>/public/template/js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script> -->
<script type="text/javascript">
    $(document).ready(function() {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
</script>