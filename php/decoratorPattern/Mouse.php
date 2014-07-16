<?php  namespace php\decoratorPattern;

class Mouse extends HardwareDecorator{
	protected $hardware;

	public function __construct(Hardware $hardware){
		$this->hardware = $hardware;
	}

	public function getDescription(){
	$this->description .= $this->hardware->getDescription().' + Mouse';
			return $this->description;
	}

	public function cost(){
		return $this->hardware->cost()+40;
	}

}

