<?php

/*Возьми любое из прошлых заданий, которое работает с классами и объектами.
Добавь туда методы конструктора, деструктора и __toString. Продемонстрируй их работу.
Я не ограничиваю полет твоей фантазии, достаточно любой демонстрации, чтобы я увидел
работу всех трех магических методов */

class Animals
{
    protected $kind, $size, $habitat, $lifestyle, $movement;

    public function __construct($kind, $size, $habitat, $lifestyle, $movement)
    {
        echo 'конструктор сработал в момент создания объекта $animal# ' . "<br/>\n";

        $this->kind = $kind;
        $this->size = $size;
        $this->habitat = $habitat;
        $this->lifestyle = $lifestyle;
        $this->movement = $movement;
    }

    public function getKind () {
       return $this->kind;
    }

    public function getSize () {
       return $this->size;
    }

    public function getHabitat () {
        return $this->habitat;
    }

    public function getLifestyle () {
        return $this->lifestyle;
    }

    public function getMovement () {
        return$this->movement;
    }
}

$animal1 = new Animals("elephant", 'big', 'land', 'day', 'walk');
$animal2 = new Animals('dolphin', 'average', 'water', 'day', 'swim');
$animal3 = new Animals('kangaroo', 'average','land', 'day', 'jump');


echo '<pre>';
//var_dump($animal1, $animal2,$animal3);

$Animal = [$animal1,$animal2, $animal3];

foreach ($Animal as $v) {
     echo 'животное - ' . $v->getKind() . ', размер - ' . $v->getSize() . ', среда обитания - '
        . $v->getHabitat() . ', образ жизни - ' . $v->getLifestyle() . ', способ передвижения - '
        . $v->getMovement() . "\n";
}

