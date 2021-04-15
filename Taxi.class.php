<?php

require_once __DIR__ . "/Car.class.php";

class Taxi extends Car
{
    private $passenger;

    public function pickUp($passenger)
    {
        $this->passenger += $passenger;
        return $passenger . "人乗車しました\n";
    
        // strval を使う場合は
        // return strval($passenger) . "人乗車しました\n";
        // と書くということですか？
    }
    public function lower($passenger)
    {
        if ($this->passenger >= $passenger) {
            $this->passenger -= $passenger;
            return $passenger . "人降車しました\n";
        } else {
            return $passenger . "人は降車できません\n";
        }
    }
    public function information()
    {
        return
            '車の車種:' . $this->name . "\n" .
            '車体番号:' . $this->number . "\n" .
            'カラー:' . $this->color . "\n" .
            '乗車人数:' . $this->passenger . "人\n";
    }
}


?>