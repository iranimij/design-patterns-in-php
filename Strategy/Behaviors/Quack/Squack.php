<?php

namespace DesignPatternsInPHP\Strategy\Behaviors\Quack;

use DesignPatternsInPHP\Strategy\Interfaces\QuackBehaviorInterface;

class Squack implements QuackBehaviorInterface {

	public function quack() {
		echo "Squack actions!";
	}
}