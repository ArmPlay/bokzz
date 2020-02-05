<?php
session_start();
require_once 'profLine.php';
require_once 'funcs.php';
$book = showBookCard();
?>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
<div class="container">
    <div class="book">
        <div class="row">
            <div class="col-lg-3">
                <img src="img/booksTitle/<?=$book->getImg();?>" alt="<?=$book->getTitle();?>" class="book__img">
            </div>
            <div class="col-lg-9">
                <div class="book__info">
                    <div class="book__info-header"><?=$book->getTitle();?></div>
                    <div class="book__info-author"><span>Автор: </span><?=$book->getAuthor();?></div>
                    <div class="book__info-genre"><span>Жанр: </span><?=$book->getGenre();?></div>
                    <div class="book__info-price"><span>Цена: </span>$<?=$book->getPrice();?></div>
                    <div class="book__info-coustr"><span>Количество страниц: </span><?=$book->getCoustr();?></div>
                    <button class="book__info-btn btn btn-primary" tyoe="button" data-toggle="modal" data-target=".bd-example-modal-lg">Купить</button>
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content book__modal">
                                <form method="POST" action="booklist.php?order=1">
                                    <input name="book" type="hidden" value="<?=$book->getTitle();?>">
                                    <div class="form-group has-feedback">
                                        <label for="validationCustom01">ФИО</label>
                                        <input type="text" name="NameUser" class="form-control" id="validationCustom01" placeholder="Максов Хостинг Максович" required>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="validationCustom02">Адрес</label>
                                        <input type="text" name="AddressUser" class="form-control" id="validationCustom02" placeholder="ул. Гагарина, д. 5" required>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="FormControlSelect1">Количество экземпляров</label>
                                        <select class="form-control" name="CountBook" id="FormControlSelect1" required>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="FormControlTextarea1">Примечание к заказу(по желанию)</label>
                                        <textarea class="form-control" name="NoteOrder" id="FormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary" style="text-transform: uppercase;">Заказать</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="book__info-descr"><?=$book->getDescr();?></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
