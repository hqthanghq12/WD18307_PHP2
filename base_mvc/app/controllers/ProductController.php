<?php
namespace App\Controllers;
class ProductController extends BaseController {
//    public function __construct()
//    {
//        echo "Đây là Product Controller";
//    }
    public function index(){
        return $this->render('product.list');
//        echo "hihi";
    }
}