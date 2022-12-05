<?php

namespace DesignPatternsInPHP\Observer\Observers;

use DesignPatternsInPHP\Observer\Interfaces\Display;
use DesignPatternsInPHP\Observer\Interfaces\Observer;

class FirstDisplay implements Observer, Display {
	private $temperature;
	private $humidity;
	private $pressure;

	public function __construct( $subject ) {
		$subject->registerObserver( $this );
	}

	public function display() {
		echo "< First Display >" . $this->temperature . $this->pressure . $this->humidity . "<br>";
	}

	public function update( $temperature, $humidity, $pressure ) {
		$this->temperature = $temperature;
		$this->humidity    = $humidity;
		$this->pressure    = $pressure;

		$this->display();
	}
}