<?php

include_once ROOT.'/models/Category.php';
include_once ROOT.'/models/Product.php';
class SiteController
{
    public function actionIndex ()
    {
        $categories = array();
        $categories = Category::getCategoriesList();
        $latestProduct = array();
        $latestProduct = Product::getLatestProducts(6);
        $sliderProducts = Product::getRecommendedProducts();
        require_once(ROOT . '/view/site/index.php');
        return true;
    }
}