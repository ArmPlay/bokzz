<?php
session_start();
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
<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <div class="col-lg-6">-->
<!--            <div class="button1 center-top">-->
<!--                <a href="addnote.php"><button type="button" class="btn btn-success btn-block">Add note</button></a>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-lg-6">-->
<!--            <div class="button2">-->
<!--                <a href="notelist.php"><button type="button" class="btn btn-secondary btn-block">View note</button></a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="row">-->
<!--        <div class="col-lg-12">-->
<!--            <div class="button3">-->
<!--                <a href="login.php"><button type="button" class="btn btn-success btn-lg">Login</button></a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
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
                    <?php if(empty($_SESSION)): ?>
                    <h5>Рад презентовать свою собственную гостевую книгу! Для полноценного использования необходимо зарегистрироваться.</h5>
                        
                        <button type="button" class="btn btn-lg btn-primary button-reg" data-toggle="modal" data-target=".bd-example-modal-lg">Регистрация</button>
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                ...
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                    <h3>Спасибо за проявленный интерес к моей работе!</h3>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="second-slide" src="img/slide2.jpg" alt="Second slide">
            <div class="container">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Интересуйтесь!</h1>
                    <h4>Просматривайте публикации пользователей. Отмечайте понравившиеся публикации, а затем в личном кабинете просматривайте их.</h4>
                    <p><a class="btn btn-lg btn-primary" href="notelist.php" role="button">Смотреть публикации</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="third-slide h-25" src="img/slide3.jpg" alt="Third slide">
            <div class="container">
                <div class="carousel-caption d-none d-md-block text-right">
                    <h1>Делитесь!</h1>
                    <h4>Начните делиться своими публикациями с другими пользователями! Просматривайте свои публикации в личном кабинете.</h4>
                    <p><a class="btn btn-lg btn-primary" href="addnote.php" role="button">Создать публикацию</a></p>
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

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
    </div>

    <hr>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
