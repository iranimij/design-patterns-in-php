<?php

namespace DesignPatternsInPHP\Observer\Interfaces;

interface Subject {
	public function registerObserver( $observer );
	public function removeObserver( $observer );
	public function notifyObserver();
}