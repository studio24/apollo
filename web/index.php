<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once (__DIR__ . '/functions.php');

$componentStructureArray = buildComponentStructureArray(__DIR__ . '/components');

?>

<!doctype html>

<?php

foreach ($componentStructureArray as $component):
    echo '<a href="#components-' . $component['name'] . '">' . $component['name'] . '</a>';
    echo '<br>';
	echo "<h2>explanation</h2>";
    echo $component['text'];
	include( $component['html'] );
    echo '<textarea>';
    echo "<h2>example</h2>";
	echo  $component['markup'];
	echo '</textarea>';
    echo '<br><hr><br>';
endforeach;
