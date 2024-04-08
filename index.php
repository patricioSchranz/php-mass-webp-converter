<?php
require __DIR__ . '/functions/functions.php' ;

$source_directory = __DIR__ . '/cybertron/source';
$converted_directory = __DIR__ . '/cybertron/converted';

$source_files = get_source_files($source_directory);
$source_file_size = get_all_images_filesize($source_directory, $source_files);

$can_be_converted = empty($source_files) ? false : true;

// => start the conversion
if( isset($_GET['convert']) && $can_be_converted ) { 

    $small_size = false;
    $medium_size = false;
    $additonal_sizes_count = 0;

    if( isset($_GET['small']) ) { 
        $small_size = $_GET['small'];
        $additonal_sizes_count += 1; 
    }

    if( isset($_GET['medium']) ) { 
        $medium_size = $_GET['medium']; 
        $additonal_sizes_count += 1; 
    }

    convert_files($source_files, 85,  $source_directory,  $converted_directory, $small_size, $medium_size);

    $converted_files = get_converted_files($converted_directory);
    $converted_file_size = get_all_images_filesize($converted_directory, $converted_files);
    $saved_storage_space = $source_file_size - $converted_file_size;

    // echo "size of all source files => {$source_file_size}";
    // echo "size of all converted files => {$converted_file_size}";
}


require __DIR__ . '/layout/header.php' ;
require __DIR__ . '/views/index.view.php' ;
require __DIR__ . '/layout/footer.php'; 