<?php

namespace DesignPatternsInPHP\Decorator;

use DesignPatternsInPHP\Decorator\Decorators\Mocha;
use DesignPatternsInPHP\Decorator\Decorators\Soy;
use DesignPatternsInPHP\Decorator\Decorators\Whip;

include_once "../vendor/autoload.php";

class Index {
	public function __construct() {
		$beverage = new Espresso();

		// Decorators
		$beverage = new Mocha( $beverage );
		$beverage = new Soy( $beverage );
		$beverage = new Whip( $beverage );

		echo $beverage->cost();
		echo $beverage->get_description();
	}
}

new Index();

