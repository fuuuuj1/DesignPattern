<?php

namespace Tests\Functional;

use Observer\DisplayElement\CurrentConditionDisplay;
use Observer\Subject\WeatherData;
use PHPUnit\Framework\TestCase;

/**
 * command
 * docker compose exec phpunit vendor/bin/phpunit --testdox --colors=always tests/Functional/ObserverTest.php
 */
class ObserverTest extends TestCase
{
    /**
     * @test
     */
    public function test_気象情報の表示()
    {
        // Arrange
        // 気象情報の作成
        $weather_data = new WeatherData();

        // 気象情報を表示するクラスのインスタンス化
        $current_condition_display = new CurrentConditionDisplay($weather_data);

        // Act
        // 適当な気象情報のセット
        $weather_data->setMeasurements(22.7, 57.2, 1013.0);

        // Assert
        $this->expectOutputString("現在の気象状況： 温度:22.7度 | 湿度:57.2%");
    }
}