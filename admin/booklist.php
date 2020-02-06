<?php
require_once('funcs.php');
require_once 'profLine.php';
$arrBooks = showBooks();
$arrGenres = get_all_row('genre', 'id', 'ASC');
$arrAuthors = get_all_row('author', 'surname', 'ASC');
?>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Literata|Yanone+Kaffeesatz&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <button class="boxBookAdm__btn btn btn-success" style="width: 200px; height: 50px; text-transform: uppercase; font-weight: bold;">+ Добавить книгу</button>
        <h3>Список книг</h3>
        <?php
        if($arrBooks){
            foreach($arrBooks as $book):
                $bookItem = new Book($book['title'], $book['id_author'], $book['id_genre'], $book['descr'], $book['price'], $book['coust'], $book['img']);        
        ?>
        <div class="boxBookAdm">
            <div class="boxBookAdm__title"><?=$bookItem->getTitle();?></div>
            <div class="boxBookAdm__bottom">
                <button class="boxBookAdm__btn btn btn-success">EDIT</button>
                <button class="boxBookAdm__btn btn btn-danger">DELETE</button>
            </div>
        </div>
            <?php endforeach; 
            }?>
        </div>
    </div>
<script src="main.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>