<?php
class allproduct extends DController
{
    function __construct()
    {
        $data = array();
        parent::__construct();
    }
    public function index()
    {
        $this->danhmuc();
    }
    public function tatca()
    {
        $table_category = 'tbl_category';
        $table_product = 'tbl_product';
        $table_brand = 'tbl_brand';

        $productmodel = $this->load->model('productmodel');
        $data['product_all'] = $productmodel->product_all($table_product);


        $this->load->view('header');
        $this->load->view('all_product', $data);
        $this->load->view('footer');
    }

    public function brand($brand)
    {
        // allproduct/brand/dell


        $productmodel = $this->load->model('productmodel');

        $data['product_all'] = $productmodel->getProductByBrand($brand);

        $this->load->view('header');
        $this->load->view('all_product', $data);
        $this->load->view('footer');
    }
}
