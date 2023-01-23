<?php

//Constants
define('NAME', 'Yooshi');

//Vars
$name = 'Yoshi';
$age = 30;

//Strings
//concat with . with ''
//with "" dont need to concat
// escaping: \"BKAH\" OR '""'

//String Functions
//strlen() = finding string length
//strtoupper
//strtolower
//str_replace('what u wanna replace', 'what u wanna replace with', the string you do it on)

//Number functions
//floor() -it will round down to the nearest int
//ceil() -it will round up the nearest int

//ARRAYS
//indexed arrays[] || array()

//print_r() = prints what you need on the screen
//array_push()
//count() = count length of array
//array_merge(1,2)

//Associative Arrays keys and value
//[key => value]
//to add $ninjastwo['toad'] = pink (now its added to new ass array)




?>



<html>
    <head>
        <title>My First PHP file</title>
    </head>
    <body>
        <h1>User Profile Page</h1>
        <div><?php echo $name; ?></div>
        <div><?php echo $age; ?></div>
    </body>
</html>