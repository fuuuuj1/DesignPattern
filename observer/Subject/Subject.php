<?php

namespace Observer\Subject;

use Observer\Observer\Observer;

interface Subject
{
    public function registerObserver(Observer $observer);

    public function removeObserver(Observer $observer);

    /**
     * Subjectの状態が変わったタイミングで呼び出す
     *
     * @return void
     */
    public function notifyObservers();
}