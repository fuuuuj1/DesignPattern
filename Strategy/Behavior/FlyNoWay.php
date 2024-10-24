<?php

namespace DesignPatterns\Strategy\Behavior;

class FlyNoWay implements FlyBehavior
{
    /**
     *
     * @return void
     */
    public function fly(): void
    {
        printf("I can't fly\n");
    }
}