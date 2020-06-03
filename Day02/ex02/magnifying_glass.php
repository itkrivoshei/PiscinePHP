#!/usr/bin/php
<?php
    if (!file_exists($argv[1]) || $argc < 2)
        exit();
    $read_file = fopen($argv[1], "r");
    $final_file = "";
    while ($read_file && !feof($read_file))
        $final_file .= fgetc($read_file);
    $final_file = preg_replace_callback("/(<a )(.*?)(>)(.*)(<\/a>)/si", function($point) {
        $point[0] = preg_replace_callback("/( title=\")(.*?)(\")/mi", function($point) {
            return ($point[1]."".strtoupper($point[2])."".$point[3]);
        }, $point[0]);
        $point[0] = preg_replace_callback("/(>)(.*?)(<)/si", function($point) {
            return ($point[1]."".strtoupper($point[2])."".$point[3]);
        }, $point[0]);
        return ($point[0]);
    }, $final_file);
    echo $final_file;