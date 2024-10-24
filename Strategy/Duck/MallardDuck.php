<?php

namespace DesignPatterns\Strategy\Duck;

use DesignPatterns\Strategy\Behavior\FlyWithWing;
use DesignPatterns\Strategy\Behavior\Quack;

class MallardDuck extends Duck
{
    private $fly_behavior;
    private $quack_behavior;

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