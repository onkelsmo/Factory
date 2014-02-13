<?php
/**
*
* Index-File from Factory Pattern example
*
* @author SmO
* @since 13.02.2014
*
**/
include '../freaky_functions/freaky_functions.php';
include 'AbstractAnimalFactory.php';
include 'CatFactory.php';
include 'DogFactory.php';
include 'Animal.php';
include 'Cat.php';
include 'Dog.php';

$catFactory = new CatFactory();
$cat = $catFactory->birth('Garfield');

dump($cat);

$dogFactory = new DogFactory();
$dog = $dogFactory->birth('Pluto');

dump($dog);

$cat->makeNoise();
$dog->makeNoise();

?>