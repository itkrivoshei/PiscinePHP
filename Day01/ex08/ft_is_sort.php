#!/usr/bin/php
<?php
    function ft_is_sort($mas) {
        $newmas = $mas;
        sort($newmas);
        if ($newmas === $mas)
            return(true);
        return(false);
    }