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
     * 標準出力に「quack」と表示されること
     *
     * @return void
     */
    public function test_quack()
    {
        $this->expectOutputString("Quack\n");
        $this->duck->performQuack();
    }
}