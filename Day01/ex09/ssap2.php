#!/usr/bin/php
<?php
    function my_sort($first, $second) {
        $first = strtolower($first);
        $second = strtolower($second);
        $sortmas = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j',
        'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w',
        'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        $len = strlen($first) < strlen($second) ? strlen($first) : strlen($second);
        for ($i = 0; $i < $len; $i++) {
            $firfir = substr($first, $i, 1);
            $secsec = substr($second, $i, 1);
            $find_first = array_search($firfir, $sortmas);
            $find_sec = array_search($secsec, $sortmas);
            $find_first = $find_first === false ? ord($firfir) + 100 : $find_first;
            $find_sec = $find_sec === false ? ord($secsec) + 100 : $find_sec;
            if ($find_first > $find_sec)
                return false;
            if ($find_sec > $find_first)
                return true;
        }
        return strlen($first) <= strlen($second) ? true : false;
    }

    function is_no_null($value) {
        if ($value === "0")
            return true;
        return !(empty($value));
    }

    $finmas = [];
    unset($argv[0]);
    foreach ($argv as $value) {
        $premas = array_filter(explode(" ", $value), 'is_no_null');
        foreach ($premas as $value)
            $finmas[] = $value;
    }
    for ($i = 0; $i < count($finmas) - 1;) {
        if (my_sort($finmas[$i], $finmas[$i + 1])) {
            $i++;
        } else {
            $tmp = $finmas[$i];
            $finmas[$i] = $finmas[$i + 1];
            $finmas[$i + 1] = $tmp;
            $i = 0;
        }
    }
    foreach ($finmas as $value)
        echo $value."\n";