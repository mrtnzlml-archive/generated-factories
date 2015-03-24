<?php

class SimpleComponent extends Nette\Application\UI\Control {}

interface ISimpleComponentFactory { //STUPID factory!

	/** @return SimpleComponent */
	function create();

}
