<?php

namespace DesignPatterns\Strategy\Behavior;

class FlyWithWing implements FlyBehavior
{
    /**
     *
     * @return void
     */
    public function fly(): void
    {
        printf("I'm flying\n");
    }
}