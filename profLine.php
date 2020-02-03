<?php //if(isset($_SESSION))? echo '' : echo 'disabled';
require_once "funcs.php";
session_start();



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top shadow-lg" style="border-bottom: 1px solid #47c5ff;">
        <a class="navbar-brand" href="..">AlexBook</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href=".."><b>Главная</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="notelist.php"><b>Книги</b></a>
                </li>
                <li class="nav-item" <?php if(empty($_SESSION)):  echo 'style="display: none"'; endif;?>>
                    <a class="nav-link " href="addnote.php"><b>Добавить книгу</b></a>
                </li>
                <li class="nav-item" <?php if(empty($_SESSION)):  echo 'style="display: none"'; endif;?>>
                    <a class="nav-link" href="#"><b>Админ панель</b></a>
                </li>
                <!--<li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                -->
            </ul>
            <?php
            if(!empty($_SESSION)): ?>
                <div class="btn-group">
                    <a class="btn btn-outline-light my-2 my-sm-0 dropdown-toggle dropdown-toggle-split" href="" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['login']; ?> </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Профиль</a>
                        <a class="dropdown-item" href="#">Мои записи</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Админ-панель</a>
                    </div>
                </div>
            <?php else:?>
                <a href="login.php"><button class="btn btn-outline-light my-2 my-sm-0">Login</button></a>
            <?php endif; ?>
        </div>
    </nav>
    <p style="margin-bottom:55px;"></p>
</header>
