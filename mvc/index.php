<?php
require_once "controllers/ProductController.php";
$url = isset($_GET['url']) ? $_GET['url']: "/";
switch ($url){
    case "/":
        $products = new ProductController();
        $products->listProduct();
//        echo "Day là trang chu";
        break;
    case "add-product":
        echo "Day la trang them";
        break;
    default:
        echo "404";
        break;
}
