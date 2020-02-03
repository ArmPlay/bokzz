<?php
require_once('db.php');
require_once('funcs.php');
require_once('classes/book.php');
$arrBooks = get_all_books();
foreach($arrBooks as $book):
    endforeach;
require_once 'profLine.php';
?>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Literata|Yanone+Kaffeesatz&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <?php foreach($arrBooks as $book):
            $bookItem = new Book($book['title'], $book['id_author'], $book['$id_genre'], $book['descr'], $book['price'], $book['coust'], $book['img']);
            ?>
            <div class="col-2">
                <a href="" class="book__link">
                    <div class="boxBook">
                        <img src="img/booksTitle/<?=$bookItem->getImg();?>" alt="<?=$bookItem->getTitle();?>" class="boxBook__img">
                        <div class="boxBook__title"><?=$bookItem->getTitle();?></div>
                        <div class="boxBook__bottom">
                            <div class="boxBook__price"><?=$bookItem->getPrice();?>$</div>
                            <button class="boxBook__btn btn btn-primary">Купить</button>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
<script src="main.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>