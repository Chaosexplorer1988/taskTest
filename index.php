<?php

use UserRepo\Repositories\Developer;

require_once 'app/start.php';

try {
    //Пробуем создать разработчика
    $developer = new Developer('Василий', '28', '20000 р.', 'Евгений', 'Разработчики');
    //Присваеваем публичному свойству значение
    echo $developer->manager = 'Николай</br>';
    //Присваиваем не существующему свойству значение
    echo $developer->surname = 'Путилин</br>';
    //Пробуем присвоить значение свойству readonly
    $developer->salary = '30000';
    //Пробуем получить значение не существующего свойства(не сработает)
    $developer->bonus;
    //Ловим ошибку
} catch (Exception $e) {
    echo $e->getMessage();
}
