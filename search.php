<?php

if($argc!=4)
    die('Numero di parametri non corretto');
 
list($name, $file, $index, $key) = $argv;

if(!is_readable($file))
    die('File non trovato o non leggibile');

$text=file($file);
foreach( $text as $row){
    $fields= explode(',', $row);
    if($fields[$index]==$key)
        echo($row);
    }
?>
   