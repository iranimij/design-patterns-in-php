<?php

namespace DesignPatternsInPHP\Strategy\Behaviors\Fly;

use DesignPatternsInPHP\Strategy\Interfaces\FlyBehaviorInterface;

class NoFly implements FlyBehaviorInterface {

	public function fly() {
		echo "I can't fly";
	}
}