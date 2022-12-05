<?php

namespace DesignPatternsInPHP\Observer;

use DesignPatternsInPHP\Observer\Observers\FirstDisplay;
use DesignPatternsInPHP\Observer\Observers\SecondDisplay;
use DesignPatternsInPHP\Observer\Observers\ThirdDisplay;

include_once "../vendor/autoload.php";

/**
 * Weather station.
 */
class Index {
	public function __construct() {
		// creating Subject object.
		$weather_data = new WeatherData();

		new FirstDisplay( $weather_data ); // Creating observer object and registering subject.
		new SecondDisplay( $weather_data ); // Creating observer object and registering subject.
		new ThirdDisplay( $weather_data ); // Creating observer object and registering subject.

		// After each new setting data all of our displays will be changed.
		$weather_data->setMeasurements( 80, 64, '29.2f' );
//		$weather_data->setMeasurements( 82, 60, '19.2f' );
	}
}

new Index();