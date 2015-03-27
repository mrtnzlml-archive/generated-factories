<?php

namespace App\Presenters;

use App\Model;
use Nette;

abstract class BasePresenter extends Nette\Application\UI\Presenter {

	/** @var \IConfigComponentFactory @inject */
	public $configFactory;
	/** @var \IParameterComponentFactory @inject */
	public $parameterFactory;
	/** @var \IParameterServiceComponentFactory @inject */
	public $parameterServiceFactory;
	/** @var \IServiceComponentFactory @inject */
	public $serviceFactory;
	/** @var \ISimpleComponentFactory @inject */
	public $simpleFactory;
	/** @var \IAllInComponentFactory @inject */
	public $allInComponent;

	public function beforeRender() {
		parent::beforeRender();
		dump($this->configFactory->create());
		dump($this->parameterFactory->create(['test']));
		dump($this->parameterServiceFactory->create(['test']));
		dump($this->serviceFactory->create());
		dump($this->simpleFactory->create());
		dump($this->allInComponent->create(['test']));
	}

}
