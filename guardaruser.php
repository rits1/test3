<?php

echo "<pre>";

var_dump($_POST);

echo "<hr>";

echo "<h1> Bienvenido al Sistema </h1>";
echo "<hr>";
echo "<hr>";

echo "<h2> Los datos ingresados son:</h2>";


echo  "<h1> tu usuario es: {$_POST ["usuario"]}<h1>";

echo "<br>";

echo "<h1> Tu contraña es: {$_POST ["contrasenia"]}</h1> ";

?>