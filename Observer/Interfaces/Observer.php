<?php

namespace DesignPatternsInPHP\Observer\Interfaces;

interface Observer {
	public function update( $temperature, $humidity, $pressure );
}