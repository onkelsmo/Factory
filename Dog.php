<?php
/**
*
* class to create a dog
*
* @author SmO
* @since 13.02.2014
*
**/
class Dog extends Animal
{
	public function makeNoise()
	{
		echo "{$this->name} says: Wuff!";
		nl();
	}
}
?>