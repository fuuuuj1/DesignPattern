<?php

namespace Strategy\Duck;

use Strategy\Behavior\FlyBehavior;
use Strategy\Behavior\FlyWithWing;
use Strategy\Behavior\Quack;
use Strategy\Behavior\QuackBehavior;

class MallardDuck extends Duck
{
    protected FlyBehavior $fly_behavior;
    protected QuackBehavior $quack_behavior;

    /**
     * マガモのコンストラクタ
     */
    public function __construct()
    {
        $this->fly_behavior = new FlyWithWing();
        $this->quack_behavior = new Quack();
    }

    /**
     * @return void
     */
    public function display(): void
    {
        printf("I'm a real Mallard duck\n");
    }
}