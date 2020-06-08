#!/usr/bin/php
<?php
    function ft_split($str) {
        $retrn = array_filter(explode(" ", $str));
        sort($retrn);
        return($retrn);
    }