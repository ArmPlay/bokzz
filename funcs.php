<?php
require_once 'db.php';
require_once 'classes/book.php';

function save_mess($str){
    $ordFile = fopen('orders.txt', 'a+');
    $writeFile = fwrite($ordFile, $str);
    if(!$writeFile){
        return false;
    }
    fclose($ordFile);
    return true;
}

function get_all_row($table, $by, $order, $where = false, $filter = false){
    global $db;
    if($filter){
        $query = "SELECT * FROM $table WHERE $where=$filter ORDER BY $by $order";
    }
    else {
        $query = "SELECT * FROM $table ORDER BY $by $order";
    }
    $res = mysqli_query($db, $query);
    if($res){
        $posts = mysqli_fetch_all($res,1);
        return $posts;
    } else {
        return false;
    }
}

function sendOrder($book, $fullName, $address, $countbook, $noteOrder = false){
    $str = "|^$book|$fullName|$address|$countbook|$noteOrder\n";
    save_mess($str);
}

function addParametr($params, $value){
    if(!empty($_SERVER['QUERY_STRING'])){
        parse_str($_SERVER['QUERY_STRING'], $parameters);
        if(count($parameters) >= 1){
            foreach($parameters as $gets => $val){
                if($params == $gets){
                    $parameters[$params] = $value;
                } else {
                    $parameters[$params] = $value; 
                }
            }
            return "?" . http_build_query($parameters);
        } 
        else {
            return "?$params=$value";
        }
    } else {
        return "?$params=$value";
    }
}

function showBooks(){
    if(!empty($_GET["author"]) || $_GET["author"] != 0){
        //здесь если есть автор
        $authorBooks = get_all_row('books', 'id', 'DESC', 'id_author', $_GET["author"]);
        if(!empty($_GET["genre"]) || $_GET["genre"] != 0){
            //здесь если выбран и жанр и автор
            foreach($authorBooks as $booksA){
                if($booksA['id_genre'] == $_GET["genre"]){
                    $arrBooks[] = $booksA;
                }
            }
            if(count($authorBooks) == 0){
                return false;
            }
            
        } else {
            //если выбран автор но не выбран жанр
            $arrBooks = get_all_row('books', 'id', 'DESC', 'id_author', $_GET["author"]);
        }
    } else {
        //если автор не указан или автор = 0
        if(!empty($_GET["genre"]) || $_GET["genre"] !== 0){
            $arrBooks = get_all_row('books', 'id', 'DESC', 'id_genre', $_GET["genre"]);
        } else {
            $arrBooks = get_all_row('books', 'id', 'DESC');
        }
    }
    return $arrBooks;
}

function showBookCard(){
    if(!empty($_SERVER['QUERY_STRING'])){
        parse_str($_SERVER['QUERY_STRING'], $parameters);
        if(count($parameters) == 1){
            if(isset($parameters['id'])){
                global $db;
                $id = $parameters['id'];
                $query = "SELECT * FROM `books` WHERE `id`=$id";
                $resQuery = mysqli_query($db, $query);
                $result = mysqli_fetch_assoc($resQuery);
                $book = new Book($result['title'], $result['id_author'], $result['id_genre'], $result['descr'], $result['price'], $result['coustr'], $result['img']);
                return $book;
            } else {
                return false;
            }
        }
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


function logout(){
    header('Location: index.php');
    session_destroy();
}

