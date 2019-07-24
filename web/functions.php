<?php

function buildComponentStructureArray($componentDir)
{
    $componentStructure = [];
    $folders = getSubfoldersInFolder($componentDir);
    foreach ($folders as $folder) {
        $componentStructure[basename($folder)] = [
          'path'  => $folder,
          'name'  => basename($folder),
          'text' => file_get_contents($folder.'/'.basename($folder).'.md'),
          'html' => $folder.'/'.basename($folder).'.html',
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
