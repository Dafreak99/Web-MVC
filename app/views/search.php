<div class="main">
    <div class="content">
        <div class="content_top">
            <h3>Tìm kiếm sản phẩm</h3>

        </div>
        <div class="container">

            <div class="section group row">
                <?php


                foreach ($check_search as $key => $each) {
                ?>



                    <div class="col-6 col-md-6 col-xl-3 product product">
                        <a href="<?php echo BASE_URL ?>/product/productdetails/<?php echo $each['productId'] ?>">
                            <div class="card">
                                <img class="card-img-top" src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $each['image'] ?>" alt="" />
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $each['productName'] ?></h5>
                                    <p><span class="price"><?php echo "$" . $each['price'] ?></span></p>
                                </div>
                            </div>
                        </a>

                    </div>

                <?php
                    // }
                }
                // }
                ?>
            </div>
        </div>

        <div class="content_bottom">

        </div>
    </div>
    <?php
