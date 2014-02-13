<?php
/**
*
* Abstract class to describe an animal
*
* @author SmO
* @since 13.02.2014
*
**/
abstract class Animal
{
	protected $name;
	protected $age;
	
	public function __construct($name)
	{
		$this->name = $name;
		$this->age = 1;
	}
	
	public abstract function makeNoise();
}
?>