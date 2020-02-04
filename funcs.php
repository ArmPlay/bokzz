<?php
require_once 'db.php';

function save_mess(){
    global $db;
    $username = mysqli_real_escape_string($db,$_GET['username']);
    $note = mysqli_real_escape_string($db,$_GET['note']);
    $query = "INSERT INTO notes (name, text) VALUES ('$username','$note')";
    mysqli_query($db,$query);
}

function get_all_row($table, $by, $order, $filter = false){
    global $db;
    if($filter){
        $query = "SELECT * FROM $table WHERE id_genre=$filter ORDER BY $by $order";
    } else {
        $query = "SELECT * FROM $table ORDER BY $by $order";
    }
    $res = mysqli_query($db, $query);
    $posts = mysqli_fetch_all($res,1);
    return $posts;
}

function addParametr($params, $value){
    if(!empty($_SERVER['QUERY_STRING'])){
        parse_str($_SERVER['QUERY_STRING'], $parameters);
        if(count($parameters) > 0){
            foreach($parameters as $gets => $val){
                if($params == $gets){
                    $val = $value;
                } else {
                    $parameters[$params] = $value; 
                }
            }
            return "?" . http_build_query($parameters);
        } else {
            return "?$params=$value";
        }
    } else {
        return "?$params=$value";
    }
}

function autorization($login, $pass){
    global $db;
    $login = strtolower($login);
    $query = "SELECT `login`, `password`, `email`, `name`, `datereg` FROM users";
    $res = mysqli_query($db,$query);
    $posts = mysqli_fetch_all($res,MYSQLI_ASSOC);
    foreach($posts as $key => $elem) {
        if ($login === $elem['login'] && $pass === $elem['password']) {
            header('Location: index.php?auth=1');
            session_start();
            $_SESSION = $elem;
//            $_SESSION['login'] = $elem['login'];
//            $_SESSION['email'] = $elem['email'];
//            $_SESSION['name'] = $elem['name'];
//            $_SESSION['datareg'] = date('d.m.Y H:i', $elem['datareg']);
            echo "Вы вошли как $login";
            return true;
        }
    }
    header("Location: login.php");
    echo 'Неправильный логин или пароль!';
    return false;
}

function registration($login, $pass, $name, $email, $sex){
    global $db;
    $login = strtolower($login);
    $query = "INSERT INTO users (`login`, `password`, `email`, `name`, `sex`) VALUES ('$login', '$pass', '$email', '$name', '$sex')";
    $findLogin = "SELECT `login` FROM users WHERE `login` LIKE '$login'";
    $qFingLogin = mysqli_query($db, $findLogin);
    $resFindLogin = mysqli_fetch_all($qFingLogin,MYSQLI_ASSOC);
    if(!empty($resFindLogin)){ ?>
        <div class="alert alert-danger" role="alert" style="margin-top: 50px;">
            Ошибка! Пользователь с таким логином существует!
        </div>
    <?php
    }else{
        $res = mysqli_query($db,$query);
        if($res){
            autorization($login,$pass);
        }
    }

}

function logout(){
    header('Location: index.php');
    session_destroy();
}

