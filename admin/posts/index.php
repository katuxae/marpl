<?php
require_once '/OSPanel/domains/marplct/app/database/session.php';
include '/OSPanel/domains/marplct/app/database/db.php';
include "../../path.php";

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marketplace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/09c228de17.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/assets/css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Montserrat+Alternates&display=swap" rel="stylesheet">
</head>

<body>

    <?php include '/OSPanel/domains/marplct/app/include/header-admin.php'; ?>

    <!--блок карусели старт-->

    <div class="container">
        <div class="row">
            <h2 class="slider-title">Маркетплейс цифровых товаров</h2>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/assets/img/1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption-hack d-none d-md-block">
                        <h5><a href="#">First slide label</a></h5>

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/assets/img/2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption-hack d-none d-md-block">
                        <h5><a href="#">First slide label</a></h5>

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/assets/img/2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption-hack d-none d-md-block">
                        <h5><a href="#">First slide label</a></h5>

                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!--блок карусели end-->
    <!--карточки товаров start-->

    <div class="main-content">
        <div class="card">
            <img src="/assets/img/2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                    the
                    card's
                    content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card">
            <img src="/assets/img/2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                    the
                    card's
                    content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card">
            <img src="/assets/img/1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                    the
                    card's
                    content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card">
            <img src="/assets/img/1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                    the
                    card's
                    content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-primary" type="button">Каталог</button>
    </div>
    <!--карточки товаров end-->
    <!--блок новостей start-->
    <div class="container">
        <div class="content row">
            <div class="news-content col-md-9">
                <h2>Новости компании</h2>
                <div class="post row">
                    <div class="img col-12 col-md-4">
                        <img src="/assets/img/1.jpg" alt="" class="img-thumbnail">
                    </div>
                    <div class="post_text col-12 col-md-8">
                        <h3>
                            <a href="#">1 новость</a>
                        </h3>
                        <i class="far fa-calendar"> Mar 21, 2024</i>
                        <p class="preview-text">knnkdfnvkfndfkn</p>
                    </div>
                </div>
                <div class="post row">
                    <div class="img col-12 col-md-4">
                        <img src="/assets/img/1.jpg" alt="" class="img-thumbnail">
                    </div>
                    <div class="post_text col-12 col-md-8">
                        <h3>
                            <a href="#">2 новость</a>
                        </h3>
                        <i class="far fa-calendar"> Mar 21, 2024</i>
                        <p class="preview-text">knnkdfnvkfndfkn</p>
                    </div>
                </div>
                <div class="post row">
                    <div class="img col-12 col-md-4">
                        <img src="/assets/img/1.jpg" alt="" class="img-thumbnail">
                    </div>
                    <div class="post_text col-12 col-md-8">
                        <h3>
                            <a href="#">3 новость</a>
                        </h3>
                        <i class="far fa-calendar"> Mar 21, 2024</i>
                        <p class="preview-text">knnkdfnvkfndfkn</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--блок новостей end-->
    <!--footer start-->

    <?php include("app/include/footer.php"); ?>

    <!--footer end-->
</body>

</html>