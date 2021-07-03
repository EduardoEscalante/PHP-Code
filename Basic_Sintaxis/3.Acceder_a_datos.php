<?php

/**
 * Se puede acceder a los datos de un array con corchetes {}
 */
$courses = [
    'backend' => [
        'PHP',
        'Laravel' 
    ]
];
echo "Yo estudio: {$courses['backend'][0]} <br>";


/**
 * Se puede acceder a los datos de una clase con la flecha ->
 */
class User
{
    public $name = "Eduardo";
}
$user = new User;
echo "Mi nombre es $user->name <br>";




/**
 * Se puede acceder a una funcion con corchetes {}
 */
function getTeacher()
{
    return 'teacher';
}

echo "${getTeacher()} enseña PHP";