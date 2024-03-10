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

    $source_images = array_filter($source_files, function($value){
        if(preg_match('/\.(jpg|png)$/i', $value)){
            return $value;
        }
    });

    return $source_images;
}

// => get all webp files
function get_converted_files($directory){
    $converted_files = scandir($directory);
    $converted_images = array_filter($converted_files, fn($value) => preg_match('/\.(webp)$/i', $value));

    return $converted_images;
}

// => get file size of all images
function get_all_images_filesize($directory, $files){
    $sum = 0;

    foreach($files as $file){
        $sum += filesize($directory . '/' . $file);
    }
   
    return round( ($sum / 1048576) , 2 );
}

// convert the image files
function convert_files($image_files, $quality,  $source_directory,  $target_directory){
    
    foreach($image_files as $image_file){
        $sliced_image_file = explode('.', $image_file)[0];

        shell_exec("cwebp -q {$quality} {$source_directory}/{$image_file} -o {$target_directory}/{$sliced_image_file}.webp");
    }
}