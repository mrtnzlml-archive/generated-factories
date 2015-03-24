<?php

class AllInComponent extends Nette\Application\UI\Control {

	public function __construct($configParam1, array $userParam, App\Model\UserManager $userManager, $configParam2) {}

}

interface IAllInComponentFactory {

	/** @return AllInComponent */
	function create(array $userParam);

}
