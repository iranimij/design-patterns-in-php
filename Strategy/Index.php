<?php

namespace DesignPatternsInPHP\Strategy;

use DesignPatternsInPHP\Strategy\Behaviors\Fly\WithWings;

include_once "../vendor/autoload.php";

class Index {

	public function __construct() {
		$rubber_duck = new RubberDuck();

		$rubber_duck->perform_fly();
		$rubber_duck->perform_quack();

		// Adding new fly behavior dynamically.
		$rubber_duck->set_fly_behavior( new WithWings() );

		$rubber_duck->perform_fly();
	}
}

new Index();