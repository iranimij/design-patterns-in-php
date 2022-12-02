<?php

namespace DesignPatternsInPHP\Strategy;

use DesignPatternsInPHP\Strategy\Behaviors\Fly\NoFly;
use DesignPatternsInPHP\Strategy\Behaviors\Quack\MuteQuack;

class RubberDuck extends Duck {

	public function __construct() {
		$this->fly_behavior = new NoFly();
		$this->quack_behavior = new MuteQuack();
	}

	public function display() {
		echo "Rubber duck has been displayed!";
	}
}