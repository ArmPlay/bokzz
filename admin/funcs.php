<?php
require_once 'db.php';
require_once '../classes/book.php';

function get_all_row($table, $by, $order, $where = false, $oper = false, $filter = false){
    global $db;
    if($filter){
        $query = "SELECT * FROM $table WHERE $where$oper$filter ORDER BY $by $order";
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

function showBooks(){
    if(!empty($_GET["author"]) || $_GET["author"] != 0){
        $authorBooks = get_all_row('books', 'id', 'DESC', 'id_author', $_GET["author"]);
        if(!empty($_GET["genre"]) || $_GET["genre"] != 0){
            foreach($authorBooks as $booksA){
                if($booksA['id_genre'] == $_GET["genre"]){
                    $arrBooks[] = $booksA;
                }
            }
            if(count($authorBooks) == 0){
                return false;
            }
            
        } else {
            $arrBooks = get_all_row('books', 'id', 'DESC', 'id_author', $_GET["author"]);
        }
    } else {
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

function addBook($title, $author, $genre, $price, $coustr, $descr){
    global $db;
    $query = "INSERT INTO `books` VALUES (0, $genre, $author, '$title', '$descr', '$price', '$coustr', 'no_image.jpg')";
    $res = mysqli_query($db, $query);
    return "Добавлена книга: ID " . mysqli_insert_id($db);
}
function updateBook($id, $title, $author, $genre, $price, $coustr, $descr){
    global $db;
    $query = "UPDATE `books` SET `id_genre`=$genre,`id_author`=$author,`title`='$title',`descr`='$descr',`price`='$price',`coustr`='$coustr' WHERE `id`='$id'";
    $res = mysqli_query($db, $query);
    return "Внесены изменения в книгу с ID " . $id;
}
function removeBook($id){
    global $db;
    $query = "DELETE FROM `books` WHERE `id`='$id'";
    $res = mysqli_query($db, $query);
    return "Книга с ID " . $id . " была удалена!";
}
function showOrder(){
    $fileContent = file_get_contents('orders.txt');
    $orderString = explode("|^", $fileContent);
    $orderList = [];
    foreach($orderString as $key => $val){
        $orderList[$key] = explode("|",$val);
    }
    return $orderList;
}
function debug($arr){
    echo '<pre>';
    echo htmlspecialchars(print_r($arr, true));
    echo '</pre>';
}

