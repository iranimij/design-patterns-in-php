<?php

namespace DesignPatternsInPHP\Decorator\Abstracts;

Abstract class BeverageAbstract {
	public $description;

	public abstract function cost();
}