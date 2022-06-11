<?php

class CartController
{
    public function actionAdd($id)
    {
        // Добавляем товар в корзину
        Cart::addProduct($id);

        // Возвращаем пользователя на страницу
        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");
    }
    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $productsInCart = false;

        // Получим данные из корзины
        $productsInCart = Cart::getProducts();

        if ($productsInCart) {
            // Получаем полную информацию о товарах для списка
            $productsIds = array_keys($productsInCart);
            $products = Product::getProdustsByIds($productsIds);

            // Получаем общую стоимость товаров
            $totalPrice = Cart::getTotalPrice($products);
        }

        require_once(ROOT . '/view/cart/index.php');

        return true;
    }
    public function actionDelete($id)
    {
        // Удалить товар из корзины
        /**
         * Action для добавления товара в корзину синхронным запросом
         * @param integer $id <p>id товара</p>
         */
    // Удаляем заданный товар из корзины
        Cart::deleteProduct($id);

            // Возвращаем пользователя на страницу
        header("Location: /test3/cart/");
    }
    public function actionCheckout()
    {

        // Список категорий для левого меню
        $categories = array();
        $categories = Category::getCategoriesList();


        // Статус успешного оформления заказа
        $result = false;


        // Форма отправлена?
        if (isset($_POST['submit'])) {
            // Форма отправлена? - Да
            // Считываем данные формы
            $userName = $_POST['userName'];
            $userPhone = $_POST['userPhone'];
            $userComment = $_POST['userComment'];

            // Валидация полей
            $errors = false;
            if (!User::checkName($userName))
                $errors[] = 'Неправильное имя';
            if (!User::checkPhone($userPhone))
                $errors[] = 'Неправильный телефон';
print_r($errors);
            // Форма заполнена корректно?
            if ($errors == false) {
                // Форма заполнена корректно? - Да
                // Сохраняем заказ в базе данных
                // Собираем информацию о заказе
                $productsInCart = Cart::getProducts();
                print_r($productsInCart);
                if (User::isGuest()) {
                    $userId = 100;
                    echo 'yes';

                } else {
                    $userId = User::checkLogged();
                }

                // Сохраняем заказ в БД
                $result = Order::save($userName, $userPhone, $userComment, $userId, $productsInCart);
                var_dump($result);

                if ($result) {
                    // Оповещаем администратора о новом заказе
                    $adminEmail = 'fothetundra@gmail.com';
                    $message = 'http://digital-mafia.net/admin/orders';
                    $subject = 'Новый заказ!';
                    mail($adminEmail, $subject, $message);

                    // Очищаем корзину
                    Cart::clear();
                }
            } else {
                // Форма заполнена корректно? - Нет
                // Итоги: общая стоимость, количество товаров
                $productsInCart = Cart::getProducts();
                $productsIds = array_keys($productsInCart);
                $products = Product::getProdustsByIds($productsIds);
                $totalPrice = Cart::getTotalPrice($products);
                $totalQuantity = Cart::countItems();
            }
        } else {
            // Форма отправлена? - Нет
            // Получием данные из корзины
            $productsInCart = Cart::getProducts();

            // В корзине есть товары?
            if ($productsInCart == false) {
                // В корзине есть товары? - Нет
                // Отправляем пользователя на главную искать товары
                header("Location: /test3/");
            } else {
                // В корзине есть товары? - Да
                // Итоги: общая стоимость, количество товаров
                $productsIds = array_keys($productsInCart);
                $products = Product::getProdustsByIds($productsIds);
                $totalPrice = Cart::getTotalPrice($products);
                $totalQuantity = Cart::countItems();


                $userName = false;
                $userPhone = false;
                $userComment = false;

                // Пользователь авторизирован?
                if (User::isGuest()) {
                    // Нет
                    $userId=false;
                    // Значения для формы пустые
                } else {
                    // Да, авторизирован
                    // Получаем информацию о пользователе из БД по id
                    $userId = User::checkLogged();
                    $user = User::getUserById($userId);
                    // Подставляем в форму
                    $userName = $user['name'];
                }
            }
        }

        require_once(ROOT . '/view/cart/checkout.php');

        return true;
    }

}