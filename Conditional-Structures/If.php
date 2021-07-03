<?php

/**
 * If: Compara una conndicion, si se cumple esta condicion,
 * las líneas de codigo dentro del if se cumple
 */

 $age = 55;

 if($age > 50)
 {
    echo "Usted tiene $age, quiere decir que es tu turno para la vacuna";
 }else
 {
    echo "Usted no aún en la lista";
 }