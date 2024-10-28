<?php

namespace Strategy\Behavior;

/**
 * ロケットで飛ぶ
 */
class FlyRocketPowered implements FlyBehavior
{
    /**
     * @return void
     */
    public function fly(): void
    {
        printf("I'm flying with a rocket\n");
    }
}