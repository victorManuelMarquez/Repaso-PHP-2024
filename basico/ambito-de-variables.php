<?php

// hay 3 tipos de ámbito de una variable en PHP
// static, local, global

/* GLOBAL SCOPE */

echo "<h2>global</h2>";

$variable = 1000;

function unaFuncion() {
    // la variable no puede ser invocada aquí
    echo "<i>unaFuncion()</i> invocada, valor de la variable ".'$variable'." = $variable</br>";
}

unaFuncion();

echo '$variable en este script: ' . $variable . '</br>';

/* LOCAL SCOPE */

echo "<h2>local</h2>";

function otraFuncion() {
    $variable = 2242;
    echo "<i>otraFuncion()</i> invocada, valor de la variable ".'$variable'." = $variable</br>";
}

otraFuncion();

echo 'valor de $variable en este script: ' . $variable . '</br>';

/* global KEYWORD */

echo "<h2>global</h2>";

echo "<ul>";

echo "<li><i>global</i></li></br>";

function duplicar() {
    global $variable;
    $variable = $variable * 2;
    echo 'El valor de $variable se ha duplicado.</br>';
}

duplicar();
echo "Nuevo valor: $variable</br>";

/* $GLOBALS array */

echo "</br><li><i>".'$GLOBALS' . "['variable']</i></li></br>";

echo '$GLOBALS[' . "'variable'" . '] = ' . "$GLOBALS[variable] asignando nuevo valor...</br>";

$GLOBALS['variable'] = true;

echo '$variable ahora contiene ' . $variable . " y es de tipo " . gettype($variable) . '</br>';

echo "</ul>";

/* STATIC SCOPE */

echo "<h2>static</h2>";

function incrementar() {
    static $variable = 0;
    echo "valor inicial: $variable</br>";
    $variable++;
    echo "Nuevo valor de la variable local <b>$variable</b></br>";
}

incrementar();
incrementar();
incrementar();
incrementar();

?>