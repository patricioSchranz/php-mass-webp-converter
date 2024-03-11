<?php
require __DIR__ . '/functions/functions.php' ;

$source_directory = __DIR__ . '/cybertron/source';
$converted_directory = __DIR__ . '/cybertron/converted';

$source_files = get_source_files($source_directory);
$source_file_size = get_all_images_filesize($source_directory, $source_files);


// => start the conversion
if( isset($_GET['convert']) && !empty($source_files) ) { 

    echo 'yes';

    convert_files($source_files, 85,  $source_directory,  $converted_directory);

    $converted_files = get_converted_files($converted_directory);
    $converted_file_size = get_all_images_filesize($converted_directory, $converted_files);
    $saved_storage_space = $source_file_size - $converted_file_size;

    // echo "size of all source files => {$source_file_size}";
    // echo "size of all converted files => {$converted_file_size}";
}


require __DIR__ . '/layout/header.php' ;
require __DIR__ . '/views/index.view.php' ;
require __DIR__ . '/layout/footer.php'; 