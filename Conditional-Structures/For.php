<?php

/**
 * For: La idea del for es recorrer un arreglo
 */

$fruits = ['apple', 'pineapple' , 'strawberry', 'orange'];


//count($fruits) === length

for ($i = 0; $i < count($fruits); $i++  )
{
    echo " $fruits[$i] <br>";
}