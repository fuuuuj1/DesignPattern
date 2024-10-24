<?php

namespace Strategy\Behavior;

class MuteQuack implements QuackBehavior
{
    /**
     *
     * @return void
     */
    public function quack(): void
    {
        printf("<< Silence >>\n");
    }
}