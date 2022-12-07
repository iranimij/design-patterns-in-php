<?php

namespace DesignPatternsInPHP\Decorator\Decorators;

use DesignPatternsInPHP\Decorator\Abstracts\CondimentDecoratorAbstract;

class Mocha extends CondimentDecoratorAbstract {

	public function __construct( $beverage ) {
		$this->beverage = $beverage;
	}

	public function cost() {
		return $this->beverage->cost() + 1;
	}

	public function get_description() {
		return $this->beverage->get_description() . ', Mocha';
	}
}