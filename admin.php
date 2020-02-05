<?php
session_start();
if(!empty($_GET['username']) && !empty($_GET['note'])){
     header("Location: index.php");
    require_once 'db.php';
    require_once 'funcs.php';
    save_mess();
}

/*if(empty($_SESSION)) {
    header("Location: login.php?error=1");
}*/
require_once 'profLine.php';?>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <form action="" method="GET">
                <div class="form-group">
                    <label for="exampleInputEmail1">Введите имя пользователя</label>
                    <input type="text" name="username" class="form-control" placeholder="Введите имя">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Введите сообщение</label>
                    <textarea class="form-control" name="note" id="" cols="30" rows="10" placeholder="Введите текст"></textarea>
                </div>
                <button class="btn btn-success">Отправить форму</button><br>
            </form>
            <a href=".."><button class="btn btn-light border border-dark">&lt; Назад</button></a>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
