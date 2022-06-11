<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Главная</title>
    <link href="/test3/template-html/css/bootstrap.min.css" rel="stylesheet">
    <link href="/test3/template-html/css/font-awesome.min.css" rel="stylesheet">
    <link href="/test3/template-html/css/prettyPhoto.css" rel="stylesheet">
    <link href="/test3/template-html/css/price-range.css" rel="stylesheet">
    <link href="/test3/template-html/css/animate.css" rel="stylesheet">
    <link href="/test3/template-html/css/main.css" rel="stylesheet">
    <link href="/test3/template-html/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="/test3/template-html/js/html5shiv.js"></script>
    <script src="/test3/template-html/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="/test3/template-html/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/test3/template-html/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/test3/template-html/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/test3/template-html/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/test3/template-html/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +000000 </a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="index.html"><img src="/test3/template-html/images/home/logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="/test3/cart">
                                    <i class="fa fa-shopping-cart"></i> Корзина
                                <span id="cart-count"> <?php echo Cart::countItems();?>
                                </span>
                                </a></li>

                            <?php if (User::isGuest()): ?>
                            <li><a href="/test3/user/login"><i class="fa fa-lock"></i> Вход</a></li>
                            <?php else: ?>
                            <li><a href="/test3/cabinet"><i class="fa fa-user"></i> Аккаунт</a></li>
                            <li><a href="/test3/user/logout"><i class="fa fa-unlock"></i> Выход</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="/test3">Главная</a></li>
                            <li class="dropdown"><a href="#">Магазин<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="/test3/catalog/">Каталог товаров</a></li>
                                    <li><a href="/test3/cart/">Корзина</a></li>
                                </ul>
                            </li>
                            <li><a href="/test3/blog/">Блог</a></li>
                            <li><a href="/test3/about/">О магазине</a></li>
                            <li><a href="/test3/contacts/">Контакты</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->

</header><!--/header-->
