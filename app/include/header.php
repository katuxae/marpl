<?php
require_once 'app/database/session.php';
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marketplace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/09c228de17.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Montserrat+Alternates&display=swap" rel="stylesheet">
</head>

<body>
    <header class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h1><a href="<?php echo BASE_URL ?>">Marplct</a></h1>
                </div>
                <nav class="col-8">
                    <ul>
                        <li><a href="<?php echo BASE_URL ?>">Главная</a></li>
                        <li><a href="#">Каталог</a></li>
                        <li><a href="#">Новости</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#"><i class="fa-solid fa-cart-shopping" style="color: #e50ba0;"></i></i> Корзина</a></li>
                        <li><a href="#"><i class="fa-solid fa-heart fa-bounce" style="color: #e50ba0;"></i></i> Избранное</a></li>
                        <li>
                            <?php if (isset($_SESSION['id'])) : ?>
                                <a href="#">
                                    <i class="fa fa-user"></i>
                                    <?php echo $_SESSION['login']; ?>
                                </a>
                                <ul>
                                    <?php if ($_SESSION['is_moder']) : ?>
                                        <li><a href="#">Админ панель</a> </li>
                                    <?php endif; ?>
                                    <li><a href="<?php echo BASE_URL . "logout.php"; ?>">Выход</a> </li>
                                </ul>
                            <?php else : ?>
                                <a href="<?php echo BASE_URL . "log.php"; ?>">
                                    <i class="fa fa-user"></i>
                                    Войти
                                </a>
                                <ul>
                                    <li><a href="<?php echo BASE_URL . "reg.php"; ?>">Регистрация</a> </li>
                                </ul>
                            <?php endif; ?>

                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</body>

</html>