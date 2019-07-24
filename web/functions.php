<?php

require_once( 'Parsedown.php' );



function buildComponentStructureArray($componentDir)
{
	$parsedown = new Parsedown();
    $componentStructure = [];
    $folders = getSubfoldersInFolder($componentDir);
    foreach ($folders as $folder) {
        $componentStructure[basename($folder)] = [
          'path'  => $folder,
          'name'  => basename($folder),
          'text' => $parsedown->text( file_get_contents($folder.'/'.basename($folder).'.md') ),
          'html' => file_get_contents($folder.'/'.basename($folder).'.html'),
          'markup' => htmlspecialchars( file_get_contents($folder.'/'.basename($folder).'.html'))
        ];
    }

    sort($componentStructure);

    return $componentStructure;
}

function getSubfoldersInFolder($folder)
{
    return glob($folder . '/*' , GLOB_ONLYDIR);
}
