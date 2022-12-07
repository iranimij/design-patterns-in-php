<?php

namespace DesignPatternsInPHP\Decorator;

use DesignPatternsInPHP\Decorator\Abstracts\BeverageAbstract;

class Espresso extends BeverageAbstract {

	public function __construct() {
		$this->description = 'Espresso Description';
	}

	public function cost() {
		return 20;
	}

	public function get_description() {
		return $this->description;
	}
}