<?php

namespace Observer\DisplayElement;

use Observer\Observer\Observer;
use Observer\Subject\WeatherData;

class RandomMessageDisplay implements DisplayElement, Observer
{
    private WeatherData $weather_data;
    private string $message;

    /**
     * 初期化
     *
     * @param WeatherData $weather_data
     */
    public function __construct(WeatherData $weather_data)
    {
        $this->weather_data = $weather_data;
        $this->weather_data->registerObserver($this);
    }

    /**
     * 気温からメッセージの更新と出力
     *
     * @return void
     */
    public function update(): void
    {
        $temperature = $this->weather_data->getTemperature();
        $this->message = $this->GenerateMessage($temperature);
        $this->display();
    }

    /**
     * 今日にひと言を表示
     *
     * @return void
     */
    public function display(): void
    {
        printf("今日のひと言: %s", $this->message);
    }

    /**
     * 気温によって出力するメッセージを切り替える
     *
     * @param float $temperature
     * @return string
     */
    private function GenerateMessage(float $temperature): string
    {
        $message = 'ぼちぼち';
        if ($temperature <= 10) {
            $message = '寒いよ';
        } elseif ($temperature >= 30) {
            $message = '暑いよ';
        }
        return $message . "\n";
    }
}