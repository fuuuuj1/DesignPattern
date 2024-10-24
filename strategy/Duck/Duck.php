<?php

namespace Strategy\Duck;

use Strategy\Behavior\FlyBehavior;
use Strategy\Behavior\QuackBehavior;

class Duck
{
    protected FlyBehavior $fly_behavior;
    protected QuackBehavior $quack_behavior;

    /**
     * カモの振る舞いを設定
     *
     * @param FlyBehavior $fly_behavior
     * @param QuackBehavior $quack_behavior
     */
    public function __construct(FlyBehavior $fly_behavior, QuackBehavior $quack_behavior)
    {
        $this->fly_behavior = $fly_behavior;
        $this->quack_behavior = $quack_behavior;
    }

    /**
     * 飛ぶ振る舞いを設定
     */
    public function performFly(): void
    {
        $this->fly_behavior->fly();
    }

    /**
     * 鳴く振る舞いを設定
     */
    public function performQuack(): void
    {
        $this->quack_behavior->quack();
    }

    /**
     * 外観を表示
     */
    public function display(): void
    {

    }

    /**
     * 泳ぐ
     */
    public function swim(): void
    {
        printf("All ducks float, even decoys!\n");
    }
}