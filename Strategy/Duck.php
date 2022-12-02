<?php

namespace DesignPatternsInPHP\Strategy;

abstract class Duck {

	public $fly_behavior;
	public $quack_behavior;

	public abstract function display();

	public function swim() {
		echo "Swimming action";
	}

	public function perform_fly() {
		$this->fly_behavior->fly();
	}

	public function perform_quack() {
		$this->quack_behavior->quack();
	}

	public function set_fly_behavior( $fly_behavior ) {
		$this->fly_behavior = $fly_behavior;
	}

	public function set_quack_behavior( $quack_behavior ) {
		$this->quack_behavior = $quack_behavior;
	}
}