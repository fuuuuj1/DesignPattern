<?php

namespace DesignPatterns\Strategy\Behavior;

class Quack implements QuackBehavior
{
    /**
     *
     * @return void
     */
    public function quack(): void
    {
        printf("Quack\n");
    }
}