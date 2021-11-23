<?php

/*В качестве практики, работы над static, напиши несколько классов.
Возьмем класс User, со свойствами имя и возраст. Напиши второй класс, назови его Builder (строитель).
Создай в нем метод, который будет принимать в качестве аргументов имя и возраст, будет создавать
нового пользователя, и возвращать его. Создай в своем "строителе" статическое свойство, которое
будет хранить количество созданных пользователей, и увеличивай каждый раз на единицу (привет инкремент!)
в методе, который будет создавать пользователя. В результате у тебя должно быть два класса — User & Builder.
В Builder у тебя будет метод, который создает пользователя, и увеличивает на +1 свое статическое свойство.
Выведи количество созданных пользователей, созданных через класс Builder*/

class User {

    protected $name , $age;

    public function setName ($v) {
         $this->name = $v;
    }

    public function getName () {
        return $this->name;
    }

    public function setAge ($v) {
        $this->age = $v;
    }

    public function getAge () {
        return $this->age;
    }
}

class Builder {

    protected static $data = [];

    public static function addNameAge ($z, $x) {
        $c = new User();
        $c->setName($z);
        $c->setAge($x);

        Builder::$data[] = $c;
        return $c;
    }

   public static function getData() {

       return Builder::$data;
    }
}

$builder1 = Builder::addNameAge('Иван', 25);
$builder2 = Builder::addNameAge('Вася', 26);
$builder3 = Builder::addNameAge('Коля', 35);
$builder4 = Builder::addNameAge('Толя', 27);

echo '<pre>';
var_dump($builder1, $builder2, $builder3, $builder4);
echo '<pre>';
echo 'количество созданных пользователей, созданных через класс Builder - ' . count(Builder::getData()) . "\n";


// для примера пользователи (объекты) от класса User

$user1 = new User();
$user1->setName('Иван');
$user1->setAge(25);

$user2 = new User();
$user2->setName('Вася');
$user2->setAge(26);

$user3 = new User();
$user3->setName('Коля');
$user3->setAge(35);

echo '<pre>';
var_dump($user1, $user2, $user3);

