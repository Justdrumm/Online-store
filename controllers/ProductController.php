<?php
include_once ROOT.'/models/Category.php';
include_once ROOT.'/models/Product.php';

class ProductController
{
    public function actionView ($productid)
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $product = Product::getProductById($productid);
print_r($product);
        require_once(ROOT . '/view/product/view.php');

        return true;
    }

    }

