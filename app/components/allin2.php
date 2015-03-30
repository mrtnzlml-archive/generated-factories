<?php

class AllIn2Component extends Nette\Application\UI\Control {

	public function __construct($configParam1, array $userParam, App\Model\UserManager $userManager, $configParam2) {}

}

interface IAllIn2ComponentFactory {

	/** @return AllIn2Component */
	function create(array $userParam);

}
