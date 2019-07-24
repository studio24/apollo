<?php

function buildComponentStructureArray($componentDir)
{
    $componentStructure = [];
    $folders = getSubfoldersInFolder($componentDir);
    foreach ($folders as $folder) {
        $componentStructure[basename($folder)] = [
          'path'  => $folder,
          'name'  => basename($folder),
          'text' => $folder.'/'.basename($folder).'.md',
          'html' => $folder.'/'.basename($folder).'.html'
        ];
    }

    sort($componentStructure);

    return $componentStructure;
}

function getSubfoldersInFolder($folder)
{
    return glob($folder . '/*' , GLOB_ONLYDIR);
}

function getAllFilesInFolder($folder)
{

    if (!file_exists($folder)) {
        throw new \Exception('Folder does not exist');
    }

    // Get all files in Dir
    $directory = dir($folder);
    $files = array();

    while (false !== ($entry = $directory->read())) {
        if (is_file($folder . $entry)) {
            // check it isnt a filesystem directories
            if ($entry != '.' && $entry != '..' && $entry != '.DS_Store') {
                $files[] = $entry;
            }
        }
    }
    $directory->close();

    asort($files);

    return $files;
}