#!/usr/bin/php
<?php
    function get_month($month) {
        $mas_month = array(
            1 => "janvier",
            2 => "février",
            3 => "mars",
            4 => "avril",
            5 => "mai",
            6 => "juin",
            7 => "juillet",
            8 => "août",
            9 => "septembre",
            10 => "octobre",
            11 => "novembre",
            12 => "décembre");
        return (array_search(lcfirst($month), $mas_month));
    }
    if ($argc > 1) {
        date_default_timezone_set("Europe/Paris");
        if (preg_match("/([Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche) ([0-1][1-2]) ([Jj]anvier|[Ff]évrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]oût|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd]écembre) ((197|[2-9][0-9][0-9])\d{1}) (([01]?[0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]$)/", $argv[1], $date)) {
            echo (mktime($date[6][0].$date[6][1], $date[6][3].$date[6][4],
            $date[6][6].$date[6][7], get_month($date[3]), $date[2], $date[4]))."\n";
        } else
            echo "Wrong Format\n";
    }