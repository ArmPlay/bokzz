<?php
require_once 'profLine.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Guest Book with Database</title>
</head>
<body>
<style>
    .button3{
        padding-top: 5px;
        text-align: center;
    }
</style>
<div id="myCarousel" class="carousel slide mh-100" data-ride="carousel" style="margin-top: -190px;">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img class="first-slide" src="img/slide1.jpg" alt="First slide">
            <div class="container">
                <div class="carousel-caption d-none d-md-block text-left">
                    <h1>Добро пожаловать</h1>
                    <h5>Рад презентовать свой собственный книжный каталог!</h5>
                    <h3>Спасибо за проявленный интерес к моей работе!</h3>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="second-slide" src="img/slide2.jpg" alt="Second slide">
            <div class="container">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Интересуйтесь!</h1>
                    <h4>Просматривайте перечень книг и в один клик заказывайте!</h4>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="third-slide h-25" src="img/slide3.jpg" alt="Third slide">
            <div class="container">
                <div class="carousel-caption d-none d-md-block text-right">
                    <h1>Управляйте!</h1>
                    <h5>С помощью админ-панели управляйте виртуальной библиотекой очень легко и просто!</h5>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
