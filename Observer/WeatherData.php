<?php

namespace DesignPatternsInPHP\Observer;

use DesignPatternsInPHP\Observer\Interfaces\Subject;

class WeatherData implements Subject {

	public $observers = [];
	private $temperature;
	private $humidity;
	private $pressure;

	public function registerObserver( $observer ) {
		$this->observers[] = $observer;
	}

	public function removeObserver( $observer ) {
		$this->observers = array_diff( $this->observers, $observer );
	}

	public function notifyObserver() {
		foreach ( $this->observers as $observer ) {
			$observer->update( $this->temperature, $this->humidity, $this->pressure );
		}
	}

	public function setMeasurements( $temperature, $humidity, $pressure ) {
		$this->temperature = $temperature;
		$this->humidity    = $humidity;
		$this->pressure    = $pressure;

		$this->notifyObserver();
	}
}