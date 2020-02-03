<?php
$db = @mysqli_connect('localhost','root', '', 'bookzz')or die('Не удалось подключиться к БД');
mysqli_set_charset($db,'utf8');

?>