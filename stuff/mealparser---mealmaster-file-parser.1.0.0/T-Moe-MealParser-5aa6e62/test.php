<?php 
include 'MealParser.php';

$m = new MealParser();

$m->parseFile('test');
foreach ($m->getRecipes() as $recipe) {
    echo $recipe['title'] . "\n";
}
?>