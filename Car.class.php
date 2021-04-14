<?php
require_once __DIR__ . '/main.php';

class Car {
    public $name;
    public $number;
    public $color;

    public function __construct($name, $number, $color)
    {
        $this->name = $name;
        $this->number = $number;
        $this->color = $color;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setNumber($number)
    {
        $this->number = $number;
    }
    public function getNumber()
    {
        return $this->number;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function getColor()
    {
        return $this->color;
    }

    public function information()
    {
        return
            '車の車種:' . $this->name . "\n" .
            '車体番号:' . $this->number . "\n" .
            'カラー:' . $this->color . "\n";
    }
}

?>