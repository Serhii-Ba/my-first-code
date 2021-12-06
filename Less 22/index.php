<?php

/*Тебе необходимо создать соединение с базой в коде, и выполнить все те запросы,
которые ты делал в прошлом задании, но уже в коде. А именно:
- сделать вставку записи
- обновить данные у вставленной записи
- удалить какой-то элемент
- вывести список существующих данных
Решение желательно предоставить через GIT, но можно и архивом с картинками к задаче.*/

/* вариант 1 соединение с базой */

$dsn = 'mysql:host=localhost;port=3306;dbname=test_less 20';
$name = 'root';
$password = '123123';
$connection = new PDO ($dsn, $name, $password);

/* вариант 2 соединение с базой */

//$connection = new PDO ('mysql:host=localhost;port=3306;dbname=test_less 20','root','123123');

//вставка записи
$connection->exec("INSERT INTO user (name, surname, sex, age ) VALUES ('Anthony', 'Blair', 'male', 123)");

//обновление этой же записи
$connection->query("UPDATE user SET age = 55 WHERE surname = 'Blair'");

//удаление запси с id = 2
$connection->exec("DELETE FROM user WHERE id = 2");

//выборка для отражения
$sql1 = $connection->prepare("SELECT * FROM user");
$sql1->execute();
$list = $sql1->fetchAll(PDO::FETCH_OBJ);

//echo '<pre>';
//var_dump($list);

include 'table.html.php';


