#!/usr/bin/php
<?php
    if ($argc == 2) {
        $mas = explode(" ", trim($argv[1]));
        $count = count($mas);
        for ($i = 0; $i < $count - 1; $i++)
            if ($mas[$i] != "")
                echo "$mas[$i] ";
        echo "$mas[$i]\n";
    }