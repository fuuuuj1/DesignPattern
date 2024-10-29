<?php

namespace Observer\Subject;

use Observer\Observer\Observer;

class WeatherData implements Subject
{
    /** @var Observer[] */
    private array $observers = [];

    private float $temperature;
    private float $humidity;
    private float $pressure;

    /**
     * 初期化
     *
     * @param Observer[] $observers
     */
    public function __construct(array $observers = [])
    {
        $this->observers = $observers;
    }

    /**
     * 指定されたオブザーバーの登録
     *
     * @param Observer $observer
     * @return void
     */
    public function registerObserver(Observer $observer): void
    {
        $index = array_search($observer, $this->observers, true);
        if ($index === false) {
            $this->observers[] = $observer;
        }
    }

    /**
     * 指定されたオブザーバーの削除
     *
     * @param Observer $observer
     * @return void
     */
    public function removeObserver(Observer $observer): void
    {
        // 指定された要素が存在しているかを確認
        $index = array_search($observer, $this->observers, true);
        if ($index !== false) { // 仮に index = 0で返された場合に厳密に比較しないと判定ミスを起こす
            unset($this->observers[$index]);
            $this->observers = array_values($this->observers);
        }
    }

    /**
     * 変化による通知
     *
     * @return void
     */
    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update(
                $this->temperature,
                $this->humidity,
                $this->pressure
            );
        }
    }

    /**
     * 測定値更新時の処理
     *
     * @return void
     */
    public function measurementChanged(): void
    {
        $this->notifyObservers();
    }

    /**
     * 測定値の取得 + 更新処理
     *
     * @param float $temperature
     * @param float $humidity
     * @param float $pressure
     * @return void
     */
    public function setMeasurements(float $temperature, float $humidity, float $pressure): void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;

        $this->measurementChanged();
    }

    /**
     * 気温の取得
     * 
     * @return float
     */
    public function getTemperature(): float
    {
        return $this->temperature;
    }

    /**
     * 湿度の取得
     *
     * @return float
     */
    public function getHumidity(): float
    {
        return $this->humidity;
    }

    /**
     * 気圧の取得
     *
     * @return float
     */
    public function getPressure(): float
    {
        return $this->pressure;
    }
}