#!/usr/bin/php
<?php
    if ($argc < 2)
        exit();
    echo trim(preg_replace("/\s+|\t\r/", " ", $argv[1]))."\n";
