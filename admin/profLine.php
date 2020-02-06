<?php //if(isset($_SESSION))? echo '' : echo 'disabled';
//require_once "funcs.php";
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
        <a class="navbar-brand" href="..">AlexBookAdmin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href=".." style="color: white;"><b>Главная</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="booklist.php" style="color: white;"><b>Книги</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="orderlist.php" style="color: white;"><b>Заказы</b></a>
                </li>
            </ul>
        </div>
    </nav>
    <p style="margin-bottom:55px;"></p>
</header>
