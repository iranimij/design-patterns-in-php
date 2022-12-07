<?php

namespace DesignPatternsInPHP\Decorator\Abstracts;

Abstract class CondimentDecoratorAbstract extends BeverageAbstract {
	public $beverage;

	public abstract function get_description();
}