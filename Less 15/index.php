<?php

/*Сделайте класс User, в котором будут следующие protected поля - name (имя), age (возраст),
public методы setName, getName, setAge, getAge. Сделайте класс Worker, который наследует от класса User
и вносит дополнительное private поле salary (зарплата), а также методы public getSalary и setSalary.
Создайте объект этого класса 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса 'Вася',
возраст 26, зарплата 2000. Найдите сумму зарплата Ивана и Васи. Сделайте класс Student, который наследует
от класса User и вносит дополнительные private поля стипендия, курс, а также геттеры и сеттеры для них.
Сделайте класс Driver (Водитель), который будет наследоваться от класса Worker из предыдущей задачи.
 Этот метод должен вносить следующие private поля: водительский стаж, категория вождения (A, B, C).*/

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

class Worker extends User {

    private $salary;

    public function setSalary ($v) {
        $this->salary = $v;
    }

    public function getSalary () {
        return $this->salary;
    }
}

class Student extends User {

    private $salary1 , $course;

    public function setSalary1 ($v) {
        $this->salary1 = $v;
    }
    public function getSalary1 () {
        return $this->salary1;
    }
    public function setCourse ($v) {
        $this->course = $v;
    }
    public function getCourse () {
        return $this->course;
    }
}

class Driver extends Worker {

    private $exp;

    private $driving;

    public function setExp ($v) {
        $this->exp = $v;
    }
    public function getExp () {
        return $this->exp;
    }
    public function setDriving ($v) {
        $this->driving = $v;
    }
    public function getDriving () {
        return $this->driving;
    }
}


$user1 = new Worker();
$user1->setName('Иван');
$user1->setAge(25);
$user1->setSalary(1000);

$user2 = new Worker();
$user2->setName('Вася');
$user2->setAge(26);
$user2->setSalary(2000);

$sumSal = $user1->getSalary() + $user2->getSalary();
echo "<strong>сумма зарплат Ивана и Васи - $sumSal</strong>";

//echo '<pre>';
//var_dump($user1,$user2);

$user3 = new Driver();
$user3->setName('Коля');
$user3->setAge(40);
$user3->setSalary(1500);
$user3->setExp('5 years');
$user3->setDriving('A, B, C');

echo '<br/><br/>';

echo 'имя водителя - ' . $user3->getName() . "\n<br/>";
echo 'возраст - ' . $user3->getAge() . "\n<br/>";
echo 'зарплата - ' . $user3->getSalary() . "\n<br/>";
echo 'водительский стаж - ' . $user3->getExp() . "\n<br/>";
echo 'категория вождения - ' . $user3->getDriving() . "\n<br/>";

//echo '<pre>';
//var_dump($user3);
