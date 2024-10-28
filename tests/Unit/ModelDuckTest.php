<?php

namespace Tests\Unit;

use Strategy\Duck\ModelDuck;
use PHPUnit\Framework\TestCase;
use Strategy\Behavior\FlyRocketPowered;

/**
 * command
 * docker compose exec phpunit vendor/bin/phpunit --testdox --colors=always tests/Unit/ModelDuckTest.php
 */
class ModelDuckTest extends TestCase
{
    private ModelDuck $duck;

    public function setUp(): void
    {
        parent::setUp();
        $this->duck = new ModelDuck();
    }

    /**
     * @test
     */
    public function test_quack()
    {
        $this->expectOutputString("Quack\n");
        $this->duck->performQuack();
    }

    /**
     * @test
     */
    public function test_fly()
    {
        $this->expectOutputString("I can't fly\n");
        $this->duck->performFly();
    }

    /**
     * @test
     */
    public function test_display()
    {
        $this->expectOutputString("I'm a model duck\n");
        $this->duck->display();
    }

    /**
     * @test
     */
    public function test_swim()
    {
        $this->expectOutputString("All ducks float, even decoys!\n");
        $this->duck->swim();
    }

    /**
     * @test
     */
    public function test_set_fly_behavior()
    {
        $this->expectOutputString("I'm flying with a rocket\n");
        $this->duck->setFlyBehavior(new FlyRocketPowered());
        $this->duck->performFly();
    }
}