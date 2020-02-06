<?php
require_once 'profLine.php';
require_once 'funcs.php';
$arrGenres = get_all_row('genre', 'id', 'ASC');
$arrAuthors = get_all_row('author', 'surname', 'ASC', 'id', '>', 0);?>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <h1 style="margin-top: 50px;">Добавить книгу</h1>
            <form method="POST" action="booklist.php?order=1">
                <div class="form-group has-feedback">
                    <label for="validationCustom01">Название книги</label>
                    <input type="text" name="NameBook" class="form-control" id="validationCustom01" placeholder="К примеру: Гарри Поттер" required>
                </div>
                <div class="form-group has-feedback">
                    <label for="FormControlSelect1">Автор</label>
                    <select class="form-control" name="AuthorBook" id="FormControlSelect1" required>
                        <?php
                            foreach($arrAuthors as $author): ?>
                            <option value="<?=$author['id']?>"><?=$author['surname'];?></option>
                            <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group has-feedback">
                    <label for="FormControlSelect1">Жанр</label>
                    <select class="form-control" name="GenreBook" id="FormControlSelect1" required>
                        <option>1</option>
                    </select>
                </div>
                <div class="form-group has-feedback">
                    <label for="validationCustom02">Цена($)</label>
                    <input type="text" name="PriceBook" class="form-control" id="validationCustom02" required>
                </div>
                <div class="form-group">
                    <label for="FormControlTextarea1">Описание</label>
                    <textarea class="form-control" name="DescrBook" id="FormControlTextarea1" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="text-transform: uppercase;">Добавить</button>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
