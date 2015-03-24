<?php

class ParameterServiceComponent extends Nette\Application\UI\Control {

	public function __construct(array $xxx, App\Model\UserManager $userManager) {}

}

interface IParameterServiceComponentFactory {

	/** @return ParameterServiceComponent */
	function create(array $xxx);

}
