<?php
require_once "models/Product.php";
//    Hàm xử lý từng chức năng
class ProductController{
    public function listProduct(){
        $product = new Product();
        $listProuct = $product->getAllProduct();
//            var_dump($listProuct);
//            die();
//        echo "day la trang danh sách";
        include "views/product/list.php";
    }
}
