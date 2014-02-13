<?php
/**
*
* Factory class to produce cats
*
* @author SmO
* @since 13.02.2014
*
**/
class CatFactory extends AbstractAnimalFactory
{
	protected function createAnimal($name)
	{
		$animal = new Cat($name);
		return $animal;
	}
}
?>