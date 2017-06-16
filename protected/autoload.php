<?php
function __autoload($class){ 
    if (0 === strpos($class, 'App')){ 
        $name = str_replace('\\', '/', substr($class, 4)); 
        require __DIR__ . '/../protected/' . $name . '.php';      } 
 } 

