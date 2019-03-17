<?php 

$tablet_portrait = 768;
$tablet_landscape = 1024;

$mobile_portrait = 375;
$mobile_landscape = 667;

$desktop = 1366;

$width_of_doc = $desktop;
//this is bot of them added up
$content_gutters = 150;
$col_count = 4;
$content_width = $width_of_doc - $content_gutters;
$col_gutter = $content_gutters / $col_count; 
//the last colum does not need a gutter
$col_gutters_total = $col_gutter * ($col_count - 1); 
$column_width = ( $content_width - $col_gutters_total ) / $col_count;  

echo $column_width; ?>
