<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Observer\Subject\WeatherData;
use Observer\Observer\Observer;

/**
 * command
 * docker compose exec phpunit vendor/bin/phpunit --testdox --colors=always tests/Unit/WeatherDataTest.php
 */
class WeatherDataTest extends TestCase
{
    /**
     * @test
     */
    public function test_オブザーバーの登録(): void
    {
        // Arrange
        $weather_data = new WeatherData();
        // 本当はobserver interfaceを利用したクラスを作成してテストすべき？
        $observer_mock = $this->createMock(Observer::class);
        
        // Act
        $weather_data->registerObserver($observer_mock);

        // Assert
        $this->assertEquals(1, $weather_data->getObserverCount());
    }

    /**
     * @test
     */
    public function test_オブザーバーの登録解除(): void
    {
        // Arrange
        $observer_mock = $this->createMock(Observer::class);
        $weather_data = new WeatherData([$observer_mock]);

        // Act
        $weather_data->removeObserver($observer_mock);

        // Assert
        $this->assertEquals(0, $weather_data->getObserverCount());
    }
}