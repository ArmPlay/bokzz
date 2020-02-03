<?php
require_once 'funcs.php';
if(!empty($_POST['submit'])){
    autorization($_POST['login'],$_POST['password']);
}
require_once 'profLine.php';
?>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login Form</title>
</head>
<body>

<div class="container">
    <form action="?auth" class="form-signin" method="POST">
        <h2 class="form-signin-heading">Авторизация</h2>
        <?php if($_GET['error'] == 1): ?>
            <div class="alert alert-danger" role="alert">
                Ошибка! Для продолжения - авторизуйтесь!<br>Не имеете аккаунта? <a href="register.php" class="alert-link">Зарегистрируйтесь!</a>.
            </div>
        <?php endif; ?>
        <input type="text" id="inputEmail" class="form-control" name="login" placeholder="Введите логин" required autofocus>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Введите пароль" required>
        <input type="submit" class="btn btn-lg btn-block btn-primary " value="Авторизация" name="submit">
    </form>
</div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
