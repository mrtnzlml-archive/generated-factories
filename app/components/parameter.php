<?php

class ParameterComponent extends Nette\Application\UI\Control {

	public function __construct(array $xxx) {}

}

interface IParameterComponentFactory {

	/** @return ParameterComponent */
	function create(array $xxx);

}
