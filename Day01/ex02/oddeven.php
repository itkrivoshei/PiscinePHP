#!/usr/bin/php
<?php
    while(1) {
        echo "Enter a number: ";
        $str = trim(fgets(STDIN));
        if (feof(STDIN)) {
            echo "\n";
            exit();
        }
        if (is_numeric($str)) {
            if ($str % 2 == 0)
                echo "The number ".$str." is even.\n";
            else
                echo "The number ".$str." is odd.\n";
        } else
            echo "'".$str."'"." is not a number.\n";
    }