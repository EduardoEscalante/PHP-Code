<?php
//Se puede imprimir una letra de un string con []
$data = 'Estudio PHP';
echo "$data[0] <br><br>";

//
$post = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis beatae architecto facilis,
facere, molestiae nulla blanditiis consequuntur minima excepturi, dolor nobis nam! Neque inventore
repellendus quos cumque magnam impedit vel!";

$extract = substr($post, 0, 20);

echo "$extract... [ver más] <br><br>";


//
$courses = 'javascript, php, laravel';
$tags = explode(', ', $courses);
echo "<pre>";
var_dump($tags);
echo "<br><br>"; 

//
$cursos = ['javascript', 'php', 'laravel'];
echo implode(', ' ,$cursos) . "<br><br";

//
$texto = "                              hola como estas";
$text = trim($texto);
echo "<pre>";
echo "Eduardo! $texto <br>";
echo "Eduardo! $text";