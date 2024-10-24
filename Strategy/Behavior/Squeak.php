<?php

namespace Strategy\Behavior;

class Squeak implements QuackBehavior
{
    /**
     *
     * @return void
     */
    public function quack(): void
    {
        printf("Squeak\n");
    }
}