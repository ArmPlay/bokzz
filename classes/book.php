<?php

require_once 'db.php';

class Book {
    private $title;
    private $author;
    private $genre;
    private $descr;
    private $price;
    private $coustr;
    private $img;

    public function __construct($title, $id_author, $id_genre, $descr, $price, $coustr, $img){
        $this->title = $title;
        $this->author = $id_author;
        $this->genre = $id_genre;
        $this->descr = $descr;
        $this->price = $price;
        $this->coustr = $coustr;
        $this->img = $img;
    }

    public function getAuthor(){
        global $db;
        $query = "SELECT `surname`, `name` FROM `author` WHERE `id`=$this->author";
        $resultQuery = mysqli_query($db, $query);
        $result = mysqli_fetch_assoc($resultQuery);
        return $result['name'] . ' ' . $result['surname'];
    }

    public function getGenre(){
        global $db;
        $query = "SELECT `title` FROM `genre` WHERE `id`=$this->genre";
        $resultQuery = mysqli_query($db, $query);
        $result = mysqli_fetch_assoc($resultQuery);
        return $result['title'];
    }

    public function getTitle(){
        return $this->title;
    }
    public function getDescr(){
        return $this->descr;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getCoustr(){
        return $this->coustr;
    }
    public function getImg(){
        return $this->img;
    }
}