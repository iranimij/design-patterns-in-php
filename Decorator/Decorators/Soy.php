<?php

namespace DesignPatternsInPHP\Decorator\Decorators;

use DesignPatternsInPHP\Decorator\Abstracts\CondimentDecoratorAbstract;

class Soy extends CondimentDecoratorAbstract {

	public function __construct( $beverage ) {
		$this->beverage = $beverage;
	}

	public function cost() {
		return $this->beverage->cost() + 2;
	}

	public function get_description() {
		return $this->beverage->get_description() . ', Soy';
	}
}