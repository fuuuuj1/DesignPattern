<?php

namespace Tests\Unit;

use Strategy\Duck\MallardDuck;
use PHPUnit\Framework\TestCase;

/**
 * command
 * docker compose exec phpunit vendor/bin/phpunit --testdox --colors=always tests/Unit/MallardDuckTest.php
 */
class MallardDuckTest extends TestCase
{
    private MallardDuck $duck;

    public function setUp(): void
    {
        parent::setUp();
        $this->duck = new MallardDuck();
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
        $this->expectOutputString("I'm flying\n");
        $this->duck->performFly();
    }

    /**
     * @test
     */
    public function test_display()
    {
        $this->expectOutputString("I'm a real Mallard duck\n");
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
}