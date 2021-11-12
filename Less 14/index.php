<?php
/*Тебе необходимо написать свой первый класс, который будет описывать структуру <животное>,
у которого будет набор свойств. Создай как минимум два объекта от этого класса с разными значениями, и выведи на экран
(можно через var_dump, можно через echo отдельные поля). Результат задания можешь приложить файлом,
или ссылку на репозиторий с данными заданием.*/

class Animals {

    public $kind;

    public $size;

    public $habitat;

    public $lifestyle;

    public $movement;

}

    $animal1 = new Animals();
    $animal1->kind = 'elephant';
    $animal1->size = 'big';
    $animal1->habitat = 'land';
    $animal1->lifestyle = 'day';
    $animal1->movement = 'walk';

    $animal2 = new Animals();
    $animal2->kind = 'dolphin';
    $animal2->size = 'average';
    $animal2->habitat = 'water';
    $animal2->lifestyle = 'day';
    $animal2->movement = 'swim';

    $animal3 = new Animals();
    $animal3->kind = 'kangaroo';
    $animal3->size = 'average';
    $animal3->habitat = 'land';
    $animal3->lifestyle = 'day';
    $animal3->movement = 'jump';

    $animal4 = new Animals();
    $animal4->kind = 'bat';
    $animal4->size = 'small';
    $animal4->habitat = 'land';
    $animal4->lifestyle = 'night';
    $animal4->movement = 'fly';

 $Animal = [$animal1,$animal2,$animal3,$animal4];

   foreach ($Animal as $item) {
       echo "<br />" . 'животное - ' . $item->kind . ', размер - ' . $item->size . ', среда обитания - '
           . $item->habitat . ', образ жизни - ' . $item->lifestyle . ', способ передвижения - '
           . $item ->movement . "<br/><br/>\n";
   }