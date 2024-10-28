<?php

namespace Strategy\Duck;

use Strategy\Behavior\FlyNoWay;
use Strategy\Behavior\Quack;

/**
 * 模型のカモ
 */
class ModelDuck extends Duck
{
    /**
     * 模型カモのコンストラクタ
     */
    public function __construct()
    {
        $this->fly_behavior = new FlyNoWay();
        $this->quack_behavior = new Quack();
    }

    /**
     * @return void
     */
    public function display(): void
    {
        printf("I'm a model duck\n");
    }
}
