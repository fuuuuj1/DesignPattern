<?php

namespace Observer\Observer;

interface Observer
{
    public function update(
        float $temperature,
        float $humidity,
        float $pressure,
    );
}