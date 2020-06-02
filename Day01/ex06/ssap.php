#!/usr/bin/php
<?php
    if ($argc > 1) {
        $line = "";
        for ($i = 1; $i < $argc; $i++)
            $line .= " $argv[$i] ";
        $mas = explode(" ", trim($line));
        sort($mas);
        $count = count($mas);
        for ($i = 0; $i < $count; $i++)
            if ($mas[$i] != "")
                echo "$mas[$i]\n";
    }