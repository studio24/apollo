<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once (__DIR__ . '/functions.php');

$componentStructureArray = buildComponentStructureArray(__DIR__ . '/components');

foreach ($componentStructureArray as $component):
    echo '<a href="#components-' . $component['name'] . '">' . $component['name'] . '</a>';
    echo '<br>';
    echo '<pre>' . $component['text'] . '</pre>';
    echo '<pre>' . $component['html'] . '</pre>';
    echo '<br><hr><br>';
endforeach;