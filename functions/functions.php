<?php

// => better dump
function dump($value, $title = '---'){
    echo "<h1>$title</h1>";
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

// => get all jpg and png files
function get_source_files($directory){
    $source_files = scandir($directory);
    $source_images =[];

    foreach($source_files as $file){
        if(preg_match('/\.(jpg|png)$/i', $file)){
            $source_images[] = $file;
        }
    }

    return $source_images;
}

// => get file size of all images
function get_all_images_filesize($directory, $files){
    $sum = 0;

    foreach($files as $file){
        $sum += filesize($directory . '/' . $file);
    }
   
    return round( ($sum / 1000000) , 2 );
}