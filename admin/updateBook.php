<?php
require_once 'profLine.php';
require_once 'db.php';
require_once 'funcs.php';
$arrGenres = get_all_row('genre', 'id', 'ASC');
$arrAuthors = get_all_row('author', 'surname', 'ASC', 'id', '>=', 1);
if(!empty($_SERVER['QUERY_STRING'])){
    parse_str($_SERVER['QUERY_STRING'], $parameters);
    if(count($parameters) == 1){
        if(isset($parameters['id'])){
            global $db;
            $id = $parameters['id'];
            $query = "SELECT * FROM `books` WHERE `id`=$id";
            $resQuery = mysqli_query($db, $query);
            $result = mysqli_fetch_assoc($resQuery);
        } 
    }
}?>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <h1 style="margin-top: 50px;">Изменение книги</h1>
            <form method="POST" action="booklist.php?editbook=<?=$parameters['id']?>">
                <div class="form-group has-feedback">
                    <label for="validationCustom01">Название книги</label>
                    <input type="text" name="TitleBook" class="form-control" id="validationCustom01" value="<?=$result['title']?>" placeholder="К примеру: Гарри Поттер" required>
                </div>
                <div class="form-group has-feedback">
                    <label for="FormControlSelect1">Автор</label>
                    <select class="form-control" name="AuthorBook" id="FormControlSelect1" required>
                        <?php foreach($arrAuthors as $author): 
                        if($result['id_author'] == $author['id']){ ?>
                            <option value="<?=$result['id_author']?>"><?=$author['surname'] . ' ' . $author['name'];?></option>
                        <?php } 
                        endforeach;
                        foreach($arrAuthors as $author): 
                        if($result['id_author'] == $author['id']){ continue; }?>
                        <option value="<?=$author['id']?>"><?=$author['surname'] . ' ' . $author['name'];?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group has-feedback">
                    <label for="FormControlSelect1">Жанр</label>
                    <select class="form-control" name="GenreBook" id="FormControlSelect1" required>
                        <?php foreach($arrGenres as $genre): 
                        if($result['id_genre'] == $genre['id']){ ?>
                            <option value="<?=$result['id_genre']?>"><?=$genre['title'];?></option>
                        <?php } 
                        endforeach;
                        foreach($arrGenres as $genre): 
                        if($result['id_genre'] == $genre['id']){ continue; }?>
                        <option value="<?=$genre['id']?>"><?=$genre['title'];?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group has-feedback">
                    <label for="validationCustom02">Цена($)</label>
                    <input type="text" name="PriceBook" class="form-control" value="<?=$result['price']?>" id="validationCustom02" required>
                </div>
                <div class="form-group has-feedback">
                    <label for="validationCustom02">Количество страниц</label>
                    <input type="text" name="CoustrBook" class="form-control" value="<?=$result['coustr']?>" id="validationCustom02" required>
                </div>
                <div class="form-group">
                    <label for="FormControlTextarea1">Описание</label>
                    <textarea class="form-control" name="DescrBook" id="FormControlTextarea1" rows="3" required><?=$result['descr']?></textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="text-transform: uppercase;">Внести изменения</button>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
