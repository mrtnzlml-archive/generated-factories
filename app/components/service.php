<?php

class ServiceComponent extends Nette\Application\UI\Control {

	public function __construct(App\Model\UserManager $userManager) {}

}

interface IServiceComponentFactory {

	/** @return ServiceComponent */
	function create();

}
