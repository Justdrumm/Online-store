<?php include ROOT . '/view/layouts/header_admin.php'; ?>

    <section>
        <div class="container">
            <div class="row">

                <br/>

                <div class="breadcrumbs">
                    <ol class="breadcrumb">
                        <li><a href="/test3/admin">Админпанель</a></li>
                        <li><a href="/test3/admin/product">Управление товарами</a></li>
                        <li class="active">Удалить товар</li>
                    </ol>
                </div>


                <h4>Удалить товар #<?php echo $id; ?></h4>


                <p>Вы действительно хотите удалить этот товар?</p>

                <form method="post">
                    <input type="submit" name="submit" value="Удалить" />
                </form>

            </div>
        </div>
    </section>

<?php include ROOT . '/view/layouts/footer_admin.php'; ?>