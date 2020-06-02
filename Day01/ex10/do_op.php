#!/usr/bin/php
<?php
    if ($argc != 4) {
        echo "Incorrect Parameters\n";
        exit();
    }
    switch (trim($argv[2])) {
        case ("*") :
            echo trim($argv[1]) * trim($argv[3]);
            break;
        case ("+") :
            echo trim($argv[1]) + trim($argv[3]);
            break;
        case ("-") :
            echo trim($argv[1]) - trim($argv[3]);
            break;
        case ("/") :
            echo trim($argv[1]) / trim($argv[3]);
            break;
        case ("%") :
            echo trim($argv[1]) % trim($argv[3]);
            break;
    } echo "\n";