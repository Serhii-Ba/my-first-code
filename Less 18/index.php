<?php

/*Тебе необходимо работать с геометрическими фигурами, например, с квадратами, прямоугольниками,
треугольниками и так далее. Пусть каждая фигура будет описываться своим классом, при этом ты хочешь
сделать так, чтобы каждый класс имел метод для вычисления площади и метод для вычисления периметра фигуры.
Сделаем для этого абстрактный класс Figure с двумя абстрактными методами getSquare и getPerimeter.
Также реализуй такие классы как Rectangle (прямоугольник), Quadrate (квадрат), и любой другой на свое усмотрение.
В абстрактном классе Figure, реализуй общий метод для вычисления отношения площади к периметру.

Дополнение!
Создай интерфейс, который будет требовать реализацию магического метода __toString, и используй этот
интерфейс в абстрактном классе. Это заставит твоих родительские классы реализовать этот метод.
Пускай каждый класс (квадрат, прямоугольник, и т.д.), реализуют этот магический метод, и выводят строку,
в которой указаны параметры фигуры (периметр, площадь и отношение).*/


interface FigureInt {

    public function getSquare ();

    public function getPerimeter();

    public function __toString ();
}
abstract class Figure {

    public $length; //длина
    public $width; //ширина
    protected $height; //высота

    public function __construct($length, $width, $height=null) {

        $this->length = $length;
        $this->width = $width;
        $this->height= $height;
    }

    public function getCorrelation () {

        return $this->getSquare()/$this->getPerimeter();
    }

    abstract public function getSquare ();

    abstract public function getPerimeter();

    abstract public function __toString();

}

class Quadrate extends Figure {

    public function getSquare () {

        return $this->length*$this->width;

    }
    public function getPerimeter () {

        return $this->length*4;
    }

    public function __toString() {

       return 'периметр - ' . $this->getSquare() . ', площадь - ' . $this->getPerimeter() . ', отношение - ' . $this->getCorrelation();
    }
}

class Rectangle extends Figure {

    public function getSquare () {

        return $this->length*$this->width;
    }
    public function getPerimeter () {

        return ($this->length+$this->width)*2;
    }
    public function __toString() {

        return 'периметр - ' . $this->getSquare() . ', площадь - ' . $this->getPerimeter() . ', отношение - ' . $this->getCorrelation();
    }
}

class Triangle extends Figure {

    public function getSquare () {

        return ($this->length*$this->height)*0.5;
    }
    public function getPerimeter () {

        return $this->length+$this->width+$this->height;
    }
    public function __toString() {

        return 'периметр - ' . $this->getSquare() . ', площадь - ' . $this->getPerimeter() . ', отношение - ' . $this->getCorrelation();
    }
}

$figure1 = new Quadrate(5, 6);
$figure2 = new Rectangle(5, 6);
$figure3 = new Triangle(70, 30, 14);

echo '<pre>';

var_dump($figure1, $figure2, $figure3);

echo $figure1 . "\n";

echo 'площадь квадрата - ' . $figure1->getSquare() . ' , периметр квадрата - ' . $figure1->getPerimeter() .
    ' , соотношение площади к периметру - ' . $figure1->getCorrelation() . "\n";

echo $figure2 . "\n";

echo 'площадь прямоугольника - ' . $figure2->getSquare() . ' , периметр прямоугольника - ' . $figure2->getPerimeter() .
    ' , соотношение площади к периметру - ' . $figure2->getCorrelation() . "\n";

echo $figure3 . "\n";

echo 'площадь треугольника - ' . $figure3->getSquare() . ' , периметр треугольника - ' . $figure3->getPerimeter() .
    ' , соотношение площади к периметру - ' . $figure3->getCorrelation() . "\n";



