<?php
include_once ROOT.'/models/Category.php';
include_once ROOT.'/models/Product.php';
include_once ROOT.'/components/Pagination.php';

class CatalogController

{
    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();
        $latestProduct = array();
        $latestProduct = Product::getLatestProducts(12);
        require_once(ROOT . '/view/catalog/index.php');
        return true;
    }


    public function actionCategory ($categoryId, $page=1)
    {
        echo 'Category: '. $categoryId;
        echo '<br>Page: '. $page;
        $categories = array();
        $categories = Category::getCategoriesList();
        $categoryProduct = array();
        $categoryProduct = Product::getProductListByCategory($categoryId, $page);
        // Создаем объект Pagination - постраничная навигация
        $total=Product::getTotalProductsInCategory($categoryId);
        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');
        require_once(ROOT . '/view/catalog/category.php');
        return true;
    }


}
