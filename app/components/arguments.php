<?php

class ArgumentsComponent extends Nette\Application\UI\Control {

	public function __construct($configParam) {}

}

interface IArgumentsComponentFactory {

	/** @return ArgumentsComponent */
	function create();

}
