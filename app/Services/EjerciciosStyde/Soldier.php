<?php

namespace App\Services;

class Soldier extends Unit {
    protected $damage = 40;
    

    public function attack(Unit $opponent)
    {
        show(
            "{$this->name} ataca con la espada a {$opponent->getName()}"
        );

        $opponent->takeDamage($this->damage);
    }

}