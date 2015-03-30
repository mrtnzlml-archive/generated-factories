<?php

namespace App\Presenters;

use App\Model;
use Nette;

abstract class BasePresenter extends Nette\Application\UI\Presenter {

	/** @var \IAllInComponentFactory @inject */
	public $allInComponent;
	/** @var \IAllIn2ComponentFactory @inject */
	public $allIn2Component;
	/** @var \IArgumentsComponentFactory @inject */
	public $argumentsFactory;
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

	public function beforeRender() {
		parent::beforeRender();
		dump($this->allInComponent->create(['test']));
		dump($this->allIn2Component->create(['test']));
		dump($this->argumentsFactory->create());
		dump($this->configFactory->create());
		dump($this->parameterFactory->create(['test']));
		dump($this->parameterServiceFactory->create(['test']));
		dump($this->serviceFactory->create());
		dump($this->simpleFactory->create());
	}

}
