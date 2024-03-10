<?php
require __DIR__ . '/functions/functions.php' ;

// $output = shell_exec('cwebp -q 90 yoga-13.jpg -o yoga-13.webp');

// shell_exec('cwebp -q 90 yoga-14.jpg -o yoga-14.webp');

$source_directory = __DIR__ . '/cybertron/source';
$converted_directory = __DIR__ . '/cybertron/converted';

$source_files = get_source_files($source_directory);
$source_file_size = get_all_images_filesize($source_directory, $source_files);

require __DIR__ . '/layout/header.php' ;
require __DIR__ . '/views/index.view.php' ;
require __DIR__ . '/layout/footer.php'; 