<?php

namespace DesignPatternsInPHP\Strategy\Behaviors\Fly;

use DesignPatternsInPHP\Strategy\Interfaces\FlyBehaviorInterface;

class WithWings implements FlyBehaviorInterface {

	public function fly() {
		echo "I can fly with wings";
	}
}