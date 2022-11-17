<?php

// varibal NULL and print -> var_dump
$x = null;
echo var_dump($x).'<br>';

// Array Frist definition and print -> var_dump
$cars = array("Lamborghini", "BMW", "Toyota"); 
echo var_dump($cars). '<br>' ;
echo var_dump( "I love " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".") .'<br>';

// Array Second definition and print -> var_dump
$source_array = [5, 7, 20, 0.9, true];
echo var_dump($source_array ). '<br>' ;
echo var_dump( " My number " . $source_array[0] . ", " . $source_array[1] . ", " . $source_array[2] . " and approximation " . $source_array[3] . " is ". $source_array[4]. ".") .'<br>';

?>