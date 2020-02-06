<?php
require_once 'profLine.php';
require_once 'funcs.php';
$arrOrders = array_reverse(showOrder(), true);
?>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <h1 style="margin-top: 50px;">Панель заказов</h1>
            <?php 
            $i = 1;
            foreach($arrOrders as $key => $order):
                if($key === 0){ continue; }
            ?>
            <div class="boxNote">
                <hr>
                <h5 style="font-family: 'Yanone Kaffeesatz', sans-serif;">Заказ №: <?=$key?></h5>
                <p><b>Книга: </b><?php echo $order[0]; ?></p>
                <p><b>ФИО: </b><?php echo $order[1]; ?></p>
                <p><b>Адрес: </b><?php echo $order[2]; ?></p>
                <p><b>Кол-во экземпляров: </b><?php echo $order[3]; ?></p>
                <p style="font-family: 'Literata', serif;"><b>Примечание: </b><?php echo $order[4]; ?></p>
            </div>
            <?php 
            endforeach; ?>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
