<?php

namespace DesignPatternsInPHP\Strategy\Behaviors\Quack;

use DesignPatternsInPHP\Strategy\Interfaces\QuackBehaviorInterface;

class MuteQuack implements QuackBehaviorInterface {

	public function quack() {
		echo "Mute Quack actions!";
	}
}