<?php
/**
*
* Abstract Factory class
*
* @author SmO
* @since 13.02.2014
*
**/
abstract class AbstractAnimalFactory
{
	protected $name;
	
	public function __construct()
	{	
	}
	
	public function birth($name)
	{
		$this->name = $name;
		$animal = $this->createAnimal($this->name);
		return $animal;
	}
	
	protected abstract function createAnimal($name);
}
?>