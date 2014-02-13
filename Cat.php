<?php
/**
*
* class to create a cat
*
* @author SmO
* @since 13.02.2014
*
**/
class Cat extends Animal
{
	public function makeNoise()
	{
		echo "{$this->name} says: Meow!";
		nl();
	}
}
?>