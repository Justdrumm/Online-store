<?php include ROOT . '/view/layouts/header.php';?>
<section>
    <div class="container">
        <h1>Кабинет пользователя</h1>
        <h3>
            Привет, <?php echo $user['name']; ?>!</h3>
        </h3>
        <ul>
            <li><a href="/test3/cabinet/edit">Редактирование данных</a></li>
            <li><a href="/test3/user/history">Список покупок</a></li>
        </ul>

    </div>
</section>
<?php include ROOT . '/view/layouts/footer.php';?>