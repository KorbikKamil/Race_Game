<?php

namespace Project;

class Weather{
    private $current = 'shining';

    public function getWeather(){
        return $this->current;
    }
}