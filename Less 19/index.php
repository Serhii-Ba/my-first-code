<?php

/*Возьми за основу любой из твоих классов Пользователь (User), состоящего как минимум
из таких свойств как имя и возраст. Создай несколько юзеров, с разным именем и возрастом
(можешь к примеру использовать функцию rand(), для генерирования случайного возраста).
Все эти юзеры должны быть помещены в один массив.
На этом этапе у тебя должен быть массив пользователей с разным именем и возрастом.
Далее, реализуй новый класс, к примеру назови его Control (не наследованный от юзера,
это новый самодостаточный класс), задачей которого будет — фильтровать и/или сортировать
пользователей. Создай там (в классе Control) метод, который будет фильтровать пользователей,
и возвращать только тех, у которых возраст больше 18 лет. Метод может быть статическим
(на твое усмотрение, но я буду рад, если он будет именно статическим), назови его к примеру filter.
Его задача принимать массив пользователей, а возвращать массив пользователей, которым больше 18 лет.
Для фильтрации, внутри метода filter, тебе понадобится функция php — array_filter. Она может
использовать у себя замыкание. Поскольку, у тебя два разных класса, то следует сделать
их в разных файлах, и реализовать автозагрузку классов, для этого тебе
подойдет функция — spl_autoload_register.*/

include 'Less 19\Myclass\User.php';
include 'Less 19\Myclass\Control.php';


$User1 = new \Less19\Myclass\User('Serhii');
$User2 = new \Less19\Myclass\User('Petro');
$User3 = new \Less19\Myclass\User('Alex');
$User4 = new \Less19\Myclass\User('Olha');
$User5 = new \Less19\Myclass\User('Maria');

$Users = [$User1, $User2, $User3, $User4, $User5];

echo '<pre>';
var_dump($Users);

foreach ($Users as $v) {
    echo 'name: ' . $v->getName() . ', age: ' . $v ->getAge(). "\n";
}