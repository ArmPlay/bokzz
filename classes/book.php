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

    protected function getAuthor(){
        global $db;
        $quote = "SELECT `surname`, `name` FROM `author` WHERE `id`=$this->author";
        $result = mysqli_query($db, $query);
        return $result;
    }

    protected function getGenre(){
        global $db;
        $quote = "SELECT `title` FROM `genre` WHERE `id`=$this->genre";
        $result = mysqli_query($db, $query);
        return $result;
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