#!/usr/bin/php
<?php
    if ($argc > 1) {
        $mas = array_values(array_filter(explode(' ', $argv[1])));
        $mas[count($mas)] = $mas[0];
        unset($mas[0]);
        foreach ($mas as $value)
            $rez .= $value." ";
        echo trim($rez)."\n";
    }