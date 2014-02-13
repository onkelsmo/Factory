<?php
/**
*
* Factory class to produce dogs
*
* @author SmO
* @since 13.02.2014
*
**/
class DogFactory extends AbstractAnimalFactory
{
	protected function createAnimal($name)
	{
		$animal = new Dog($name);
		return $animal;
	}
}
?>