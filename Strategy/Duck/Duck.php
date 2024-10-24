<?php

namespace DesignPatterns\Strategy\Duck;

use DesignPatterns\Strategy\Behavior\FlyBehavior;
use DesignPatterns\Strategy\Behavior\QuackBehavior;

class Duck
{
    private FlyBehavior $fly_behavior;
    private QuackBehavior $quack_behavior;

    /**
     * init
     *
     * @param FlyBehavior $fly_behavior
     * @param QuackBehavior $quack_behavior
     */
    public function __construct(FlyBehavior $fly_behavior, QuackBehavior $quack_behavior)
    {
        $this->fly_behavior = $fly_behavior;
        $this->quack_behavior = $quack_behavior;
    }

    public function performFly(): void
    {
        $this->fly_behavior->fly();
    }

    public function performQuack(): void
    {
        $this->quack_behavior->quack();
    }

    public function display(): void
    {

    }

    public function swim(): void
    {
        printf("All ducks float, even decoys!\n");
    }
}