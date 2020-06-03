#!/usr/bin/php
<?php
    date_default_timezone_set("Europe/Paris");
    $file = fopen("/var/run/utmpx", "r");
    while ($read = fread($file, 628)) {
        $read = unpack("a256user/a4id/a32line/ipid/itype/itime", $read);

        if ($read['type'] == 7) {
            echo trim($read['user']) . "  ";
            echo trim($read['line']) . "  ";
            $time = date("M  j h:i", $read['time']);
            echo $time . " \n";  
        };
    };