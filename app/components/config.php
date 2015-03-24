<?php

class ConfigComponent extends Nette\Application\UI\Control {

	public function __construct($configParam) {}

}

interface IConfigComponentFactory {

	function create();

}
