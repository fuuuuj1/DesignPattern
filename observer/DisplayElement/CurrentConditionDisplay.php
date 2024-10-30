<?php

namespace Observer\DisplayElement;

use Observer\Observer\Observer;
use Observer\Subject\WeatherData;

class CurrentConditionDisplay implements DisplayElement, Observer
{
    private float $temperature;
    private float $humidity;
    private WeatherData $weather_data;

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
     * 気象観測情報の更新
     *
     * @return void
     */
    public function update()
    {
        $this->temperature = $this->weather_data->getTemperature();
        $this->humidity = $this->weather_data->getHumidity();
        $this->display();
    }

    /**
     * 気象情報の出力
     *
     * @return void
     */
    public function display(): void
    {
        // 小数点1桁まで表示
        printf("現在の気象状況： 温度:%.1f度 | 湿度:%.1f%%\n", $this->temperature, $this->humidity);
    }
}